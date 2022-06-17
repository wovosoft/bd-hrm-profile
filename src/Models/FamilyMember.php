<?php

namespace Wovosoft\BdHrmProfile\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;
use Laravel\Scout\Searchable;
use Wovosoft\BdHrmProfile\Enums\Relations;
use Wovosoft\BdHrmProfile\Interfaces\HasRulesInterface;
use Wovosoft\BdHrmProfile\Traits\HasProfile;
use Wovosoft\BdHrmProfile\Traits\HasTablePrefix;

class FamilyMember extends Model implements HasRulesInterface
{
    use HasFactory, HasProfile, HasTablePrefix, Searchable;

    public static function rules(): array
    {
        return [
            "related_to" => ["numeric", "required"],
            "relation" => [new Enum(Relations::class)],
        ];
    }

    public function scopeOfRelation(Builder $builder, Relations $relation): Builder
    {
        return $builder->where("relation", "=", $relation);
    }
}
