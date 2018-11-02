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

# Basic concepts
This bundle provides ready to use action classes for standard REST API operations
such as create, update, delete, list and transit.
It uses class per action approach, so each action type has it's own class.
Also this bundle utilizes concept of having many services (i.e. class instances) per one action class.
   
Imagine we have 3 endpoints that provide a list of resources.
````
GET /resource1
GET /resource2
GET /resource3
````
Each of these endpoints has same business logic and can be covered by the same code.
We have to query database, apply some filters, pagination and sorting. 
Then we have to prepare result data, serialize it and send back to the client.
The only difference here is that we have different resource entity repository for each endpoint. 
Also these almost same endpoints can have different values for some parameters 
such as available filters, default page size, etc. 
So the idea is to have unified parametrized list action class, 
and instantiate it three times with different arguments. 
For more flexibility in parametrization we use Symfony OptionResolver component. 
So each action class has a set of options to configure concrete endpoint.
 
# Under the hood
This bundle consist of next components:
   1. Resource metadata factory
   2. Serializer extension with next features
   - expand of entity relations on demand
   - access control per field during serialization
   3. Event listeners that handle frequent use cases in api development
   - json decoder that populates HttpFoundation request object's request parameter bag with passed data
   - exception listener that formats errors
   4. Error factory
   5. Base class for voters that vote on concrete resource entity
   6. Action classes

