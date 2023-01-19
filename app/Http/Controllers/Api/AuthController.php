<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
     public function createUser(Request $request) {

        try {


            $validateRequest = Validator::make(
                $request->all(),
                [
                    'name' => 'required|min:4',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:6',
                    'gender' => 'required|min:4',
                    'dob' => 'required|min:4',
                    'address' => 'required|min:4',
                    'phone_no' => 'required|min:11',
                    'type' => ['string', 'in:user,rider']

                ]
            );

            if($validateRequest->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation Error',
                    'errors' => $validateRequest->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'address' => $request->address, 
                'phone_no' => $request->phone_no,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole($request->input('type'));

            return response()->json([
                'status' => true,
                'message' => 'Account Created Successfully',
                'data' => $user,
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }

    }

    /*

     *@param Request $request
     *@return User
    */

     public function LoginUser(Request $request)
    {
       try{
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

                if($validateUser->fails()){
                    return response()->json([
                        'status' => false,
                        'message' => 'validation error',
                        'errors' => $validateUser->errors()
                    ],  401 );

                }

                if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.'
                ], 401);
                }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken('API TOKEN')->plainTextToken
    ], 200);


       } catch(\THrowable $th) {
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

       }catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
       }
    }

    public function logout(Request $request) {
        User::findOrFail(auth()->user()->id)->tokens()->delete();

        return [
            'message' => 'Logged Out'
        ];
 }


}

