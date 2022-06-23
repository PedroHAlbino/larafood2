<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePlan;
use App\Models\Plan;
use Illuminate\Support\Str;

class PlanController extends Controller
{
    private $repository;
    
    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    public function index()
    {
        $plans =  $this->repository->all();
        return view('admin.pages.plan.index',[
            'plans' => $plans
        ]);
    }

    public function create()
    {
        return view('admin.pages.plan.create');
    }

    public function store(StoreUpdatePlan $request)
    {
      
       $this->repository->create($request->all());
       return redirect()->route('plan.index');

    }

    public function show($url)
    {
        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
        
        return view('admin.pages.plan.show',[
            'plan' => $plan
        ]);
    }

    public function destroy($url)
    {
        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
        
        $plan->delete();
        
        return redirect()->route('plan.index');
    }

    public function search(Request $request)
    {
        $plans = $this->repository->search($request->filter);
        return view('admin.pages.plan.index',[
            'plans' => $plans
        ]);

    }

    public function edit($url)
    {
        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
                
        return view('admin.pages.plan.edit',[
            'plan' => $plan
        ]);
    }

    public function update(StoreUpdatePlan $request,$url)
    {
        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
                
        $plan->update($request->all());

        return redirect()->route('plan.index');
    }


    


}
