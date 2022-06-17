<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class CitizenshipInfo extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, Searchable, HasTablePrefix;

    public static function rules(): array
    {
        return [
            "nid" => ["string", "nullable"],
            "birth_certificate" => ["string", "nullable"],
            "tin" => ["string", "nullable"],
            "bin" => ["string", "nullable"],
        ];
    }
}

