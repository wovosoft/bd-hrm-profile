<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class PermanentAddress extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, HasTablePrefix, Searchable;

    public static function rules(): array
    {
        return [
            "division_id" => ["numeric", "nullable"],
            "district_id" => ["numeric", "nullable"],
            "upazila_id" => ["numeric", "nullable"],
            "union_id" => ["numeric", "nullable"],
            "village" => ["string", "nullable"],
            "word" => ["string", "nullable"],
            "address" => ["string", "nullable"],
        ];
    }
}
