<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdmintratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
//        $admins = User::all()->orderBy('id', 'desc');
        $admins = User::orderBy('id', 'desc')->get();

//        dd($admins);

        return view('Admin.Admintrator.index',['user' => $user, 'admins' => $admins]);
    }

    public function newAccount(){
//        dd('ac');
        $user = Auth::user();
        return view('auth.register',['user' => $user]);
    }
    public function registerProcess(){
//        dd('abc');
        $this->validate(request(), [
            'UserFirstName' => 'required',
            'UserLastName' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->UserFirstName = request('UserFirstName');
        $user->UserLastName = request('UserLastName');
        $user->phone = request('phone');
        $user->role = request('role');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();

        return redirect()->to('/admin/manage');
//        $user = User::create(request(['name', 'email', 'password']));
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
    public function edit(Request $request, $id)
    {
        $user = Auth::user();
        $admins = User::find($id);
        return view('admin.Admintrator.update',['user' => $user, 'admins' => $admins]);
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
//        dd('abc');
//        $a = request('role');
//        dd($a);
        $user = Auth::user();
        $admins = User::all();
        $admin = User::find($id);
        $admin->UserFirstName = request('UserFirstName');
        $admin->UserLastName = request('UserLastName');
        $admin->phone = request('phone');
        $admin->role = request('role');
//        dd($admin);
        $admin->save();

        return redirect()->route('admin.admintrator');
//        return view('admin.Admintrator.index',['admins' =>$admins, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();

        return redirect()->route('admin.admintrator');
    }
}
