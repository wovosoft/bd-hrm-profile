<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Enums\BloodGroups;
use Wovosoft\BdHrmProfile\Enums\HumanColors;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class PhysicalAttributes extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, HasTablePrefix, Searchable;

    public static function rules(): array
    {
        return [
            "height" => ["numeric", "nullable"],
            "weight" => ["numeric", "nullable"],
            "is_disabled" => ["boolean", "nullable"],
            "body_color" => [new Enum(HumanColors::class), "nullable"],
            "eye_color" => [new Enum(HumanColors::class), "nullable"],
            "eye_vision" => ["string", "nullable"],
            "blood_group" => ["nullable", new Enum(BloodGroups::class)]
        ];
    }

    protected $casts = [
        "body_color" => HumanColors::class,
        "eye_color" => HumanColors::class,
        "blood_group" => BloodGroups::class
    ];
}
