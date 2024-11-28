<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum SettingGroup: string
{
    use EnumToArray;
    case GENERAL = 'general';
    case DoctorType = 'DoctorType';
}
