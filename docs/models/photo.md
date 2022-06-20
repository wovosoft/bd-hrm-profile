# Photo Model

Use to Hold Photos of a Person.

## Relations

- `Profile->hasMany(Photo)`
- `Photo->belongsTo(Profile)`

## Fields

| Name        | Type   |
|-------------|--------|
| `file_name` | string |
| `file_path` | string |
| `disk`      | string |

Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\Photo;
use \Wovosoft\BdHrmProfile\Models\Profile;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(Photo::class,$profile,[
    "file_name"=> "test.jpg",
    "file_path"=> "lsdlkf/sdkfjsd/sdlfkjsd/test.jpg",
    "disk"=>  "local"
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\Photo;

//returns the new record on success, or throws error on failed.
BdHrmProfile::updateProperty($photo,[
     "file_name"=> "test.jpg",
    "file_path"=> "lsdlkf/sdkfjsd/sdlfkjsd/test.jpg",
    "disk"=>  "local"
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;

//returns the new record on success, or throws error on failed.
//@var $photo Photo
BdHrmProfile::deleteProperty($photo);
```
