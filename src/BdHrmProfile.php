<?php

namespace Wovosoft\BdHrmProfile;

use Illuminate\Database\Eloquent\Model;
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
     * @throws \Throwable
     */
    public function add(string $type, Profile $profile, array $validatedData): Model
    {
        $item = (match ($type) {
            CitizenshipInfo::class => $profile->citizenshipInformation(),
            Contact::class => $profile->contacts(),
            FamilyMember::class => $profile->familyMembers(),
            PermanentAddress::class => $profile->permanentAddress(),
            Photo::class => $profile->photos(),
            PhysicalAttributes::class => $profile->physicalAttributes(),
            PresentAddress::class => $profile->presentAddress()
        })->newModelInstance();

        $item->forceFill($validatedData)->saveOrFail();

        return $item;
    }

}
