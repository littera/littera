<?php

return [

    'login' => [
        'success' => 'Welcome! Login has been successful.',
        'fail' => 'Login or password were incorrect.',
    ],

    'logout' => [
        'success' => 'Goodbye! Logout successful.',
    ],

    'password' => [
        'password' => 'Passwords must be at least six characters and match the confirmation.',
        'reset' => 'Your password has been reset!',
        'sent' => 'We have e-mailed your password reset link!',
        'token' => 'This password reset token is invalid.',
        'user' => "We can't find a user with that e-mail address.",
    ],

    'throttle' => [
        'fail' => 'Too many login attempts. Please try again in :seconds seconds.',
    ],

];
