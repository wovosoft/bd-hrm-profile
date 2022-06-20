# Contact Model

Use to Hold Profile Contacts.

## Status

This model **Deprecated**. Very soon this feature will be replaced with another package.

## Relations

- `Profile->hasMany(Contact)`
- `Contact->belongsTo(Profile)`

## Fields

| Name      | Type   |
|-----------|--------|
| `type`    | string |
| `content` | string |


Some other fields can be added depending on your needs.

## CRUD Operations

CRUD Operations can be performed using the model itself. Or, the following methods can be used:

### Create

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\Contact;

//returns the new record on success, or throws error on failed.
BdHrmProfile::addProperty(Contact::class,[
    "type"=>"phone",
    "content"=>"4324556456",
]);
```

### Update

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\CitizenshipInfo;

//returns the new record on success, or throws error on failed.
//@var $contact Contact
BdHrmProfile::updateProperty($contact,[
    "type"=>"phone",
    "content"=>"4324556456",
]);
```

### Delete

```php
use \Wovosoft\BdHrmProfile\Facades\BdHrmProfile;
use \Wovosoft\BdHrmProfile\Models\Contact;

//returns the new record on success, or throws error on failed.
//@var $contact Contact
BdHrmProfile::deleteProperty($contact);
```
