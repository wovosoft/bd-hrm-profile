# PresentAddress Model

Use to Hold Present Address Information of a Person.

## Relations

- `Profile->hasOne(PresentAddress)`
- `PresentAddress->belongsTo(Profile)`

## Fields

| Name          | Type                 |
|---------------|----------------------|
| `division_id` | unsigned big integer |
| `district_id` | unsigned big integer |
| `upazila_id`  | unsigned big integer |
| `union_id`    | unsigned big integer |
| `village`     | string               |
| `word`        | string               |
| `address`     | string               |

Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\PresentAddress;
use \Wovosoft\BdHrmProfile\Models\Profile;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(Profile::class,[
    "division_id"=> 1,
    "district_id"=> 1,
    "upazila_id"=>  1,
    "union_id"=>    1, 
    "village"=> 1,   
    "word"=>    1,     
    "address"=> "" 
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\PresentAddress;

//returns the new record on success, or throws error on failed.
BdHrmProfile::updateProperty(PresentAddress::class,[
    "division_id"=> 1,
    "district_id"=> 1,
    "upazila_id"=>  1,
    "union_id"=>    1, 
    "village"=> 1,   
    "word"=>    1,     
    "address"=> "" 
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;

//returns the new record on success, or throws error on failed.
//@var $presentAddress PresentAddress
BdHrmProfile::deleteProperty($presentAddress);
```