## Action classes
- [List](#list-action)
- [Fetch](#fetch-action)
- [Create](#create-action) 
- [Update](#update-action)
- [Delete](#delete-action)
---------
## Create operation

## List action
Get list of items. \
Object type: collection \
HTTP method: GET 

### Configuration
1 Add service. Example: 
```php
# config/services.yml

services:
    ...
    action.country.list:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\ListAction
        arguments:
            - MyProject\MyBundle\Entity\Сountry
        calls:
            - ['setOptions', 
                [{
                    'default_per_page' : 15,
                    'pagerfanta_fetch_join_collection' : true,
                    'pagerfanta_use_output_walkers' : true,
                    'serialization_groups': ['default', 'custom-group'],
                    'filters' : ['query', 'order-by', 'name', 'language'],  
                    'preset_filters' : {availableForUser: '__USER__', order-by: 'createdAt|desc'},
                }]
            ]
    ...
```
Where: \
`arguments: ... ` - required arguments to the `Requestum\ApiBundle\Action\ListAction` class constructor \
`- MyProject\MyBundle\Entity\Сountry` - entity class (required) \
`['setOptions', ...]` - array of options

2 Add service to routing. Example: 
 ```php
 # config/routing.yml
...
country.list:
    path: /country
    methods: GET
    defaults: { _controller: action.country.list:executeAction }
...
```

### Available Options 
| Option                           | Type      | Default value               | Description                                                       |
| -------------------------------- | --------  | ----------------------------|------------------------------------------------------------------ |
| default_per_page                 | integer   | 20                          | Results per page (Pagination)        |
| pagerfanta_fetch_join_collection | boolean   | false                       | Whether the query joins a collection join collection (Pagination) |
| pagerfanta_use_output_walkers    | boolean   | null                        | Whether the query joins a collection join collection (Pagination) |
| serialization_groups             | array     | ['default']                 | One can serialize properties that belong to chosen groups only |
| serialization_check_access       | boolean   | true                        | Check user access during serialization |
| filters                          | array     | []                          | Filtering results ([More information](#filters))|
| preset_filters                   | array     | []                          | Preset filters and values. String value ```__USER__```  can be used as alias for the current authorized user.|

### *Filters*
__Query filter__\
Available text search in some fields (```LIKE```). Supports wildcards (```*suffix```, ```prefix*```, ```*middle*```) \
To add fields you need to edit the ```createHandlers()``` method in the entity repository. \
Add a filter using ```'filters': ['query']``` option. \
Example:
```php
# YourBundle\Repository\CountryRepository.php

class CountryRepository extends EntityRepository implements FilterableRepositoryInterface
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
               'language',
               'cities.name', // use the dot for fields of related entities
               'president_full_name' => ['president.firstName', 'president.lastName'] //use array to concatenate fields
            ])
        ];
    }
    ...
}
```
Sample query with filter: ``` GET /country?query=*nglish```

You can specify particular fields you want to search in (from list you passed to SearchHandler).

``` GET /country?query[term]=*Charles*&query[fields]=president_full_name,cities.name```

__Sorting__ \
One may add the property name and sort order to the request (pattern: 'field|order') to sort. Example:
```'order-by': 'createdAt|desc'```

__Filter by properties__ \
Such filtering by entity is available:
- exact matching (Example: ```GET /country?status=false```);
- using comparison operators (`````!=, <=, <>````` etc.) and ```*```, ```'is_null_value'```, ```is_not_null_value``` 
(Example: ```GET /country?status=!=true``` )

To change the filtering logic by association entities or existing filters, one may to make changes to the ```getPathAliases()``` method in the entity repository. 
Example:
```php
# YourBundle\Repository\CountryRepository.php

use Doctrine\ORM\EntityRepository;
use Requestum\ApiBundle\Repository\ApiRepositoryTrait;
use Requestum\ApiBundle\Repository\FilterableRepositoryInterface;

class CountryRepository extends EntityRepository implements FilterableRepositoryInterface
{
    use ApiRepositoryTrait;

    /**
     * @return array
     */
    protected function getPathAliases()
    {
        return [
            ...
            'city' => '[cities][id]',  
            ...
        ];
    }
}
```
__Custom filter__ \
To create custom filters one need: \
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
2 Add handler to item repository. Example:
```php
# YourBundle\Repository\CountryRepository.php

class CountryRepository extends EntityRepository implements FilterableRepositoryInterface
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
    action.country.list:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\ListAction
        arguments:
            - MyProject\MyBundle\Entity\Country
        calls:
            - ['setOptions', [{'filters': ['customFilterName']}]]
    ...
```
### Additional functionality
#### *Pagination*
[Pagerfanta](https://github.com/whiteoctober/Pagerfanta) is used for pagination and works with DoctrineORM query objects only. \
ApiBundle pagination configured with default options ```pagerfanta_fetch_join_collection = false``` and ```pagerfanta_use_output_walkers = null``` (This setting can be changed in options). \
One use pagination add ```page={int}``` and ```per-page={int}``` to the request.\
Example: ```GET /country?page=1&per-page=15```

#### *Count only*
To get the count of query results only one may add ```count-only``` to the request attributes. Add to routing configuration as an example:
```php
# config/routing.yml
...
country.list:
    path: /country
    methods: GET
    defaults: 
        {  
            _controller: action.country.list:executeAction,
            count-only: true
        }
...
```
#### *Expand*
One can use the related entity references instead of full value in the response (can be expanded on demand) by adding annotation ```@Reference``` to entity property, for example:
```php
# YouBundle\Entity\Country.php;
use Requestum\ApiBundle\Rest\Metadata;

class Country
{
    ...
    /**
     * @ORM\OneToMany
     * @Reference
     **/
    protected $cities;
    ...
}
```
Add ```expand``` to the request for expand reference. For multiple references expansion according fields should be separated be commas(NB: no spaces needs here!).
One use the point for expand the field in associated entity. \
Example: 
```php
// GET /country?expand=cities&name=Australia
{
    total: 1,
    entities: 
        [
            {
                id: 1,
                name: 'Australia',
                language: 'English',
                population: 25103900,               
                status: true,
                createdAt: "2018-03-22T10:49:07+00:00",
                cities: 
                    [
                        {
                            id: 11,
                            name: 'Sydney',
                            districts: [112, 113],
                            population: 25103900,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        },
                        {
                            id: 12,
                            name: 'Melbourne',
                            districts: [122],
                            population: 4850740,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        },
                        {
                            id: 13,
                            name: 'Brisbane',
                            districts: [131, 132],
                            population: 2408223,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        }
                    ]
            }
        ]
}

// GET /country?name=Australia
{
    total: 1,
    entities: 
    [
        {
            id: 1,
            name: 'Australia',
            language: 'English',
            population: 25103900,               
            status: true,
            createdAt: "2018-03-22T10:49:07+00:00",
            cities: 
                [11, 12, 13] 
        }
    ]
}

```
### Request example
```php
http://mysite/country?expand=cities
```
### Response example 
```php
{
    total: 2,
    entities: 
        [
            {
                id: 1,
                name: 'Australia',
                language: 'English',
                population: 25103900,               
                status: true,
                createdAt: "2018-03-22T10:49:07+00:00",
                cities: 
                    [
                        {
                            id: 11,
                            name: 'Sydney',
                            districts: [112, 113],
                            population: 25103900,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        },
                        {
                            id: 12,
                            name: 'Melbourne',
                            districts: [122],
                            population: 4850740,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        },
                        {
                            id: 13,
                            name: 'Brisbane',
                            districts: [131, 132],
                            population: 2408223,
                            isCapital: false,
                            createdAt: "2018-03-23T10:49:07+00:00"
                        }
                    ]
            },
            {
                id: 2,
                name: 'Spain',
                language: 'Spanish',
                population: 46700000,               
                status: false,
                createdAt: "2018-03-23T10:49:07+00:00",
                cities: 
                    [
                        {
                            id: 21,
                            name: 'Madrid',
                            districts: [212],
                            population: 3165235,
                            isCapital: true,
                            createdAt: "2018-03-24T10:49:07+00:00"
                        },
                        {
                            id: 22,
                            name: 'Barcelona',
                            districts: [224],
                            population: 1602386,
                            isCapital: false,
                            createdAt: "2018-03-24T10:49:07+00:00"
                        },
                        {
                            id: 23,
                            name: 'Valencia',
                            districts: [231, 232],
                            population: 786424,
                            isCapital: false,
                            createdAt: "2018-03-24T10:49:07+00:00"
                        }
                    ]
            }
        ]
}
```

## Fetch action
Get single item by identifier. \
Object type: item \
HTTP method: GET 

### Configuration
1 Add service. Example: 
```php
# config/services.yml

services:
    ...
    action.country.fetch:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\FetchAction
        arguments:
            - MyProject\MyBundle\Entity\Сountry
        calls:
            - ['setOptions', 
                [{
                    'serialization_groups':['full_post', 'default'],
                    'fetch_field': 'email' 
                }]
            ]
    ...
```
Where: \
`arguments: ... ` - required arguments to the `Requestum\ApiBundle\Action\FetchAction` class constructor \
`- MyProject\MyBundle\Entity\Сountry` - entity class (required) \
`['setOptions', ...]` - array of options

2 Add service to routing. Example: 
 ```php
 # config/routing.yml
...
country.fetch:
    path: /country/{id}
    methods: GET
    defaults: { _controller: action.country.fetch:executeAction }
...
```
### Available Options 
| Option                           | Type         | Default value               | Description                          |
| -------------------------------- | -----------  | ----------------------------|------------------------------------- |
| serialization_groups             | array        | ['default']                 | One can serialize properties that belong to chosen groups only |
| serialization_check_access       | boolean      | true                        | Check user access during serialization |
| fetch_field                      | string/array | 'id'                        | Possibility to use one (string) or more (array) property of entity as an unique identifier |
| access_attribute                 | string       | 'fetch'                     | Access attribute for check user permissions ([More information](#access-attribute)) |

#### *Access attribute*
Symfony Voters are used for check the user's access permissions. `AccessDecisionManager` will receive value of `access_attribute` as `$attribute` and entity as subject. \
Bundle provides the base class `AbstractEntityVoter`, which checks the user in the session depending on the received parameter `$userRequired` (optional, `true` by default). 
It easy to use with the following settings for `access_decision_manager`:
```php
# config/security.yml
...
access_decision_manager:
    strategy: unanimous
    allow_if_all_abstain: true
...
```
Also the bundle has a `OwnerVoter` class that working with [update, delete] attributes. 
It uses the Symfony PropertyAccess Component for check the current user's relationship (is the owner) 
to the subject entity. The relationships checked by `$propertyPath` which is passed to the constructor for `OwnerVoter` class. \
One can create custom voters based on the `AbstractEntityVoter` class. Example:

1 Add new voter:
```php
# YourBundle\Security\Entity\CustomVoter.php

use Requestum\ApiBundle\Security\Authorization\AbstractEntityVoter;

class CustomVoter extends AbstractEntityVoter
{  
    /**
     * @param string $attribute
     * @param object $entity
     * @param UserInterface|null $user
     */
     protected function voteOnEntity($attribute, $entity, UserInterface $user = null);
    {
        // some logic
    }
}
```
2 Add new voter to services:
```php
# config/services.yml

services:
...
    voter.country.owner:
        class: YourBundle\Security\Entity\CustomVoter
        arguments: [[fetch, create, update, delete], YourBundle\Entity\Country, true]
        tags:
            - { name: security.voter }
...
```
Where: \
`arguments: ... ` - arguments to the custom voter class constructor \
`[fetch, create, update, delete]` - array of access attributes (required) \
`YourBundle\Entity\Country` - entity class (required) \
`true` - required user flag (optional, `true` by default) 

3 Add `'access_attribute'` to service config for set attributes to check user permissions (as needed). \
`'access_attribute' : 'fetch'` by default.

### Additional functionality
#### *Expand*
One can use the related entity references instead of full value in the response. See [Expand in ListAction](#expand)

### Request example
```php
http://mysite/country/1?expand=cities
```
### Response example 
```php
{
    id: 1,
    name: 'Australia',
    language: 'English',
    population: 25103900,               
    status: true,
    createdAt: "2018-03-22T10:49:07+00:00",
    cities: 
        [
            {
                id: 11,
                name: 'Sydney',
                districts: [112, 113],
                population: 25103900,
                isCapital: false,
                createdAt: "2018-03-23T10:49:07+00:00"
            },
            {
                id: 12,
                name: 'Melbourne',
                districts: [122],
                population: 4850740,
                isCapital: false,
                createdAt: "2018-03-23T10:49:07+00:00"
            },
            {
                id: 13,
                name: 'Brisbane',
                districts: [131, 132],
                population: 2408223,
                isCapital: false,
                createdAt: "2018-03-23T10:49:07+00:00"
            }
        ]
}
```

## Abstract Form Action Class

This is an abstract class that is the parent for the [Create](#create-action) and [Update](#update-action) Actions.
Can be used to inherit and to create another custom actions.

### Available Options

 | Option                | Type      | Description                                              | Default Values    |
 | ----------------------| --------  |----------------------------------------------------------|-------------------|
 | http_method           | string    |HTTP method                                               | POST              |
 | success_status_code   | integer   |Status that is returned after execution                   | 200               |
 | return_entity         | boolean   |Result entity in response                                 | true              |
 | form_options          | array     |options that will be used in building form                | []                |
 | before_save_events    | array     |Before submit events (events that throws before the flush)| []                |
 | after_save_events     | array     |After submit events (events that throws after the flush)  | []                |


## Create Action

Action to create a new object.
This is a subclass that inherits from [AbstractFormAction](#abstract-form-action-class) class.

There are two required parameters: Entity class and FormType Class.
Example:

```
# src/AppBundle/Resources/config/services.yml

services:
    #...

    action.user.create:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\CreateAction
        arguments:
            - AppBundle\Entity\User
            - AppBundle\Form\User\UserType
```


### Available Options

 | Option                | Type      | Description                                              | Default Values    |
 | ----------------------| --------  |----------------------------------------------------------|-------------------|
 | http_method           | string    |HTTP method                                               | POST              |
 | success_status_code   | integer   |Status that is returned after execution                   | 201               |
 | return_entity         | boolean   |Result entity in response                                 | true              |
 | form_options          | array     |options that will be used in building form                | []                |
 | before_save_events    | array     |Before submit events (events that throws before the flush)| []                |
 | after_save_events     | array     |After submit events (events that throws after the flush)  | []                |
 | access_attribute      | string    |Access Attribute                                          | create            |

### Event listeners

By default Create and Update actions throws such events: `'action.before_save'`, `'action.after_save'`. You can dispatch this events, or throw another events using such options as: `before_save_events` and `after_save_events`.

You can create listeners that will respond to event occuring before and after submit the request.
You need to configure it in `services.yml` file:
```
    before_save.user.event:
        class: Requestum\ApiBundle\EventListener\UserBeforeSaveListener
        arguments: ["@security.token_storage"]
        tags:
            - { name: kernel.event_listener, event: action.before_save_user, method: onBeforeSaveUser }

    after_save.user.event:
        class: Requestum\ApiBundle\EventListener\UserAfterSaveListener
        arguments: ["@security.token_storage"]
        tags:
            - { name: kernel.event_listener, event: action.after_save_user, method: onAfterSaveUser }

```
Then you need to specify this listeners in create action configuration:
```
    action.user.create:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\CreateAction
        arguments:
            - AppBundle\Entity\User
            - AppBundle\Form\User\UserType
        calls:
            - ['setOptions', [{'before_save_events': ['action.before_save_user'], 'after_save_events': ['action.after_save_user']}]]
```


## Update Action

Action to update an existing object.
This is a subclass that inherits from [AbstractFormAction](#abstract-form-action-class) class.

There are two required parameters: Entity class and FormType Class.
Example:

```
# src/AppBundle/Resources/config/services.yml

services:
    #...

    action.user.update:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\UpdateAction
        arguments:
            - AppBundle\Entity\User
            - AppBundle\Form\User\UserType
```


### Available Options

 | Option                | Type      | Description                                              | Default Values    |
 | ----------------------| --------  |----------------------------------------------------------|-------------------|
 | http_method           | string    |HTTP method                                               | PATCH             |
 | success_status_code   | integer   |Status that is returned after execution                   | 200               |
 | return_entity         | boolean   |Result entity in response                                 | true              |
 | form_options          | array     |options that will be used in building form                | []                |
 | before_save_events    | array     |Before submit events (events that throws before the flush)| []                |
 | after_save_events     | array     |After submit events (events that throws after the flush)  | []                |
 | access_attribute      | string    |Access Attribute                                          | update            |


Update action has the same available features and options as a create action. (see "[Create Action](#create-action)")


## Delete Action

Action to delete an existing object

There is one required parameter: Entity class.
Example:

```
# src/AppBundle/Resources/config/services.yml

services:
    #...

    action.user.delete:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\DeleteAction
        arguments:
            - AppBundle\Entity\User
```


### Available Options

 | Option                | Type         | Description                                            | Default Values   |
 | ----------------------| -------------|--------------------------------------------------------|------------------|
 | fetch_field           | string       |The field that is the entity identifier (id by default) | id               |
 | before_delete_events  | array        |Before delete events                                    | []               |
 | access_attribute      | string       |Access Attribute                                        | delete           |

### Event listeners
By default Delete action throws a such event: `'action.before_delete'`. You can dispatch this event, or throw another events using such an option: `before_delete_events`.

You can create listeners that will respond to event occuring before delete the entity.
You need to configure it in `services.yml` file:
```
    before_delete.user.event:
        class: Requestum\ApiBundle\EventListener\UserBeforeDeleteListener
        tags:
            - { name: kernel.event_listener, event: action.before_delete_user, method: onBeforeDeleteUser }

```
Then you need to specify this listeners in delete action configuration:
```
    action.user.delete:
        parent: core.action.abstract
        class: Requestum\ApiBundle\Action\DeleteAction
        arguments:
            - AppBundle\Entity\User
        calls:
            - ['setOptions', [{'before_delete_events': ['action.before_delete_user'] }]]
```




