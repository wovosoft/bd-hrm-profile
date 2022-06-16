<?php

namespace Wovosoft\BdHrmProfile\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Wovosoft\BdHrmProfile\Models\Profile;

trait HasProfile
{
    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, "profile_id");
    }
}
