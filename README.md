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
---------
## Create operation

---------------
## Read operations

There are two types of read operations: collection operation ([List](#list)) and single item ([Fetch](#fetch)) operation.

### List
Get list of items. \
Object type: collection \
HTTP method: GET 

#### Configuration
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

#### Available Options 
| Option                           | Type      | Default value               | Description                                                       |
| -------------------------------- | --------  | ----------------------------|------------------------------------------------------------------ |
| default_per_page                 | integer   | 20                          | Results per page (Pagination)        |
| pagerfanta_fetch_join_collection | boolean   | false                       | Whether the query joins a collection join collection (Pagination) |
| pagerfanta_use_output_walkers    | boolean   | null                        | Whether the query joins a collection join collection (Pagination) |
| serialization_groups             | array     | ['default']                 | One can serialize properties that belong to chosen groups only |
| serialization_check_access       | boolean   | true                        | Check user access during serialization |
| filters                          | array     | []                          | Filtering results ([More information](#filters))|
| preset_filters                   | array     | []                          | Preset filters and values. String value ```__USER__```  can be used as alias for the current authorized user.|

##### Filters
_*Query filter*_\
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
               'cities.name' // use the dot for fields of related entities
            ])
        ];
    }
    ...
}
```
Sample query with filter: ``` GET /country?query=*nglish```

##### *Sorting*
One may add the property name and sort order to the request (pattern: 'field|order') to sort. Example:
```'order-by': 'createdAt|desc'```

*Filter by properties*
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
*Custom filter*
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
#### Additional functionality
#### Pagination
[Pagerfanta](https://github.com/whiteoctober/Pagerfanta) is used for pagination and works with DoctrineORM query objects only. \
ApiBundle pagination configured with default options ```pagerfanta_fetch_join_collection = false``` and ```pagerfanta_use_output_walkers = null``` (This setting can be changed in options). \
One use pagination add ```page={int}``` and ```per-page={int}``` to the request.\
Example: ```GET /country?page=1&per-page=15```

#### Count only
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
#### Expand
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
#### Request example
```php
http://mysite/country?expand=cities
```
#### Response example 
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




### Fetch
Get single item by identifier. \
Object type: item \
HTTP method: GET 

#### Configuration
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
#### Available Options 
| Option                           | Type         | Default value               | Description                          |
| -------------------------------- | -----------  | ----------------------------|------------------------------------- |
| serialization_groups             | array        | ['default']                 | One can serialize properties that belong to chosen groups only |
| serialization_check_access       | boolean      | true                        | Check user access during serialization |
| fetch_field                      | string/array | 'id'                        | Possibility to use one (string) or more (array) property of entity as an unique identifier |
| access_attribute                 | string       | 'fetch'                     | Access attribute for check user permissions ([More information](#access-attribute)) |


#### Request example
```php
http://mysite/country/1?expand=cities
```
#### Response example 
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
#### Additional functionality
#### Expand
One can use the related entity references instead of full value in the response. See [Expand in ListAction](#expand)


#### Access attribute
Symfony Voters are used for check the user's access permissions. `AccessDecisionManager` will receive value of `access_attribute` as `$attribute` and entity as subject. \
Bundle provides the base class `AbstractEntityVoter`, which checks current user by token (if needed). It easy to use with the following settings for `access_decision_manager`:
```php
# config/security.yml
...
access_decision_manager:
    strategy: unanimous
    allow_if_all_abstain: true
...
```
Also the bundle has a `OwnerVoter` class. It defines that the current user is the owner (property `$user`) of the entity (subject) with [update, delete] attributes. \
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


---------
### Update operation

----------
### Delete operations




