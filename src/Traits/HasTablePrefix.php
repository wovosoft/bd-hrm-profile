<?php

namespace Wovosoft\BdHrmProfile\Traits;

trait HasTablePrefix
{
    public function getTable(): string
    {
        if (config("bd-hrm-profile.table_prefix")) {
            return config("bd-hrm-profile.table_prefix") . parent::getTable();
        }
        return parent::getTable();
    }
}
