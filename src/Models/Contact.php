<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Enums\ContactTypes;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

/**
 * todo:  Contacts should be in different package, because bkb-offices also
 * uses Contacts as well as other packages too. The contacts package can have some more features
 */
class Contact extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, Searchable, HasTablePrefix;

    public static function rules():array
    {
        return [
            "type" => ["string", "nullable"],
            "content" => ["string", "nullable"],
        ];
    }

    protected $casts = [
        "type" => ContactTypes::class
    ];

    public function scopeOfType(Builder $builder, ContactTypes $type)
    {
        return $builder->whereType($type);
    }
}
