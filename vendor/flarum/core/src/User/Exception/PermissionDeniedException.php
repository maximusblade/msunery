<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\User\Exception;

use Exception;
use Flarum\Foundation\KnownError;

class PermissionDeniedException extends Exception implements KnownError
{
    public function getType(): string
    {
        return 'permission_denied';
    }
}
