<?php

return [
    'enabled' => env('OMNI_PUSH_DISPATCHER_ENABLED', true),
    'timeout' => env('OMNI_PUSH_DISPATCHER_TIMEOUT', 30),
    'log_channel' => env('OMNI_PUSH_DISPATCHER_LOG', 'stack'),
];
