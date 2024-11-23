<?php

return [

    'paths' => ['api/*','*'], // Include your login route

    'allowed_methods' => ['*'], // Allow all methods

    'allowed_origins' => ['*'], // Your Nuxt.js frontend URL

    'allowed_headers' => ['*'], // Allow all headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // This should be true if you're sending cookies or using auth
];
