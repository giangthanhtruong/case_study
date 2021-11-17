<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('users.list');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $user = User::findOrFail($id);
//        $user->name = $request->name;
//        $user->age = $request->age;
//        $user->email = $request->email;
//        $user->address = $request->address;
//        if ($request->hasFile('image')) {
//            // xoa anh cu
//            Storage::delete('public/' . $user->image);
//            //cap nhat anh moi
//            $path = $request->file('image')->store('images', 'public');
//            $user->image = $path;
//        }
//        $user->phone = $request->phone;
//
//        $user->save();
//        return redirect()->route('users.list');


        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
//        $user = User::findOrFail($id);
//        return view('backend.users.edit', compact('user'));

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            // xoa anh cu
            Storage::delete('public/' . $user->image);
            //cap nhat anh moi
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }
        $user->phone = $request->phone;

        $user->save();
        return redirect()->route('users.list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
