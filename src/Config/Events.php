<?php

namespace XVIID\Cilog\Config;

use CodeIgniter\Events\Events;

Events::on('post_controller_constructor', static function () {
    $config = config('Cilog');
    // Ignore CLI requests
    if (! is_cli() && $config->allowedCilog) {
        Services::cilog()->record();
    }
});
