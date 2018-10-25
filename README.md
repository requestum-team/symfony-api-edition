Docs
--------
/api/doc

Authentication
--------------
Api uses OAuth2 authentication. To authenticate your request add "Authorization" header with value "Bearer access_token"

Fixtures
--------
**User 1**\
   username: artur@gmail.com\
   password: 123

**User 2**\
   username: kirill@gmail.com\
   password: 123
   
**Access Tokens:** Access_Token_For_Artur, Access_Token_For_Kirill

CRUD operations
---------------
- [Create](#create-operation) 
- [Read](#read-operations)
- [Update](#update-operation)
- [Delete](#delete-operations)

| Method         | Action   | Description                                   | Example Route |
| -------------- | -------- | --------------------------------------------- |-------------- |
| POST           | create   | Create a new element                          |/items         |
| GET            | fetch    | Retrieve element                              |/items         |
|                | list     | Retrieve the list of elements (Collection)    |/items/{id}    |
| PATCH          | update   | Update an element                             |/items/{id}    |
| DELETE         | delete   | Delete an element                             |/items/{id}    |

**Configuring operations** \
1 Configure service \
Example:
```php
# config/services.yml

services:
    ...
    action.myitem.create:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\CreateAction
        arguments:
            - AppBundle\Entity\MyItem
            - AppBundle\Form\MyItem\MyItemType
        calls:
            - ['setOptions', [{'serialization_groups':['full_myitem', 'default'], 'before_save_events': ['action.before_save_myitem']}]]
    ...
```
 Where:\
 `action.myitem.create` - service name \
 `- MyPoject\MyBundle\Entity\Items` - item class, required parameter \
 `- MyPoject\MyBundle\Form\Item\ItemsType` - item form class, required for create and update operations \
 `'setOptions'` - array of options (See [Basic options](#basic-options))
 
 2 Add service to routing \
Example
 ```php
 # config/routing.yml
 ...
 myitem.create:
     path: /myitems
     methods: POST
     defaults: { _controller: action.myitem.create:executeAction }
...
```
 Where:\
 `myitem.create` - route name \
 `path: /myitems` - path \
 `methods: POST` - need HTTP method \
 `_controller: action.myitem.create:executeAction` - service and action 

## Basic options
 
 | Option                           | Type      | Available for actions | Example                                                   |
 | -------------------------------- | --------  | --------------------- |---------------------------------------------------------- |
 | serialization_groups             | array     | All                   |`'serialization_groups': ['default', 'my_group']`          |
 | access_attribute                 |           | All                   |                                                           |
 | serialization_check_access       | boolean   | All                   |`'serialization_check_access': false`                      |
 | fetch_field                      | string    | All                   |`'fetch_field': 'customIdentifierField'`                   |
 | preset_filters                   | array     | All                   |`preset_filters:{availableForUser: '__USER__'}`            |
 | use_lock                         | boolean   | Create, Update        |`'use_lock': true`                                         |
 | http_method                      | string    | Create, Update        |`'http_method': PUT`                                       |
 | success_status_code              | string    | Create, Update        |`'success_status_code' : Response::HTTP_CREATED`           |
 | return_entity                    | boolean   | Create, Update        |`'return_entity' : true`                                   |
 | form_options                     | array     | Create, Update        |                                                           |
 | before_save_events               | array     | Create, Update        |`'before_save_events': ['action.before_save_item']`        |
 | after_save_events                | array     | Create, Update        |`'after_save_events': ['action.after_save_item']`          |
 | filters                          | array     | List                  |`'filters': ['user', 'categories', 'query', 'order-by']`   |
 | before_delete_events             | array     | Delete                |`'before_delete_events': ['action.before_delete_item']`    |
 
 
---------
## Create operation

---------------
## Read operations

There are two types of read operations: collection operations ([List](#list)) and single item ([Fetch](#fetch)) operations.

## List
Get list of items. \
Object type: collection \
HTTP method: GET 

Service configuration example:
```php
# config/services.yml

services:
    ...
    action.myitem.list:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\ListAction
        arguments:
            - MyProject\MyBundle\Entity\MyItems
        calls:
            - ['setOptions', [{'filters': ['user', 'post', 'collaborator', 'follower','query', 'order-by', 'feedForUser'],  preset_filters:{availableForUser: '__USER__', order-by: 'createdAt|desc'}}]]
    ...
```
Routing example: 
 ```php
 # config/routing.yml
...
myitem.list:
    path: /myitems
    methods: GET
    defaults: { _controller: action.myitem.list:executeAction }
...
```
**Additional functionality**\
**_Filters_**\
Filtering by entity properties is available. \
To change the filtering logic by association entities or existing filters, you need to make changes to the ```getPathAliases()``` method in the entity repository. 
Example:
```php
# YourBundle\Repository\ItemRepository.php

use Doctrine\ORM\EntityRepository;
use Requestum\ApiBundle\Repository\ApiRepositoryTrait;
use Requestum\ApiBundle\Repository\FilterableRepositoryInterface;

class ItemRepository extends EntityRepository implements FilterableRepositoryInterface
{
    use ApiRepositoryTrait;

    /**
     * @return array
     */
    protected function getPathAliases()
    {
        return [
            ...
            'associationEntity' => '[associationEntity][id]',  
            ...
        ];
    }
}

```
To create custom filters use Custom handlers.

**_Custom handlers_**
To create custom filters you need: \
1 Add new Handler. Example:
```php
# YourBundle\Filter\CustomFilteHandler

use Requestum\ApiBundle\Filter\Handler\AbstractHandler;

class CustomFilteHandler extends AbstractHandler
{
    public function handle(QueryBuilder $builder, $filter, $value)
    {
      ... // Some filter logic
    }
    
    protected function getFilterKey()
    {
        return 'customFilterName'; // filter name
    }
}
``` 
2 Add handler to your item repository. Example:
```php
# YourBundle\Repository\ItemRepository.php

class ItemRepository extends EntityRepository implements FilterableRepositoryInterface
{
    use ApiRepositoryTrait;
    ...
    /**
     * @inheritdoc
     */
    protected function createHandlers()
    {
        return [
            new CustomFilterHandler()
        ];
    }
    ...
}
```
3 Add custom filter to service. Example:
```php
services:
    ...
    action.myitem.list:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\ListAction
        arguments:
            - MyProject\MyBundle\Entity\MyItems
        calls:
            - ['setOptions', [{'filters': ['customFilterName']}]]
    ...
```


**_Sorting_**
Available sorting by entity fields. To do this, add the property name and sort order to the request (pattern: 'field|order').
Example ```GET /items?order-by=id|asc```

**_Pagination_**\
Add pagination to the request.\
Example: ```GET /items?page=1&per-page=15```

**_Expand_**
You can use the related entity references (and expand as needed) in the responses.
Add annotation ```@Reference``` to entity property for reference:
```php
# YouBundle\Entity\Item.php;
use Requestum\ApiBundle\Rest\Metadata;

class Item
{
    ...
    /**
     * @ORM\ManyToOne
     * @Reference
     **/
    protected $associationEntity;
    ...
}
```
Add ```expand``` to the request for expand references. Many properties are separated by commas (without spaces). 
With double reference you need to use the point (without spaces). \
Example:
 ```GET /items?expand=associationEntity,otherAssociationEntity.relatedEntity```

## Fetch
Get single item by identifier. \
Object type: single item \
HTTP method: GET 

Service configuration example:
```php
# config/services.yml

services:
    ...
    action.myitem.fetch:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\FetchAction
        arguments:
            - MyBundle\Entity\MyItem
    ...
```
Routing example: 
 ```php
 # config/routing.yml
...
myitem.fetch:
    path: /myitems/{id}
    methods: GET
    defaults: { _controller: action.myitem.fetch:executeAction }
...
```
**Additional functionality**\
Expand available. See [List Action](#list).

---------
## Update operation

----------
## Delete operations





