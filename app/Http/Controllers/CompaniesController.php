<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompanyRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Rules\PhoneNumber;
use App\Models\Massage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::orderByDesc('created_at')->paginate(10);

        return view('adminDashboart.companies',[
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = new Company();
        return view('adminDashboart.create', [
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SaveCompanyRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SaveCompanyRequest $request)
    {
//        $data = $request->validated();
        $company = Company::create($request->validated());
        return redirect()->route('companies.index');

        //        $company->name = $data['name'];
//        $company->adress = $data['adress'];
//        $company->phone = $data['phone'];
//        $company->resident = $data['resident'];
//        $company->birthday = $data['birthday'];
//        $company->status = $data['status'];
//        $company->save();


//       dd($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company, Request $request=null )
    {
//        $company = Company::find($id);
        $massage = Massage::all();
        $company = Company::all('id','name')->where('id',$massage->company);

        if ($request!==null){
            return view('adminDashboart.viewMassage', [
                'company' => $company,
                'massage' => $massage
//        dd($company)
            ]);
        }
        else {
            return view(
                'adminDashboart.view',
                [
                    'company' => $company,
                    'massages' => $massage
                ]
            );
        }
//        dd(Company::where('id',$id)->get());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('adminDashboart.editCompany',[
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        $company -> update($data);
        return redirect()->route('companies.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
