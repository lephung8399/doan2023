<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword(){
        $user = Auth::user();
//        dd('ac');
        return view('admin.newPassword',['user' => $user]);
    }

    public function changePasswordProcess(Request $request,$id){
        $user = User::find($id);
        $user->password = Hash::make($request['password']);
//        $user->password = Hash::make($request_data['password']);
        $user->save();
//        dd($id);
        return redirect()->route('admin.profile');
    }

    public function confirmPassword(){
//        dd('a');
        $user = Auth::user();
        return view('admin.confirmPassword',['user' => $user]);
    }

    public function forbidden(){
        $user = Auth::user();
        return view('admin.forbidden',['user' => $user]);
    }

    public function avatar(Request $request, $id){
//        dd($id);
        $this->validate($request, [

            'anh' => 'required',
            'anh.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('anh'))
        {

            foreach($request->file('anh') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
            }
        }

        $user_ava = User::find($id);

        $user_ava->avatar = $name;
        $user_ava->save();

        return redirect()->route('admin.profile');

//        dump('abc');
    }

    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();
//        dd($user);
        return view('layouts.app1', [ 'user' => $user ]);
    }
    public function profile()
    {
        $user = Auth::user();
//        dd($user);
        return view('admin.myProfile', ['user' => $user]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $user = User::find($id);
        $user->username = request('username');
        $user->email = request('email');
        $user->UserFirstName = request('UserFirstName');
        $user->UserLastName = request('UserLastName');
        $user->UserAddress = request('UserAddress');
        $user->UserCity = request('UserCity');
        $user->UserCountry = request('UserCountry');
        $user->phone = request('phone');
        $user->aboutMe = request('aboutMe');
//        dd($user);
        $user->save();
        return redirect()->route('admin.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
