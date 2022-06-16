<?php

namespace Wovosoft\BdHrmProfile\Enums;
enum ContactTypes: string
{
    case Email = "email";
    case Phone = "phone";
    case Fax = "fax";
    case Landline = "tel";
    case PhysicalMailingAddress = "pma";    //physical mailing address
}
