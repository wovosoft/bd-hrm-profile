<?php

namespace Wovosoft\BdHrmProfile\Traits;

trait HasTablePrefix
{
    use \Wovosoft\LaravelCommon\Traits\HasTablePrefix;

    public function getPrefix(): string
    {
        return config("bd-hrm-profile.table_prefix");
    }
}
