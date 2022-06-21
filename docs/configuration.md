# Configuration

First publish the configuration file

```shell
php artisan vendor:publish --tag="bd-hrm-profile.config"
```

The above command will create a copy of `bd-hrm-profile.php` file in `config` directory.

## Config contents

The configuration array given bellow is self-explanatory.

```php
<?php
return [
    "table_prefix" => "profile_",
    "route_prefix" => "hrm-profiles",
    "routes_enabled" => true,
    "controllers" => [
        "profile" => ProfileController::class,
        "present_address" => PresentAddressController::class,
        "permanent_address" => PermanentAddressController::class,
        "citizenship_info" => CitizenshipController::class,
        "contact" => ContactController::class,
        "family_member" => FamilyMemberController::class,
        "photo" => PhotoController::class,
        "physical_attributes" => PhysicalAttributesController::class
    ]
];
```

## Routes

To define default routes for CURD operation use the line of code given bellow:

```php
\Wovosoft\BdHrmProfile\Facades\BdHrmProfile::routes();
```

You can wrap the routes with other conditions too.

```php
use \Illuminate\Support\Facades\Route;
\Wovosoft\BdHrmProfile\Facades\BdHrmProfile;

Route::middleware(['auth:sanctum'])->group(function (){
    BdHrmProfile::routes();
});
```

To disable a route, set `null` controller value in `bd-hrm-profile.php` file.

## Publish Migrations

```shell
php artisan vendor:publish --tag="bd-hrm-profile.migrations"
```
