<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');     
        }
        else{
            return view('admin.login');
        }
        // echo "hello";
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
        // return $request->post();
        $email=$request->post('email');
        $password=$request->post('password');

        // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        $result=Admin::where(['email'=>$email])->first();
        if($result){
           if(Hash::check($request->post('password'),$result->password)){
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_ID',$result->id);
            return redirect('admin/dashboard');
           }else{
            $request->session()->flash('error','Please enter correct password');
            return redirect('admin');
           }
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_ID',$result[0]->id);
            return redirect('admin/dashboard');
        }else{
        
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
        // echo '<prev>';
        // print_r($result);

        // if(isset($result['0']->id)){
        //     $request->session()->put('ADMIN_LOGIN',true);
        //     $request->session()->put('ADMIN_ID',$result[0]->id);
        //     return redirect('admin/dashboard');
            
        // }
        // else{
        //     $request->session()->flash('error','Please enter valid login details');
        //     return redirect('admin');
        // }
    }

    public function dashboard()
    {
        // echo "hello";
        return view('admin.dashboard');
    }

    // public function updatepassword()
    // {
    //     $r=Admin::find(1);
    //     $r->password=Hash::make('Pstone');
    //     $r->save();
        
    // }
}
