# Physical Attributes Model

Use to Hold Physical Attributes Information of a Person.

## Relations

- `Profile->hasOne(PhysicalAttributes)`
- `PhysicalAttributes->belongsTo(Profile)`

## Fields

| Name          | Type    |
|---------------|---------|
| `height`      | numeric |
| `weight`      | numeric |
| `is_disabled` | boolean |
| `body_color`  | string  |
| `eye_color`   | string  |
| `eye_vision`  | string  |

Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\PhysicalAttributes;
use \Wovosoft\BdHrmProfile\Models\Profile;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(PhysicalAttributes::class,$profile,[
    "height"=>170,    
    "weight"=>70,    
    "is_disabled"=>false,
    "body_color"=>"brown",
    "eye_color"=>"black", 
    "eye_vision"=>"6/6",
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;


//returns the new record on success, or throws error on failed.
BdHrmProfile::updateProperty($physicalAttribute,[
    "height"=>170,    
    "weight"=>70,    
    "is_disabled"=>false,
    "body_color"=>"brown",
    "eye_color"=>"black", 
    "eye_vision"=>"6/6",
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;

//returns the new record on success, or throws error on failed.
//@var $presentAddress PresentAddress
BdHrmProfile::deleteProperty($physicalAttribute);
```
