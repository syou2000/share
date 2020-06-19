<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    public function mail()
    {
        $stream = Storage::readStream('sample.png');
        $imgData = stream_get_contents($stream);
        fclose($stream);

        Mail::to("XXXXXXXXXXXXXXXX@gmail.com")
            ->cc("XXXXXXXXXXXXXXX@gmail.com")
            ->bcc("XXXXXXXXXXXXXXXXX@gmail.com")
            ->send(new SampleMail('sample text', 'sample.png', 'image/png', $imgData));

        return view('sample.mail');
    }

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectPath()
    {
        return '/post';
    }
}
