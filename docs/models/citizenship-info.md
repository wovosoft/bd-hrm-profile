# CitizenshipInfo Model

Holds the records such as NID, Birth Certificate No. etc. of a Profile.

## Relation

- `Profile->hasOne(CitizenshipInfo)`
- `CitizenshipInfo->belongsTo(Profile)`

## Fields

| Name                | Type   |
|---------------------|--------|
| `nid`               | string |
| `birth_certificate` | string |
| `tin`               | string |
| `bin`               | string |

Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\CitizenshipInfo;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(CitizenshipInfo::class,[
    "nid"=>"121354556",
    "birth_certificate"=>"4324556456",
    "tin"=>"654546855",
    "bin"=>"34564987654654"
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\CitizenshipInfo;

//returns the new record on success, or throws error on failed.
//@var $citizenshipInfo CitizenshipInfo
BdHrmProfile::updateProperty($citizenshipInfo,[
    "nid"=>"121354556",
    "birth_certificate"=>"4324556456",
    "tin"=>"654546855",
    "bin"=>"34564987654654"
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\CitizenshipInfo;

//returns the new record on success, or throws error on failed.
//@var $citizenshipInfo CitizenshipInfo
BdHrmProfile::deleteProperty($citizenshipInfo);
```
