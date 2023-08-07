<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\PlanService;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'plan.index',
            ['plans' => Plan::orderBy('id', 'desc')->price()->paginate(5),
            'plan_searches' => PlanService::search($request->all())->paginate()]
          
        );
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(PlanRequest $request)
    {
        $validated = $request->validated();
        $validated['image']= $request->file('image')->store('images', 'public');
        Plan::create($validated);
        return to_route('plan.index');
    }

    public function show(Plan $plan)
    {
        return view('plan.show', compact('plan'));
    }

    public function edit(Plan $plan)
    {
        return view('plan.edit', compact('plan'));
    }

    public function update(PlanRequest $request, Plan $plan)
    {
        $validated = $request->validated();
        $plan->update($validated);
        return to_route('plan.index');
    }

    public function destroy(Plan $plan)
    {
        $image = pathinfo($plan->image, PATHINFO_BASENAME);
        Storage::disk('public')->delete('images/' . $image);
        $plan->delete();
        return to_route('plan.index');
    }
}
