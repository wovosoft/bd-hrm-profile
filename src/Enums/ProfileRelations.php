<?php

namespace Wovosoft\BdHrmProfile\Enums;

use Wovosoft\BdHrmProfile\Models\CitizenshipInfo;
use Wovosoft\BdHrmProfile\Models\Contact;
use Wovosoft\BdHrmProfile\Models\FamilyMember;
use Wovosoft\BdHrmProfile\Models\PermanentAddress;
use Wovosoft\BdHrmProfile\Models\Photo;
use Wovosoft\BdHrmProfile\Models\PhysicalAttributes;
use Wovosoft\BdHrmProfile\Models\PresentAddress;

enum ProfileRelations: string
{
    case CitizenshipInfo = CitizenshipInfo::class;
    case Contact = Contact::class;
    case FamilyMember = FamilyMember::class;
    case PermanentAddress = PermanentAddress::class;
    case Photo = Photo::class;
    case PhysicalAttributes = PhysicalAttributes::class;
    case PresentAddress = PresentAddress::class;
}
