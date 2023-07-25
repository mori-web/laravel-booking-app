<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
      $plans = Plan::all();
      return view('plan.index', compact('plans'));
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(PlanRequest $request)
    {
        $validated = $request->validated();
        Plan::create($validated);
        return to_route('plan.index');
    }

    public function show(Plan $plan)
    {
        return view('plan.show',compact('plan'));
    }

    public function edit(Plan $plan)
    {
        //
    }

    public function update(Request $request, Plan $plan)
    {
        //
    }

    public function destroy(Plan $plan)
    {
        //
    }
}
