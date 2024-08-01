<?php

namespace App\Http\Controllers;

use App\Models\Company;
//use App\Models\Company;
use App\Models\Massage;
use Illuminate\Http\Request;

//use function League\Flysystem\get;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $massage = Massage::all();
//        $company = Company::all('id','name')->where('id',$massage->company);
        return view('adminDashboart.massage', [
            'massage' => $massage,
//             'company' => $company
//            dd($company)
        ]

//            dd($massage)
        );

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('adminDashboart.createMassage', [
            'companies' => $companies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'company'=>'required',
            'text'=>'required',
        ]);
        $massage = Massage::create($data);
        return redirect()->route('massage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Massage $massage)
    {

//      $massage = Massage::all();

      $company = Company::all('id','name')->where('id',$massage->company);
        return view('adminDashboart.viewMassage', [
            'company' => $company,
            'massage' => $massage
//        dd($company)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Massage $massage)
    {
        $company = Company::all();
        return view('adminDashboart.editMassage',[
            'massage' => $massage,
            'companies' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Massage $massage)
    {
        $massage->delete();
        return redirect()->route('massage.index');
    }
}
