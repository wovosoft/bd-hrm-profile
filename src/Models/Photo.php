<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class Photo extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, HasTablePrefix, Searchable;

    public static function rules(): array
    {
        return [
            "file_name" => ["string", "required"],
            "file_path" => ["string", "nullable"],
            "disk" => ["string", "nullable"],
        ];
    }
}
