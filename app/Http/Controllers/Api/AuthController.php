<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Auth\CaptchaService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function generate(CaptchaService $captcha)
    {
        return response()->json($captcha->generate());
    }
}
