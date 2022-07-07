<?php

namespace XVIID\Cilog\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;
use CodeIgniter\Exceptions\FrameworkException;

class CilogException extends FrameworkException implements ExceptionInterface
{
    public static function forMissingDatabaseTable(string $table)
    {
        return new static(lang('Cilog.missingDatabaseTable', [$table]));
    }

    public static function forCouldntCreateDir(string $path)
    {
        return new static(lang('Cilog.couldntCreateDir', [$path]));
    }

    public static function forCouldntCreateFile(string $filepath)
    {
        return new static(lang('Cilog.couldntCreateFile', [$filepath]));
    }

    public static function forErrorReadingFile(string $filepath)
    {
        return new static(lang('Cilog.errorReadingFile', [$filepath]));
    }

    public static function forUnavailableMethod(string $method)
    {
        return new static(lang('Cilog.unavailableMethod', [$method]));
    }
}
