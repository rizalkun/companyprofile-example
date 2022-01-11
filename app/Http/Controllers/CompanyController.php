<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function saveCompany(Request $request)
    {
        $company = Company::first();
        if ($company == null) {
            $company = new Company();
            $company->save();
        }
        $company->name = $request->name;
        $company->description = $request->description;

        $company->save();

        return redirect()->back()->with('alert-success', 'Data company berhasil disimpan');
    }
}
