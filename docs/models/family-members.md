# FamilyMember Model

Use to Hold Profile Contacts.

## Status

This model **Deprecated**. Very soon this feature will be replaced with another package.

## Relations

- `Profile->hasMany(FamilyMember)`
- `FamilyMember->belongsTo(Profile)`

## Fields

| Name         | Type                 | Description        |
|--------------|----------------------|--------------------|
| `related_to` | unsigned big integer | Points to profiles |
| `relation`   | enum                 | Relations          |

Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\FamilyMember;
use \Wovosoft\BdHrmProfile\Enums\Relations;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(FamilyMember::class,[
    "related_to" => 2",
    "relation" => Relations::Father
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\FamilyMember;
use \Wovosoft\BdHrmProfile\Enums\Relations;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(FamilyMember::class,[
    "related_to" => 2",
    "relation" => Relations::Father
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\FamilyMember;

//returns the new record on success, or throws error on failed.
//@var $familyMember FamilyMember
BdHrmProfile::deleteProperty($familyMember);
```
