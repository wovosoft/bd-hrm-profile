<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Wovosoft\BdHrmProfile\Enums\Genders;
use Wovosoft\BdHrmProfile\Enums\MaritalStatuses;
use Wovosoft\BdHrmProfile\Enums\Religions;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class Profile extends Model
{
    use HasFactory, HasTablePrefix;

    protected $casts = [
        "gender" => Genders::class,
        "religion" => Religions::class,
        "marital_status" => MaritalStatuses::class
    ];

    /**
     * Current Profile Photo
     * @return BelongsTo
     */
    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class, "profile_photo_id");
    }

    /**
     * All Profile Photos
     * @return HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, "profile_id");
    }

    public function presentAddress(): HasOne
    {
        return $this->hasOne(PresentAddress::class, "profile_id");
    }

    public function permanentAddress(): HasOne
    {
        return $this->hasOne(PermanentAddress::class, "profile_id");
    }

    public function familyMembers(): HasMany
    {
        return $this->hasMany(FamilyMember::class, "profile_id");
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, "profile_id");
    }

    public function physicalAttributes(): HasOne
    {
        return $this->hasOne(PhysicalAttributes::class);
    }
}
