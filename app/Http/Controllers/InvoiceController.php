<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function invoice_list()
    {
        $user = Auth::id();

        $invoices = Invoice::where('user_id', $user)->get();

        return view('dashboard.invoice.invoice_list', compact('invoices'));
    }
    public function invoice()
    {
        $auth_user =User::find(Auth::user()->id);
        $user = Auth::id();
        $users = Client::where('user_id', $user)->get();
        return view('dashboard.invoice.index',compact('users','auth_user'));
    }

    public function edit()
    {
        //
    }


    public function createClient(Request $request){
      $requestData= $request->all();
    //   dd($requestData);
      $client= new Client();
      $client->user_id=Auth::user()->id;
      $client->full_name=$requestData['full_name'];
      $client->email = $requestData['email'];
      $client->address = $requestData['address'];
      $client->company = $requestData['company'];
      $client->country = $requestData['country'];
      $client->phone = $requestData['phone'];

      $client->save();
      return response()->json($client);
    }


    public function createInvoice(Request $request){
       dd($request);
       return response()->json($request);
       //now you get items array from request and save in db// if you want to see aatribute of item then inpect element in network tab
    }


    public function updateUser(Request $request){
        $userData=$request->auth_user_data;
        // dd($request);
        $id =Auth::user()->id;
        $userData= User::find($id);
        $userData->name=$request->name;
        $userData->email = $request->email;
        $userData->address = $request->address;
        $userData->state = $request->state;
        $userData->country = $request->country;
        $userData->phone = $request->phone;

        $userData->save();
        return response()->json($userData);
    //    $user= User::find();
    }
}
