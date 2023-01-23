<?php

namespace App\Http\Controllers\Api;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(auth()->user()->id);
        $addresses = $user->addresses;


        return response()->json([
            'status' => true,
            'addresses' => $addresses
        ]);

    }




    public function store(Request $request)
     {
           $valid =  $request->validate([
                // 'type' => 'required',
                'address' => 'required',
            ]);


            Address ::create([
                'type' => $valid['type'],
                'address' => $valid['address'],
                'user_id' => auth()->user()->id

            ]);


            return response()->json([
                'status' => true,
                'message' =>'Address Updated'
            ]);
        }





        public function destroy(Address $address, $user)
         {

            $user = user::find($address);
           if($address==null){
                 return response()->json([
                      'status' => true,
                     'message' => 'Address Not Found',
                 ], 200);


             }
                $address->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Address Has Been Deleted',
                ]);

        }

    }



