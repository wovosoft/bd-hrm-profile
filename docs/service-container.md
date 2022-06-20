# Service Container

The packages default service container, contains the CRUD methods.

## Adding Related Model

The Service Provider of the package, provides a singleton of the Service Container. Which can be used to get the
singleton to perform CRUD operations. But if you provide the service as dependency in controllers it will be resolved
automatically.

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Enums\ProfileRelations;

BdHrmProfile::addProperty( 
    ProfileRelations::PermanentAddress, 
    $profile,
    $validatedData
);
```

## Update Related Model

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Enums\ProfileRelations;

BdHrmProfile::updateProperty( 
   $permanentRelation,
    $validatedData
);
```
