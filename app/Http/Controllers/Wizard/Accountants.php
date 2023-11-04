<?php

namespace App\Http\Controllers\Wizard;

use Illuminate\Http\Request;
use App\Abstracts\Http\Controller;
use App\Models\Auth\User;
use App\Models\Common\Company;
use App\Models\Auth\UserCompany;



class Accountants extends Controller
{
        /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        // Add CRUD permission check
        $this->middleware('permission:create-common-companies')->only('create', 'store', 'duplicate', 'import');
        $this->middleware('permission:read-common-companies')->only('index', 'show', 'edit', 'export');
        $this->middleware('permission:update-common-companies')->only('update', 'enable', 'disable');
        $this->middleware('permission:delete-common-companies')->only('destroy');
    }


    public function edit()
    {
        $accountants = User::whereRoleIs('računovodski servis')->get();

        return $this->response('wizard.accountants.edit', compact('accountants'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        // Company
        $company = Company::find(company_id());

        $accountants = $request->all();

        $userId = $request->input('accountant');
        $companyId = user()->companies()->first()->id;

        if ($userId){
            UserCompany::create([
                'user_id' => $userId,
                'company_id' => $companyId,
            ]);

        }


        // Save all settings
        setting()->save();

        return response()->json([
            'status' => null,
            'success' => true,
            'error' => false,
            'message' => trans('messages.success.updated', ['type' => trans_choice('general.companies', 2)]),
            'data' => null,
        ]);
    }
}
