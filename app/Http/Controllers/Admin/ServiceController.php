<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        \App\Models\ActivityLog::record('Created Service', "Added service: {$request->title}");

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        \App\Models\ActivityLog::record('Updated Service', "Updated service: {$service->title}");

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $title = $service->title;
        $service->delete();
        \App\Models\ActivityLog::record('Deleted Service', "Deleted service: {$title}");
        return redirect()->route('admin.services.index');
    }
}
