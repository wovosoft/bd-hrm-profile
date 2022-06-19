<?php

namespace Wovosoft\BdHrmProfile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Wovosoft\BdHrmProfile\Enums\ProfileRelations;
use Wovosoft\BdHrmProfile\Models\CitizenshipInfo;
use Wovosoft\BdHrmProfile\Models\Contact;
use Wovosoft\BdHrmProfile\Models\FamilyMember;
use Wovosoft\BdHrmProfile\Models\PermanentAddress;
use Wovosoft\BdHrmProfile\Models\Photo;
use Wovosoft\BdHrmProfile\Models\PhysicalAttributes;
use Wovosoft\BdHrmProfile\Models\PresentAddress;
use Wovosoft\BdHrmProfile\Models\Profile;


class BdHrmProfile
{
    /**
     * Returns full profile with associated models too
     */
    public function getProfile(int $profile): Profile|null
    {
        return Profile::query()->with([
            "citizenshipInformation",
            "contacts",
            "familyMembers",
            "permanentAddress",
            "presentAddress",
            "photo",
            "photos"
        ])->findOrFail($profile);
    }

    /**
     * Note: Before add/update any property validate the property values with the rules associated with the models.
     * @param ProfileRelations|string $type The Parameter with Appropriate Child Model.
     * @param Profile $profile Parent Model under which the related model is going to be attached.
     * @throws \Throwable
     */
    public function addProperty(ProfileRelations|string $type, Profile $profile, array $validatedData): Model
    {
        if ($type instanceof ProfileRelations) {
            $type = $type->value;
        }
        $item = (match ($type) {
            CitizenshipInfo::class => $profile->citizenshipInformation(),
            Contact::class => $profile->contacts(),
            FamilyMember::class => $profile->familyMembers(),
            PermanentAddress::class => $profile->permanentAddress(),
            Photo::class => $profile->photos(),
            PhysicalAttributes::class => $profile->physicalAttributes(),
            PresentAddress::class => $profile->presentAddress()
        })->newModelInstance();

        DB::beginTransaction();
        try {
            $item->forceFill($validatedData)->saveOrFail();
            DB::commit();
            return $item;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    /**
     * @throws \Throwable
     */
    public function updateProperty(
        CitizenshipInfo|Contact|FamilyMember|PermanentAddress|Photo|PhysicalAttributes|PresentAddress $model, array $validatedData): Photo|CitizenshipInfo|FamilyMember|PresentAddress|PhysicalAttributes|PermanentAddress|Contact
    {
        DB::beginTransaction();
        try {
            $model->forceFill($validatedData)->saveOrFail();
            DB::commit();
            return $model;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    /**
     * @throws \Throwable
     */
    public function deleteProperty(
        CitizenshipInfo|Contact|FamilyMember|PermanentAddress|Photo|PhysicalAttributes|PresentAddress $model
    ): bool
    {
        DB::beginTransaction();
        try {
            $model->deleteOrFail();
            DB::commit();
            return true;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    public function routes(): void
    {
        Route::prefix(config("bd-hrm-profile.route_prefix"))->name("profiles.")->group(function () {
            if (config("bd-hrm-profile.controllers.profile")) {
                Route::prefix("profiles")
                    ->controller(config("bd-hrm-profile.controllers.profile"))
                    ->group(function () {
                        Route::post("family-members/{profile}", "familyMembers")->name("familyMembers");
                        Route::post("contacts/{profile}", "contacts")->name("contacts");
                        Route::post("present-address/{profile}", "presentAddress")->name("presentAddress");
                        Route::post("permanent-address/{profile}", "permanentAddress")->name("permanentAddress");
                        Route::post("citizenship-information/{profile}", "citizenshipInformation")->name("citizenshipInformation");

                        Route::put("store", "store")->name("store");
                        Route::put("update/{profile}", "update")->name("update");
                        Route::delete("destroy/{profile}", "destroy")->name("destroy");
                        Route::post("find/{profile}", "find")->name("find");
                        Route::post("options", "options")->name("options");
                        Route::post("/", "index")->name("index");
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

    }
}
