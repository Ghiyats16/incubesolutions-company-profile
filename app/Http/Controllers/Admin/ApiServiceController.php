<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ApiServiceController extends Controller
{
public function index()
{
    $response = Http::get('http://127.0.0.1:8001/api/services', [
        'api_key' => 'INCUBE123'
    ]);

    $services = $response->json()['data'];

    return view('admin.services-from-api', compact('services'));
}
}
