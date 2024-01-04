<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
     /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function apiLogin(Request $request){

        $request_data = array(
            'description' => 'login request',
            'request_ip' => $request->ip(),
            'request_host' => $request->schemeAndHttpHost(),
            'request_method' => $request->method(),
            'request_url' => $request->fullUrl(),
            'request_payload' => json_encode($request->all()),
            'request_headers' => json_encode($request->header())
        );

        logger()->debug($request_data);

        //validate incoming request
        $validation = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ],[
            'email.required' => 'The email address is required.',
            'email.string' => 'The email address must be a string.',
            'email.email' => 'The email address must be a valid email address.',
            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a string.',
        ]);

        if($validation->fails()){
            logger()->debug('validation failed!!!');
            logger()->debug($validation->errors());
            return response()->json($validation->errors(), 400);
        }

        logger()->debug('validation passed!!!');

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            logger()->debug('invalid credentials!!!');
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Create a new personal access token for the user
        $token = $user->createToken('api')->plainTextToken;

        // Return the user data with the auth token
        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function ResetPassword(Request $request){

        $request_data = array(
            'description' => 'reset password request',
            'request_ip' => $request->ip(),
            'request_host' => $request->schemeAndHttpHost(),
            'request_method' => $request->method(),
            'request_url' => $request->fullUrl(),
            'request_payload' => json_encode($request->all()),
            'request_headers' => json_encode($request->header())
        );

        logger()->debug($request_data);

        //validate incoming request
        $validation = Validator::make($request->all(),[
            'email' => 'required|string|email',
        ],[
            'email.required' => 'The email address is required.',
            'email.string' => 'The email address must be a string.',
            'email.email' => 'The email address must be a valid email address.',
        ]);

        if($validation->fails()){
            logger()->debug('validation failed!!!');
            logger()->debug($validation->errors());
            return response()->json($validation->errors(), 400);
        }

        logger()->debug('validation passed!!!');

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            logger()->debug('user not found on the database!!!');
            return response()->json(['error' => 'user email not found on the database'], 401);
        }

        //random 4 digit number
        $otp = rand(1000, 9999);

        //send email
        $to_name = $user->firstname.' '.$user->lastname;
        $subject = "Password Reset OTP";
        $data = $otp;
        Mail::to($user->email)->send(new ResetPassword($user, $subject, $data));

        $user->password_reset_otp = $otp;
        $user->save();


        // Return the user data with the auth token
        return response()->json([
            'status' => 'success',
            'message' => "OTP has been successfully sent!",
        ]);

    }

    public function VerifyOtp(Request $request){

        $request_data = array(
            'description' => 'verify otp request',
            'request_ip' => $request->ip(),
            'request_host' => $request->schemeAndHttpHost(),
            'request_method' => $request->method(),
            'request_url' => $request->fullUrl(),
            'request_payload' => json_encode($request->all()),
            'request_headers' => json_encode($request->header())
        );

        logger()->debug($request_data);

        //validate incoming request
        $validation = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'otp' => 'required|string',
        ],[
            'email.required' => 'The email address is required.',
            'email.string' => 'The email address must be a string.',
            'email.email' => 'The email address must be a valid email address.',
            'otp.required' => 'The otp is required.',
            'otp.string' => 'The otp must be a string.',
        ]);

        if($validation->fails()){
            logger()->debug('validation failed!!!');
            logger()->debug($validation->errors());
            return response()->json($validation->errors(), 400);
        }

        logger()->debug('validation passed!!!');

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            logger()->debug('user not found on the database!!!');
            return response()->json(['error' => 'user email not found on the database'], 401);
        }

        if($user->password_reset_otp != $request->otp){
            logger()->debug('invalid otp!!!');
            return response()->json(['error' => 'invalid otp'], 401);
        }

        // Return the user data with the auth token
        return response()->json([
            'status' => 'success',
            'message' => "OTP verified successfully!, create new password",
        ]);
    }
}
