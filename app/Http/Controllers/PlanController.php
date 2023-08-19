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
        $user_expired = PlanController::isSubscriptionCanceled();

        $sub_until = DB::table('subscriptions')->where('id', '=', Auth::user()->id)->value('updated_at');
        $sub_end = Carbon::parse($sub_until)->addMonth(1)->format('d-m-Y');





        return view('plan_settings')->with('user_name', $name)->with('sub_name', $sub_type)->with('sub_end', $sub_end)->with('user_expired', $user_expired);
    }

    public function subscriptionCancel()
    {
        Auth::user()->subscription('basic')->cancel();
        $sub_ending = DB::table('subscriptions')->where('id', '=', Auth::user()->id)->value('ends_at');
        $sub_ended = Carbon::parse($sub_ending)->format('d-m-Y');

        return view('subscription_cancel')->with('sub_ended', $sub_ended);

    }

    public function subscriptionResume()
    {
        Auth::user()->subscription('basic')->resume();
        return redirect()->route('dashboard');
    }

    public function isSubscriptionCanceled(){
        $user = Auth::user();
        if ($user->subscription('basic')->canceled() || $user->subscription('basic')->onGracePeriod()) {
            return true;
        } else {
            return false;
        }
    }


}
