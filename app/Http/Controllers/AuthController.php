<?php
/**
 * Created by PhpStorm.
 * User: smirnoff
 * Date: 02.02.19
 * Time: 3:23
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        //disable email confirm
        //if ($request->ajax() || $request->wantsJson()) {
            //$user->sendEmailVerificationNotification();
        //}

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function signOut(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function getCurrentUser(Request $request)
    {
        return response()->json($request->user());
    }

    public function updateCurrentUser(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'string|email|unique:users',
            'password' => 'string',
            'isAdmin' => 'boolean'
        ]);

        $user = Auth::user();

        if ( $user->update($request->only(['name', 'email', 'password'])) ) {
            return response()->json([
                'message' => 'Successfully updated user!',
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'message' => 'Something went wrong on update user',
                'user' => $user
            ], 500);
        }

    }


}
