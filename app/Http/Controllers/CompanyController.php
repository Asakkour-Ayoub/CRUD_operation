<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //*Dsiplay a listing of resource
    public function index()
    {
        $companies = Company::orderBy('id')->paginate(5);
        return view('companies.index', compact('companies'));
    }

    //*Show the form for create a new resource
    public  function create()
    {
        return view('companies.create');
    }

    //*Stor a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        // $data = $request->all();
        // dd($data);
        Company::create($request->post());
        // Company::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'address' => $data['address'],
        // ]);

        return redirect()->route('companies.index')->with('success', 'Company hes been created successfully.');
    }

    //*Display a spicified resource
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    //*Show the form editing the spicified resource.
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    //*Update the spicifies resource in storage
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $company->fill($request->post())->save();

        return redirect()->route('companies.index')->with('success', 'Company has been updates successfullt');
    }

    //*Remouve the specified resource from storage
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company has been deleted successfully');
    }
}
