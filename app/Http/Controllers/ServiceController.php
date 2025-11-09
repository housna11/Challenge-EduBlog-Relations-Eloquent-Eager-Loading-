<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    
    public function index()
    {
        //  if (Gate::allows('view')) {
        //     return view('index', ['services' => service::all()]);
        // }else{
        //     return "Not Allowd";
        // }
        //  if (Gate::allows('index')) {
        //     return view('index', ['services' => service::all()]);
        // }else{
        //     return "Not Allowd";
        // }
       Gate::authorize('view', service::class);

        return view('index', ['services' => service::all()]);
    }


    public function create(){
      return view('create');}

    
   public function store(StoreServiceRequest $request)
{
    $validated = $request->validated();

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('services', 'public');
        $validated['image'] = $path;
    }

    $service = Service::create($validated);

    return redirect()->route('services.index');
}

    
    public function show(Service $service){
      return view('show',['service' => $service]);
    }


    public function edit(Service $service){
      return view('Edit',['service' => $service]);

    }

    public function update(UpdateServiceRequest $request, Service $service){ 
      $this->authorize('update', $service);
      
      $service->update($request->validated());
      return redirect()->route('services.index');
    }

  
    public function destroy(Service $service){
    $service->delete();
    return redirect()->route('services.index');
    }
}




