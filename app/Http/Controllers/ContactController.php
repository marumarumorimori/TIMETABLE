<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{



        public function index()
        {

            return view('contact.contact');
        }
        public function store(ContactRequest $request){
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            return rediect('contact.contact')->with(['message' => 'お問い合わせが完了しました。', 'status'=> 'info']);
        }

}
