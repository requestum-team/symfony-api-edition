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
