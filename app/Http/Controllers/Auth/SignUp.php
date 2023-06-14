<?php

namespace App\Http\Controllers\Auth;

use App\Abstracts\Http\Controller;
use App\Http\Requests\Install\Setting as Request;
use App\Models\Common\Company;
use App\Utilities\Installer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;

class SignUp extends Controller
{
    use RegistersUsers;

    protected $redirectTo = 'auth/login';


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.signUp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {
            // Create company
            Installer::createCustomCompany($request->get('company_name'), $request->get('user_email'), 'sl-SI');
            // Create user
            Installer::createManageUser($request->get('name'), $request->get('user_email'), $request->get('user_password'), 'en-GB', ['2']);
        });




        // Redirect to dashboard
        return response()->json([
            'redirect' => url($this->redirectPath()),
        ]);
    }
}
