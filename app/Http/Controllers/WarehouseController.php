<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Massage;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = DB::select('select * from brand.companies where deleted_at');
        return view('adminDashboart.warehouse',[
            'deleted_infos' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::all();
        return view('adminDashboart.createWarehouse',[
            'companies'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'=>'required | min:5',
            'companyID'=> 'required',
            'text'=>'required',

        ]);
        $massage = Massage::create($data);
        return redirect()->route('warehouse.create');
//        ,[
//        'companies'=>$company
//    ]
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
