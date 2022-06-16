<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wovosoft\BdHrmProfile\Enums\Relations;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class FamilyMember extends Model
{
    use HasFactory, HasProfile, HasTablePrefix;

    public function scopeOfRelation(Builder $builder, Relations $relation): Builder
    {
        return $builder->where("relation", "=", $relation);
    }
}
