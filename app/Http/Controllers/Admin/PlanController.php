<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
       // dd($request->all());
        $data = $request->all();
       $data['url'] = Str::kebab($request->name);
       $this->repository->create($data);
       return redirect()->route('plan.index');

    }

}
