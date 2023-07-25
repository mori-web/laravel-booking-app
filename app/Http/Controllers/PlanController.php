<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
      return view('plan.index');
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Plan $plan)
    {
        //
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
