<?php

namespace App\Http\Controllers;

use App\Abstracts\Http\Controller as Controller;
use App\Models\Plan;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {

        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);

        return view("subscription_success");
    }

    public  function settings()
    {
        $user = auth()->user('id');
        $subscription = DB::table('subscriptions')->where('user_id', $user)->get();

        return $this->response('plan_settings', compact('user', 'subscription'));
    }
}
