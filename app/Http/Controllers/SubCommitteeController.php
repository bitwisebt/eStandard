<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCommitteeController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $sub = DB::table('sub_committees as A')
            ->join('technical_committees as B', function ($join) {
                $join->on('A.tc_id',  'B.id');
            })
            ->select(
                'A.*',
                'B.technical_committee'
            )
            ->orderBy('B.id')
            ->orderBy('A.id')->get();
        return view( 'sub_committee.index', compact( 'sub' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $category = AuCategory::get();
        $au = AdministrativeUnit::get();
        return view( 'department.create', compact( 'category', 'au' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $this->validate( $request, [
            'au_id' =>'required',
            'department_id' =>'required',
            'au_id' =>'required',
            'code' =>'required',
            'department_name' =>'required',
            'accnoid' =>'required'
        ] );

        $department = new Department();
        $department->department_id = $request->input( 'department_id' );
        $department->au_id = $request->input( 'au_id' );
        $department->code = $request->input( 'code' );
        $department->department_name = $request->input( 'department_name' );
        $department->accnoid = $request->input( 'accnoid' );
        $department->save();
        return redirect( '/department' )->with( 'success', 'Saved successfully!!' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $category = AuCategory::all();
        $au = AdministrativeUnit::get();
        $department = Department::find( $id );
        return view( 'department.edit', compact( 'category', 'department', 'au' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $this->validate( $request, [
            'au_id' =>'required',
            'department_id' =>'required',
            'au_id' =>'required',
            'code' =>'required',
            'department_name' =>'required',
            'accnoid' =>'required'
        ] );
        $department = Department::find( $id );
        $department->department_id = $request->input( 'department_id' );
        $department->au_id = $request->input( 'au_id' );
        $department->code = $request->input( 'code' );
        $department->department_name = $request->input( 'department_name' );
        $department->accnoid = $request->input( 'accnoid' );
        $department->save();
        return redirect( '/department' )->with( 'success', 'Updated successfully!!' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $department = Department::find( $id );
        $department->delete();
        return redirect( '/department' )->with( 'success', 'Deleted successfully!!' );
    }
}
