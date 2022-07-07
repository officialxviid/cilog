<?php

namespace XVIID\Cilog\Config;

use Config\Services as BaseServices;
use XVIID\Cilog\Config\Cilog as CilogConfig;
use XVIID\Cilog\Cilog;

class Services extends BaseServices
{
    public static function cilog(?CilogConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('cilog', $config);
        }

        $config ??= config('Cilog');

        return new Cilog($config);
    }
}
