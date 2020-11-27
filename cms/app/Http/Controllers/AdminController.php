<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\User;
use App\Bodykit;
use App\Message;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function manage_User()
    {
        $users = User::all();
        return view('ManageUser', ['users' => $users]);
    }
    public function add_User()
    {
        return view('AddUser');
    }
    public function create_User(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('images', 'public');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'imageUser' => $image,
        ]);
        return redirect('/manageuser')->with('success', 'User Created Successfully!');
    }
    public function delete_User($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/manageuser')->with('info', 'User Deleted Successfully!');
    }
    public function edit_User($id)
    {
        $users = User::find($id);
        return view('EditUser', ['user' => $users]);
    }

    public function update_User($id, Request $request)
    {
        $users = User::find($id);
        $users->id = $request->id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->roles = $request->roles;
        if (
            $users->imageUser &&
            file_exists(storage_path('app/public/' . $users->imageUser))
        ) {
            \Storage::delete('public/' . $users->imageUser);
        }
        $image = $request->file('image')->store('images', 'public');
        $users->imageUser = $image;
        $users->save();
        return redirect('/manageuser')->with('success', 'User Updated Successfully!');
    }
    public function cetak_pdf_User()
    {
        $users = User::all();
        $pdf = \PDF::loadview('Report_pdf-user', ['user' => $users]);
        return $pdf->stream();
    }







    ///////////////////////////////////////////  << ARTIKEL >>  /////////////////////////////////////////////











    public function manage()
    {
        $bodykits = Bodykit::all();
        return view('Manage', ['bodykits' => $bodykits]);
    }

    public function add()
    {
        return view('AddProduct');
    }

    public function create(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('images', 'public');
        }
        Bodykit::create([
            'title' => $request->title,
            'content' => $request->content,
            'imageurl' => $image,
        ]);
        return redirect('/manage')->with('success', 'Product Created Successfully!');
    }

    public function edit($id)
    {
        $bodykits = Bodykit::find($id);
        return view('EditProduct', ['bodykit' => $bodykits]);
    }

    public function update($id, Request $request)
    {
        $bodykits = Bodykit::find($id);
        $bodykits->id = $request->id;
        $bodykits->title = $request->title;
        $bodykits->content = $request->content;

        if (
            $bodykits->featured_image &&
            file_exists(storage_path('app/public/' . $bodykits->imageurl))
        ) {
            \Storage::delete('public/' . $bodykits->imageurl);
        }
        $image = $request->file('image')->store('images', 'public');
        $bodykits->imageurl = $image;
        $bodykits->save();
        return redirect('/manage')->with('success', 'Product Updated Successfully!');
    }

    public function delete($id)
    {
        $bodykits = Bodykit::find($id);
        $bodykits->delete();
        return redirect('/manage')->with('info', 'Product Deleted Successfully!');
    }
    public function cetak_pdf()
    {
        $bodykits = Bodykit::all();
        $pdf = \PDF::loadview('Report_pdf', ['bodykit' => $bodykits]);
        return $pdf->stream();
    }







    ///////////////////////////////////////////  << ABOUT >>  /////////////////////////////////////////////









    public function manage_about()
    {
        $abouts = About::all();
        return view('ManageAbouts', ['abouts' => $abouts]);
    }
    public function edit_about($id)
    {
        $abouts = About::find($id);
        return view('EditAbout', ['abouts' => $abouts]);
    }
    public function update_about($id, Request $request)
    {
        $abouts = About::find($id);
        $abouts->id = $request->id;
        $abouts->text = $request->text;
        $abouts->year = $request->year;
        $abouts->valuebar = $request->valuebar;
        $abouts->save();
        return redirect('/manageabout')->with('success', ' Updated Successfully!');
    }







    ///////////////////////////////////////////  << MESSAGES >>  /////////////////////////////////////////////









    //Manage Message
    public function manage_mes()
    {
        $messages = Message::all();
        return view('ManageMessage', ['messages' => $messages]);
    }
    public function delete_mes($id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return redirect('/message')->with('info', 'Messages Deleted Successfully!');
    }
    public function cetak_pdf_mes()
    {
        $messages = Message::all();
        $pdf = \PDF::loadview('Report_pdf-message', ['message' => $messages]);
        return $pdf->stream();
    }
}
