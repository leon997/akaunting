<?php

namespace App\Http\Controllers;

use App\Abstracts\Http\Controller as Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controller\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class PlanController extends Controller
{

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        // Add CRUD permission check
        $this->middleware('permission:create-common-plans')->only('create', 'store', 'duplicate', 'import');
        $this->middleware('permission:read-common-plans')->only('index', 'show', 'export');
        $this->middleware('permission:update-common-plans')->only('edit', 'update', 'enable', 'disable');
        $this->middleware('permission:delete-common-plans')->only('destroy');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {

        return view("plans");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Request $request)
    {

        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact( "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */


    public function subscription_successfull(Request $request)
    {
        return view("subscription_success");
    }

    public function settings()
    {
        $name = Auth::user()->name;
        $sub_type = DB::table('subscriptions')->where('id', '=', Auth::user()->id)->value('name');
        $user_expired = Auth::user()->subscription('basic')->ended();



        return view('plan_settings')->with('user_name', $name)->with('sub_name', $sub_type)->with('user_expired', $user_expired);
    }

    public function subscriptionCancel()
    {
        Auth::user()->subscription('basic')->cancel();
        $sub_end = DB::table('subscriptions')->where('id', '=', Auth::user()->id)->value('ends_at');

        return view('subscription_cancel')->with('sub_end', $sub_end);

    }

    public function subscriptionResume()
    {
        Auth::user()->subscription('basic')->resume();
        return redirect()->route('dashboard');
    }


}
