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

        return view('admin.dashboard.index', compact('totalServices', 'totalContacts'));
    }
}
