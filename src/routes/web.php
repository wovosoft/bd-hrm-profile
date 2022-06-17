<?php

use \Illuminate\Support\Facades\Route;

Route::prefix(config("bd-hrm-profile.route_prefix"))->name("profiles.")->group(function () {
    if (config("bd-hrm-profile.controllers.profile")) {
        Route::prefix("profiles")
            ->controller(config("bd-hrm-profile.controllers.profile"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{profile}", "update")->name("update");
                Route::delete("destroy/{profile}", "destroy")->name("destroy");
                Route::post("find/{profile}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options", "options")->name("options");

                Route::post("family-members/{profile}", "familyMembers")->name("familyMembers");
                Route::post("contacts/{profile}", "contacts")->name("contacts");
                Route::post("present-address/{profile}", "presentAddress")->name("presentAddress");
                Route::post("permanent-address/{profile}", "permanentAddress")->name("permanentAddress");
                Route::post("citizenship-information/{profile}", "citizenshipInformation")->name("citizenshipInformation");
            });
    }

    if (config("bd-hrm-profile.controllers.present_address")) {
        Route::prefix("permanent_addresses")
            ->controller(config("bd-hrm-profile.controllers.present_address"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{present_address}", "update")->name("update");
                Route::delete("destroy/{present_address}", "destroy")->name("destroy");
                Route::post("find/{present_address}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.permanent_address")) {
        Route::prefix("permanent_addresses")
            ->controller(config("bd-hrm-profile.controllers.permanent_address"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{permanent_address}", "update")->name("update");
                Route::delete("destroy/{permanent_address}", "destroy")->name("destroy");
                Route::post("find/{permanent_address}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.physical_attributes")) {
        Route::prefix("physical_attributes")
            ->controller(config("bd-hrm-profile.controllers.physical_attributes"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{physical_attributes}", "update")->name("update");
                Route::delete("destroy/{physical_attributes}", "destroy")->name("destroy");
                Route::post("find/{physical_attributes}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.family_member")) {
        Route::prefix("family_members")
            ->controller(config("bd-hrm-profile.controllers.family_member"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{family_member}", "update")->name("update");
                Route::delete("destroy/{family_member}", "destroy")->name("destroy");
                Route::post("find/{family_member}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.contact")) {
        Route::prefix("contacts")
            ->controller(config("bd-hrm-profile.controllers.contact"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{contact}", "update")->name("update");
                Route::delete("destroy/{contact}", "destroy")->name("destroy");
                Route::post("find/{contact}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.citizenship_info")) {
        Route::prefix("citizenship_infos")
            ->controller(config("bd-hrm-profile.controllers.contact"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{citizenship_info}", "update")->name("update");
                Route::delete("destroy/{citizenship_info}", "destroy")->name("destroy");
                Route::post("find/{citizenship_info}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
    if (config("bd-hrm-profile.controllers.photo")) {
        Route::prefix("photos")
            ->controller(config("bd-hrm-profile.controllers.photo"))
            ->group(function () {
                Route::put("store", "store")->name("store");
                Route::put("update/{photo}", "update")->name("update");
                Route::delete("destroy/{photo}", "destroy")->name("destroy");
                Route::post("find/{photo}", "find")->name("find");
                Route::post("index/{profile}", "index")->name("index");
                Route::post("options/{profile}", "options")->name("options");
            });
    }
});
