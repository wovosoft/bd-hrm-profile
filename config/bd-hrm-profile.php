<?php

use Wovosoft\BdHrmProfile\Http\Controllers\{CitizenshipController,
    ContactController,
    FamilyMemberController,
    PermanentAddressController,
    PhotoController,
    PhysicalAttributesController,
    PresentAddressController,
    ProfileController
};

/**
 * When "routes_enabled"=>true, the controllers defined in the array given bellow,
 * will be registered in routes with their associated methods as actions.
 *
 * Routes can be disabled totally, by setting "routes_enabled"=>true,
 * or partially by setting null to any controller. Also,
 * controllers can be modified by setting a different controller file
 */
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
