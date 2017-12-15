<?php

return [

    /**
     * Redirecting path after impersonating.
     */
    'redirectingPath' => '/home',

    /**
     * Add middlewares you wish to protect impersonating pages access.
     * Note: auth middleware is applied by default.
     */
    'middlewares' => [],

    /**
     * Specify which table and column should be validate in order to verify the email address.
     */
    'exists' => [
        'table' => 'users',
        'column' => 'email',
    ],

];
