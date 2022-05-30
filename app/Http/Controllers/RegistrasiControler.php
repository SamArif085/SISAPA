<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrasiControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');
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
        $validate = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validate['password'] = Hash::make($validate['password']);
        // dd($validate);
        User::create($validate);
        // $request->session()->flash('success', 'Registrasi berhasil Lanjut Login');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterModel $registerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterModel $registerModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterModel $registerModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterModel $registerModel)
    {
        //
    }
}
