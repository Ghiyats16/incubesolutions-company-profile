<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices = Service::count();
        $totalContacts = Contact::count();
        $messagesToday = Contact::whereDate('created_at', today())->count();
        $lastLogin = \App\Models\ActivityLog::where('action', 'Login')->latest()->first();

        return view('admin.dashboard.index', compact('totalServices', 'totalContacts', 'messagesToday', 'lastLogin'));
    }
}
