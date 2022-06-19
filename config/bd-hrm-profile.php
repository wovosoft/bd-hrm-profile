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
    "table_prefix" => "profile_",                                       //sets prefix for each table
    "route_prefix" => "hrm-profiles",                                   //routes prefix when by routes are registered by the package itself
    "routes_enabled" => true,                                           //whether routes should be enabled or not
    "controllers" => [
        "profile" => ProfileController::class,                          //default profile controller
        "present_address" => PresentAddressController::class,           //default present address controller of profiles
        "permanent_address" => PermanentAddressController::class,       //default permanent address controller of profiles
        "citizenship_info" => CitizenshipController::class,             //default citizenship information controller of profiles
        "contact" => ContactController::class,                          //default contacts controller of profiles
        "family_member" => FamilyMemberController::class,               //default family members controller of profiles
        "photo" => PhotoController::class,                              ////default photos controller of profiles
        "physical_attributes" => PhysicalAttributesController::class    ////default physical attributes controller of profiles
    ]
];
