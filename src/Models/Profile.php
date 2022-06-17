<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Validation\Rules\Enum;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Enums\Genders;
use Wovosoft\BdHrmProfile\Enums\MaritalStatuses;
use Wovosoft\BdHrmProfile\Enums\Religions;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class Profile extends Model implements HasRulesInterface
{
    use HasFactory, HasTablePrefix, Searchable;

    protected $casts = [
        "gender" => Genders::class,
        "religion" => Religions::class,
        "marital_status" => MaritalStatuses::class
    ];

    public static function rules(): array
    {
        return [
            "name" => ["string", "required"],
            "bn_name" => ["string", "nullable"],
            "dob" => ["date_format:Y-m-d", "nullable"],
//            "profile_photo_id" => ["date_format:Y-m-d", "nullable"],  //todo: later
            "fathers_name" => ["string", "nullable"],
            "bn_fathers_name" => ["string", "nullable"],
            "mothers_name" => ["string", "nullable"],
            "bn_mothers_name" => ["string", "nullable"],
            "spouse_name" => ["string", "nullable"],
            "bn_spouse_name" => ["string", "nullable"],
            "gender" => ["string", "nullable", new Enum(Genders::class)],
            "religion" => ["string", "nullable", new Enum(Religions::class)],
            "marital_status" => ["string", "nullable", new Enum(MaritalStatuses::class)],
        ];
    }

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

    public function familyMembers(): HasManyThrough
    {
        # todo: apply keys
        return $this->hasManyThrough(
            FamilyMember::class,
            Profile::class
        );
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, "profile_id");
    }

    public function physicalAttributes(): HasOne
    {
        return $this->hasOne(PhysicalAttributes::class);
    }

    public function citizenshipInformation(): HasOne
    {
        return $this->hasOne(CitizenshipInfo::class, 'profile_id');
    }
}
