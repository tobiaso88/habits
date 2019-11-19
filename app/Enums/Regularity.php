<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Daily()
 * @method static static Weekly()
 * @method static static Monthly()
 */
final class Regularity extends Enum
{
    const Daily = 'daily';
    const Weekly = 'weekly';
    const Monthly = 'monthly';
}
