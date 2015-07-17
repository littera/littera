<?php

namespace App\Http\Controllers\Littera;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    protected $section = 'settings';

    public function getIndex()
    {
        return view('littera.settings.index', [
            'settings' => [
                'email' => [
                    'drivers' => [
                        'smtp' => 'SMTP',
                        'mail' => 'PHP mail()',
                        'senmail' => 'Sendmail',
                        'mailgun' => 'Mailgun',
                        'mandrill' => 'Mandrill',
                        'ses' => 'Amazon SES',
                        'log' => 'Log',
                    ],
                ],
            ],
        ]);
    }
}