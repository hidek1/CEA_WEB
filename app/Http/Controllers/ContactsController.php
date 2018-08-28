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
 
        return view('index_contact', compact('types'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
     
        // 「お問い合わせ種類（checkbox）」を配列から文字列に
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
     
        // チェックボックス（配列）を「,」区切りの文字列に
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }
     
        // データを保存
        Contact::create($request->all());
     
        // 二重送信防止
        $request->session()->regenerateToken();
             
        return view('index_contact_complete');

            // 送信メール
        \Mail::send(new \App\Mail\Contact([
            'to' => $request->email,
            'to_name' => $request->name,
            'from' => 'hidekazu5200@icloud.com',
            'from_name' => 'MySite',
            'subject' => 'お問い合わせありがとうございました。',
            'type' => $request->type,
            'body' => $request->body
        ]));
     
        // 受信メール
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
}

