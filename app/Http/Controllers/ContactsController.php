<?php
namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;
 
class ContactsController extends Controller
{
    public function index()
    {
        $types = Contact::$types;

        return view('index_contact', compact('types'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
     
        $type = '';
        if (isset($request->type)) {
            $type = implode(', ',$request->type);
        }
     
        return view('index_contact_confirm', compact('contact', 'type'));
    }

    public function complete(ContactRequest $request)
    {
        $input = $request->except('action');
         
        if ($request->action === '戻る') {
            return redirect()->action('ContactsController@index')->withInput($input);
        }
     
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }
     
        Contact::create($request->all());
     
        $request->session()->regenerateToken();
             
        return view('index_contact_complete');

        \Mail::send(new \App\Mail\Contact([
            'to' => $request->email,
            'to_name' => $request->name,
            'from' => 'hidekazu5200@icloud.com',
            'from_name' => 'MySite',
            'subject' => 'お問い合わせありがとうございました。',
            'type' => $request->type,
            'body' => $request->body
        ]));
     
        \Mail::send(new \App\Mail\Contact([
            'to' => 'hidekazu5200@icloud.com',
            'to_name' => 'MySite',
            'from' => $request->email,
            'from_name' => $request->name,
            'subject' => 'サイトからのお問い合わせ',
            'type' => $request->type,
            'body' => $request->body
        ], 'from'));
        }

     public function list() {
        $contacts = Contact::all();
        return view('dashboard_contact_list', compact('contacts'));
    }

    public function edit($id) {
        $contact = Contact::findOrFail($id);
        $types = Contact::$types;
        return view('dashboard_contact_edit', compact('contact','types'));
    }
 
    public function update(ContactRequest $request, $id) {
        $contact = Contact::findOrFail($id);
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }
        $contact->update($request->all());
 
        return redirect(url('dashboard_contact_list'));
    }

    public function destroy($id) {
        $contact = Contact::findOrFail($id);
 
        $contact->delete();
 
        return redirect('dashboard_contact_list');
    }
}

