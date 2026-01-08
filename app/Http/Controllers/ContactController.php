<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Pesan berhasil dikirim');
    }
}
