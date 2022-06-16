<?php

namespace Wovosoft\BdHrmProfile\Enums;

enum MaritalStatuses: string
{
    case Single = "s";
    case Married = "m";
    case Divorced = "d";
    case WidowedWomen = "ww";
    case WindowedMan = "wm";
    case LivingTogether = "lt";
}
