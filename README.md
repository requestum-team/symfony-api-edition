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

## Basic options
 
 | Option                           | Type      | Example                                                    |
 | -------------------------------- | --------  | ---------------------------------------------------------- |
 | serialization_groups             | array     | `'serialization_groups': ['default', 'my_group']`          |
 | access_attribute                 |           |                                                            |
 | serialization_check_access       | boolean   | `'serialization_check_access': false`                      |
 | fetch_field                      | string    | `'fetch_field': 'customIdentifierField'`                   |
 | preset_filters                   | array     | `preset_filters:{availableForUser: '__USER__'}`            |
 | use_lock                         | boolean   | `'use_lock': true`                                         |
 | http_method                      | string    | `'http_method': PUT`                                       |
 | success_status_code              | string    | `'success_status_code' : Response::HTTP_CREATED`           |
 | return_entity                    | boolean   | `'return_entity' : true`                                   |
 | form_options                     | array     | `'form_options': {'validation_groups': ['create']}`        |
 | before_save_events               | array     | `'before_save_events': ['action.before_save_item']`        |
 | after_save_events                | array     | `'after_save_events': ['action.after_save_item']`          |
 | filters                          | array     | `'filters': ['user', 'categories', 'query', 'order-by']`   |
 | before_delete_events             | array     | `'before_delete_events': ['action.before_delete_item']`    |
 | default_per_page                 | integer   | `'default_per_page': 15`                                   |
 | pagerfanta_fetch_join_collection | boolean   | `'pagerfanta_fetch_join_collection': true`                 |
 | pagerfanta_use_output_walkers    | boolean   | `'pagerfanta_use_output_walkers': true`                    |
 
 
---------
## Create operation

---------------
## Read operations

There are two types of read operations: collection operations ([List](#list)) and single item ([Fetch](#fetch)) operations.

## List
Get list of items. \
Object type: collection \
HTTP method: GET 

**Configuration** \
1 Add service. Example: 
```php
# config/services.yml

services:
    ...
    action.myitem.list:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\ListAction
        arguments:
            - MyProject\MyBundle\Entity\MyItem
        calls:
            - ['setOptions', 
                [{
                    'filters': ['someField1', 'someField2', 'someCustomFilter', 'query', 'order-by'],  
                    'preset_filters':{availableForUser: '__USER__', order-by: 'createdAt|desc'},
                    'fetch_field':['collection'],
                }]
            ]
    ...
```
Where:\
 `- MyPoject\MyBundle\Entity\Items` - item class, required parameter \
 `['setOptions', ...]` - array of options

2 Add service to routing. Example: 
 ```php
 # config/routing.yml
...
myitem.list:
    path: /myitems
    methods: GET
    defaults: { _controller: action.myitem.list:executeAction }
...
```
**_Request example_** 
```php
http://mysite/myitems?status=false
```


**Additional functionality**

**_Sorting_** \
Available sorting by entity fields. To sort, add the property name and sort order to the request (pattern: 'field|order'). \
Example ```GET /items?order-by=id|asc```

**_Pagination_**\
ApiBundle use [Pagerfanta](https://packagist.org/packages/pagerfanta/pagerfanta) for pagination and works with DoctrineORM query objects only. \
Also pagination uses default options: 
```pagerfanta_fetch_join_collection = false``` and ```pagerfanta_use_output_walkers = null``` (see ListAction Additional options). \
To use pagination add ```page={int}``` and ```per-page={int}``` to the request.\
Example: ```GET /items?page=1&per-page=15```

**_Count only_**\
To get only the count of query results you need to add ```defaults: { count-only: true }``` 
to the routing.

**_Expand_** \
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



**Additional options** 

**_Default per page (Pagination)_** \
Results per page (20 by default). 
Add ```'default_per_page': {int}``` to options for change.

**_Fetch join collection (Pagination)_** \
Whether the query joins a collection join collection. Type boolean, false by default.\
Add ```'pagerfanta_fetch_join_collection': true``` to options for change.

**_Use output walkers (Pagination)_**\
Whether to use output walkers pagination mode. Type boolean, null by default.\
Add ```'pagerfanta_use_output_walkers': true``` to options for change.

**_Serialization_** \
You can serialize only the property that belong to the some groups. \
To add to group use annotation  ```@Serializer\Groups({"groupName"})```. \
To serialize some groups, add them to the option. Example: ```'serialization_groups': ['some-group']```

**_Filters_**

**_Query filter_** \
Available text search in some fields (```LIKE```). Supports wildcards (```*suffix```, ```prefix*```, ```*middle*```) \
To add fields you need to edit the ```createHandlers()``` method in the entity repository. \
Add a filter using ```'filters': ['query']``` option. \
Example:
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
            new SearchHandler([
               'someField',
               'associationEntity.someField' // use the dot for fields of related entities
            ])
        ];
    }
    ...
}
```
Sample query with filter: ``` GET /items?query=tex*```

**_Sorting_** \
To sort, add the property name and sort order (pattern: 'field|order'). Example:
```'order-by': 'createdAt|desc'```

**_Filter by properties_** \
Filtering by entity properties is available:
- exact matching (Example: ```GET /items?status=approved```);
- using comparison operators (`````!=, <=, <>````` etc.) and ```*```, ```'is_null_value'```, ```is_not_null_value``` 
(Example: ```GET /items?status=!=declined``` )

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
**_Custom filter_** \
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

**_Preset filters_** \
Preset filters with values using ```preset_filters```. 
When the value is ```__USER__```, the current authorized user object will be used.
Example:
```php
['setOptions', [{'filters':['name'], 'preset_filters':{'status' : 'true', 'user': '__USER__'}}]]
```



## Fetch

---------
## Update operation

----------
## Delete operations

Defined options are: "check_user_scope", "default_per_page", "entity_manager", "fetch_field", "filters", "pagerfanta_fetch_join_collection", "pagerfanta_use_output_walkers", "preset_filters", "required_permission", "serialization_groups"."
}


