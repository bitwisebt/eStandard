<?php

namespace App\Http\Controllers;

use App\Models\TechnicalCommittee;
use Illuminate\Http\Request;


class TechnicalCommitteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tc = TechnicalCommittee::all();
        return view('technical_committee.index', compact('tc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('technical_committee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'technical_committee' => 'required',
        ]);

        $tc = new TechnicalCommittee();
        $tc->technical_committee = $request->input('technical_committee');
        $tc->save();
        return redirect('/technical-committee')->with('success', 'Save successful!!');
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
        $tc = TechnicalCommittee::find($id);
        return view('technical_committee.edit', compact('tc'));
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
        $this->validate($request, [
            'technical_committee' => 'required',
        ]);
        $tc = TechnicalCommittee::find($id);
        $tc->technical_committee = $request->input('technical_committee');
        $tc->save();
        return redirect('/technical-committee')->with('success', 'Update successful!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $tc = TechnicalCommittee::find($id);
        $tc->delete();
        return redirect('/technical-committee')->with('success', 'Delete successful!!');
    }
}
