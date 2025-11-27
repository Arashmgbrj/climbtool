<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
    public function ContactView()
    {

        return view("contact.contact");

    }
   public function ContactViewPost(Request $request)
     {
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    // Create and save the contact
    $newContact = new ContactModel();
    $newContact->name = $request->input('name');
    $newContact->email = $request->input('email');
    $newContact->comment = $request->input('message');
    $newContact->save();

    // Optionally, you can flash a success message
    return view("contact.contact")->with('success', 'Thank you for your message!');
     }





    
}
