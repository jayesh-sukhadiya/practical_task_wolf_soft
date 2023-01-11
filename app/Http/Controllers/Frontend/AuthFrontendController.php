<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Exceptions;
use App\Models\SubscribeEmail;
use Illuminate\Support\Str;
use App\Models\User;
use App;
use Auth;
use Session;
Use Validator;

class AuthFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function loginPage()
    {
        return view('frontend.auth.login');
    }

    public function registerPage()
    {
        return view('frontend.auth.register');
    }

    public function forgetPasswordPage()
    {
        return view('frontend.auth.forget-password');
    }

    public function signIn(Request $request)
    {
        // create our user data for the authentication
        if(is_numeric($request->get('username'))){ // mobile number login
            $userdata = array(
            'password'  => $request->password,
            'mobile_number' => $request->username,
            );
        }else{
            $userdata = array(
                'password' => $request->password,
                'email' => $request->username,
            );
        }   
        // attempt to do the login
        if (Auth::attempt($userdata,true)) {
            return redirect('/');
        } else {
            Session::flash('error', "Username or Password are doesn't match!");
            return redirect('/user/login');
        }
    }

    public function storeUser(Request $request)
    {
        $this->validateStoreInput($request);
        try 
        {
            $datausers = User::select('id')->orderBy('id','DESC')->limit(1)->first();
           
            if($datausers)
            {   $userId = $datausers->id;
                $userLastId = $datausers->id + 100 + 1+ date('Y');
                $userperId = "CUST".$userLastId;
            }else{
                $userperId = "CUST1002023";
            }

            $insertData = new User();
            $insertData->uuid = Str::uuid();
            $insertData->email = $request->email;
            $insertData->name = $request->name;
            $insertData->mobile_number = $request->mobile_number;
            $insertData->password = bcrypt($request['password']);
            $insertData->wallet_amount = 0;
           // $insertData->role = 3; // Customer
           // $insertData->is_active = 1; // 1 Active and 0 Inactive
            $insertData->created_at = date('Y-m-d H:i:s');
            $insertData->updated_at = date('Y-m-d H:i:s');
            $insertData->save();

            $userdata = array(
                'password' => $request->password,
                'email' => $request->email,
            );

            // attempt to do the login
            if (Auth::attempt($userdata,true)) {
                return redirect('/');
            } else {
                Session::flash('error', "Username or Password are doesn't match!");
                return redirect('/user/login');
            }
        } catch (\Exception $e) {
            Exceptions::exception($e);
            return redirect('/');
        }
   }

    private function validateStoreInput($request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|string|email',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'email.unique' => 'Email is already exists',
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password string is required.',
            'password.confirmed' => 'Confirmed is required.',
        ]);
    }

    public function myAccountPage()
    {
        return view('frontend.auth.my-account');
    }

    public function storeWalletAddress(Request $request)
    {
        try
        {
            $oldWalletAmount = User::select('wallet_amount')->where('id',Auth::user()->id)->first();

            if($oldWalletAmount){
                $walletAmount = $oldWalletAmount->wallet_amount;
            }else{
                $walletAmount = 0;
            }

            $updateData['wallet_amount'] = $request->wallet_amount + $walletAmount;
            $updateData['updated_at'] = date('Y-m-d H:i:s');
            $update = User::where('id',Auth::user()->id)->update($updateData);

            if($update)
            {
                $msg = "Wallet amount is added";
                return json_encode(['status' => true, 'error' => 200, 'message' => $msg,'data' => array('wallet_amount'=> $request->wallet_amount + $walletAmount)],JSON_UNESCAPED_SLASHES);
            }else{
                $msg = "Something is wrong!";
                return json_encode(['status' => false, 'error' => 401, 'message' => $msg,'data' => array()],JSON_UNESCAPED_SLASHES);
            }

        }catch (\Exception $e) {
             Exceptions::exception($e);
        }
    }
}
