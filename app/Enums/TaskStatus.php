<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static InProgress()
 * @method static static Completed()
 */
final class TaskStatus extends Enum
{
    const Pending = 0;
    const InProgress = 1;
    const Completed = 2;

}
