<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Proposal;
use Illuminate\Support\Facades\Validator;

class ProposalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $proposals = Proposal::all();
        return Inertia::render('Proposals/Index', ['proposals' => $proposals]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return Inertia::render('Proposals/Create');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'package_authen' => ['required'],
            'package_prepared' => ['required'],
            'package_description' => ['required'],
            'package_jurisdiction' => ['required'],
            'package_full_details' => ['required'],
            'package_remark' => ['required'],
            'package_name' => ['required'],
            'package_date' => ['required'],
        ])->validate();
   
        Proposal::create($request->all());
    
        return redirect()->route('proposals.index');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Proposal $proposal)
    {
        return Inertia::render('Proposals/Edit', [
            'proposal' => $proposal
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update($id, Request $request)
    { 
        Validator::make($request->all(), [
            'package_authen' => ['required'],
            'package_prepared' => ['required'],
            'package_description' => ['required'],
            'package_jurisdiction' => ['required'],
            'package_full_details' => ['required'],
            'package_remark' => ['required'],
            'package_name' => ['required'],
            'package_date' => ['required'],
        ])->validate();
    
        Proposal::find($id)->update($request->all());
        return redirect()->route('proposals.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy($id)
    {
        Proposal::find($id)->delete();
        return redirect()->route('proposals.index');
    }
}
