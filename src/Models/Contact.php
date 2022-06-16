<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wovosoft\BdHrmProfile\Enums\ContactTypes;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class Contact extends Model
{
    use HasFactory, HasProfile, HasTablePrefix;

    protected $casts = [
        "type" => ContactTypes::class
    ];

    public function scopeOfType(Builder $builder, ContactTypes $type)
    {
        return $builder->whereType($type);
    }
}
