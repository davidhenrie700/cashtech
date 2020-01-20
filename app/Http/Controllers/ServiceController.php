<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        
        return view('register.service.services', compact('services'));
    }

    public function store(Request $request, Service $service)
    {   
        $request->validate([
            'servicos' => 'required|unique:services',
            'valor' => 'required:services'
        ]);

        $service->create($request->except(['_token']));

        return redirect()->route('service.index')->with('message', 'Serviço cadastrado com sucesso!!');
    }

    public function edit(Service $service)
    {
        return view('register.service.editService', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        
        $service->update($request->except(['id']));

        return redirect()->route('service.index')->with('message', 'Serviço alterado com sucesso!!');
    }

    public function destroy(Service $service)
    {
        $service->delete($service->id);

        return redirect()->route('service.index')->with('message', 'Serviço excluído com sucesso!!');
    }
}
