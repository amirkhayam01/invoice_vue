<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        $users = Client::all();
        return view('dashboard.invoice.index',compact('users'));
    }
}
