<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserToken;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::firstOrCreate(['email' => $request->input('email')]);

        if (! $user->wasRecentlyCreated) {
            $user->tokens()->delete();
        }

        $token = $user->createToken(Str::random(), ['*'], now()->addWeek());
        Mail::to($user->email)->send(new UserToken($token));

        return response()->json([
            'status' => 'success',
            'message' => 'An access token has been emailed to you.',
        ]);
    }
}
