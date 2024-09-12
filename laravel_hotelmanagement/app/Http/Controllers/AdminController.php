<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;

class AdminController extends Controller
{
    public function index()
    {
        //
    }

    public function adduser()
    {
        return view('admin-pages.adduser');
    }

    public function addadmin(StoreadminRequest $request)
    {
        $admin = new admin;
        $admin->one = $request->one;
        $admin->two = $request->two;
        $admin->three = $request->three;
        $admin->four = $request->four;
        $admin->five = $request->five;
        $admin->save();

        return Redirect('/user');
    }

    public function vuser() /* user table for view */
    {
        $admins = admin::all();
        return view('admin-pages.user',compact('admins'));
    }

    public function useredit()  /*edituser form view */
    {
      return view('admin-pages.edituser');
    }

    public function update(UpdateadminRequest $request, admin $admin)
    {
        //
    }

    public function deleteuser( $admin_id)
    {
        $admin = admin::findOrfail( $admin_id);
        $admin->delete();
        return Redirect('/user');
    }
}
