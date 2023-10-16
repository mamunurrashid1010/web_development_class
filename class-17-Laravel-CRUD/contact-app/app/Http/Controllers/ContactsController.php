<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // index method, show all contact list
    public function index(){
        $contactList = Contacts::all();
        return view('contact.index',compact('contactList'));
    }

    // show contact add form
    public function create(){
        return view('contact.create');
    }

    // store contact info to db
    public function store(Request $request){
        // example-1
        /*
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        */
        // example-2
        //$data = $request->all();

        // store data
        Contacts::query()->insert([
            'name'  => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        //return redirect()->route('contact.index');
        return redirect()->back();
    }
}
