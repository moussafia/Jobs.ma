<?php

namespace App\Http\Controllers\UserController;

use App\Models\Score;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Exceptions\JWTException;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('authJWT')->only('logout');
    }
    public function registrer(Request $request)
    {
        $validateData = $request->validate([
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]*$/'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]*$/'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',

        ]);
        $user = new User;
        $user->first_name = $validateData['first_name'];
        $user->last_name = $validateData['last_name'];
        $user->email = $validateData['email'];
        $user->password = Hash::make($validateData['password']);
        $user->save();
        try {
            $token = JWTAuth::attempt(['email' => $request->email, 'password' => $request->password]);
            $cookie = cookie('jwt_token', $token, config('jwt.ttl'), null, null, false, false);
        } catch (JWTException $e) {
            return redirect()->back()->withErrors(['error' => 'could_not_create_token']);
        }
        return response()->json([
            'message'=>'registrer et succesfully done',
            'cookie'=>$cookie
        ]);
    }
    public function logIn(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',

        ]);
        $credentials = $request->only('email', 'password');
        if (!$token = JWTAuth::attempt($credentials)) {
            return redirect()->back()->withErrors([
                'email' => 'email or password not correct.',
            ])->withInput();
        }
        $cookie = cookie('jwt_token', $token, config('jwt.ttl'), null, null, false, true);
        return redirect()->route('dashboardView')->withCookie($cookie);
    }

    // public function ForgetPassword(Request $request)
    // {

    //     $request->validate(['email' => 'required|email']);
    //     $user = User::where('email', $request->email)->first();
    //     if (!$user) {
    //         return redirect()->back()->withErrors([
    //             'email' => 'We could not find a user with that email address.'
    //         ]);
    //     }
    //     $token = Str::random(60);
    //     $exestingRecords = DB::table('password_resets')->where('email', $request->email)->first();
    //     if ($exestingRecords) {
    //         DB::table('password_resets')->update([
    //             'email' => $user->email,
    //             'token' => $token,
    //             'created_at' => now()
    //         ]);
    //     } else {
    //         DB::table('password_resets')->insert([
    //             'email' => $user->email,
    //             'token' => $token,
    //             'created_at' => now()
    //         ]);
    //     }
    //     $link = URL::to('/password/reset/' . $token . '?email=' . urlencode($user->email));
    //     Mail::to($user)->send(new ResetPasswordEmail($link));
    //     return redirect()->back()->with('status', 'We have e-mailed your password reset link!');
    // }
    // public function showResetForm(Request $request, $token = null)
    // {
    //     $email = $request->query('email');
    //     return view('authPages.passwords.reset', compact('token', 'email'));
    // }

    // public function reset(Request $request)
    // {
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|confirmed',
    //     ]);

    //     $checkTokens = DB::table('password_resets')
    //         ->where([
    //             'email' => request('email'),
    //             'token' => request('token')
    //         ])
    //         ->first();
    //     if (!$checkTokens) {
    //         return back()->withErrors(['email' => 'invalid tokens please repeat request forget password']);
    //     }

    //     User::where('email', request('email'))
    //         ->update(['password' => Hash::make(request('password'))]);

    //     DB::table('password_resets')->where(['email' => request('email')])->delete();

    //     return redirect()->route('logIn')->with('status', 'Password reset successfully!');
    // }

    // public function logout(Request $request)
    // {
    //     try {
    //         $token = $request->cookie('jwt_token');
    //         JWTAuth::setToken($token)->invalidate();
    //         cookie()->queue(cookie()->forget('jwt_token'));
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()]);
    //     }
    //     return redirect()->route('welcome');
    // }
}