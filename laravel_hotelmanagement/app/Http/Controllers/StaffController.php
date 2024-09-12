<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use App\Http\Requests\StorestaffRequest;
use App\Http\Requests\UpdatestaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewstaff()
    {
        $staffs = staff::all();
        return view('admin-pages.viewstaff',compact('staffs'));
        /* Show the table for creating a new resource. */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function staff()
    {
        return view('admin-pages.staff');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestaffRequest $request)
    {
        $staff = new staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->position = $request->position;
        $staff->department = $request->department;
        $staff->salary = $request->salary;
         $staff->save();
         return Redirect('/viewstaff');
    }

    /**
     * Display the specified resource.
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editData($staff_id)
    {
        $staff = staff::findOrfail($staff_id);

        return view('admin-pages.editstaff',['staff' =>$staff]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData( $staff_id, StorestaffRequest $request)
    {
        $staff = staff::findOrfail($staff_id);
       
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->position = $request->position;
        $staff->department = $request->department;
        $staff->salary = $request->salary;
         $staff->save();
        return Redirect('/viewstaff');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        
        $staff = staff::find($request->staff_id);
        
        $staff->delete();
        return Redirect('/viewstaff'); 
    }
}
