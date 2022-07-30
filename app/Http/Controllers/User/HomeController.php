<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Libraries\Ultilities;
use App\Models\Collection;
use App\Models\EmailRegister;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    //

    public function userDetail(Request $request)
    {
        return view('users.auth.user');
    }

    public function forgotPass(Request $request)
    {
        dd($request->all());
    }


    /**
     * view home page
     *
     */
    public function indexHome(Request $request, Collection $collection)
    {
        //get collection and product in collection
        $getCollection = $collection->getCollection()->take(3);

        return view('users.homepage', [
            'style' => 1,
            'collections'=>$getCollection
        ]);
    }

    public function registerEmail(Request $request, EmailRegister $emailRegister)
    {
        $codition = [
            'email'=>$request->email
        ];
        $data = [
            'date'=>Carbon::now('Asia/Ho_Chi_Minh')
        ];
        try{
            $emailRegister->updateOrCreate($codition, $data);
            return back()->with([
                'alert-type'=>'success',
                'message'=>'Đăng ký email nhận thông tin thành công'
            ]);
        }catch(Exception $e){
            return back()->with([
                'alert-type'=>'error',
                'message'=>$e->getMessage()
            ]);
        }
    }

    public function viewAboutUs()
    {
        return view('users.about-us');
    }

    public function viewContactUs()
    {
        return view('users.contacts');
    }

    public function viewLogin()
    {
        \Auth::logout();
        return view('users.auth.login');
    }

    public function login(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string||min:6|max:35',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], false)) {
            return redirect()->route('detail.user')->with([
                'alert-type'=>'success',
                'message' => 'Đăng ký tài khoản thành công'
            ]);
        }
        return back()->with([
            'message'=>'Tài khoản hoặc mật khẩu không đúng'
        ]);
    }

    public function register(Request $request, User $user)
    {
        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email' => 'required|email|regex:/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/|unique:users,email',
            'phone' => 'nullable|sometimes|max:20|min:7|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address' => 'nullable|sometimes|string|max:255',
            'password' => 'required|string||min:6|max:35',
        ]);
        try{
            $newUser = $user->create([
                'first_name'=>Ultilities::clearXSS($request->first_name),
                'last_name'=>Ultilities::clearXSS($request->last_name),
                'email'=>Ultilities::clearXSS($request->email),
                'address'=>Ultilities::clearXSS($request->address),
                'phone'=>Ultilities::clearXSS($request->phone),
                'password'=>bcrypt($request->password)
            ]);
            if (Auth::guard('web')->attempt(['email' => $newUser->email, 'password' => $request->password], false)) {
                return redirect()->route('detail.user')->with([
                    'alert-type'=>'success',
                    'message' => 'Đăng ký tài khoản thành công'
                ]);
            }
        }catch(Exception $e){
            return back()->with([
                'alert-type'=>'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
