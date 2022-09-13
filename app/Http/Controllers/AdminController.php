<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

class AdminController extends Controller
{
    public function user()
    {

        $data = user::all();
        return view('admin.users', compact("data"));
    }

    public function deleteuser($id)
    {

        // delete users
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        return view("admin.foodmenu");
    }

    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        // set the image in the database
        $data->image = $imagename;

        // title cames from database
        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();

    }
}
