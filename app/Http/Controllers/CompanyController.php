<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->get();
        return view('company/index',['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request() -> validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'open_date' => 'required',
            'end_date' => 'required'
        ]);
        Company::create([
            'name' => request('name'),
            'address' => request('address'),
            'telephone' => request('telephone'),
            'open_date' => request('open_date'),
            'end_date' => request('end_date')
        ]);

        return redirect('/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('company.show',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //calling the company by id to be edited
        $company = Company::find($id);
        return view('company.edit', compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // new values to populate the company called in edit func
        request() -> validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'open_date' => 'required',
            'end_date' => 'required'
        ]);

        $company = Company::find($id);
        $company->name = request('name');
        $company->address = request('address');
        $company->telephone = request('telephone');
        $company->open_date = request('open_date');
        $company->end_date = request('end_date');

        $company->save();

        return redirect(route('company.show',$company));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //code to delete the company by the id

    }
}
