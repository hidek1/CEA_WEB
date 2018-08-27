<?php
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;
 
class ContactsController extends Controller
{
    public function index()
    {
        $types = Contact::$types;
 
        return view('index_ja_contact', compact('types'));
    }
}