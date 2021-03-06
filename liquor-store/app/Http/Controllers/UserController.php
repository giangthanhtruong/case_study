<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backend.users.list', compact('users'));
    }


    public function create()
    {
        return view('backend.users.create');
    }



    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
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

    public function delete(Request $request)
    {

        try {
            $userId = $request->deleteId;
            User::destroy($userId);
            $data = [
                'status' => 'success',
                'message' => 'Xo?? th??nh c??ng!'
            ];
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'L???i h??? th???ng!'
            ];
        }
        return response()->json($data);


    }
}
