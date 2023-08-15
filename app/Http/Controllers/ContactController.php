<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryForm;
use App\Mail\AdminInquiryForm;

class ContactController extends Controller
{
    //お問い合わせ一覧ページ(管理者)
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(5);
        foreach($contacts as $contact) {
            if($contact->status === 'unfinished') {
                $contact->status = '未対応';
            } else {
                $contact->status = '対応済';
            };
        }
        return view('contact.index', compact('contacts'));
    }

    //作成画面の表示
    public function create()
    {
        return view('contact.create');
    }

    // public function confirm(Request $request)
    // {
    //     dd($request);
    //     return view('contact.confirm', ['request' => $request]);
    // }

    // お問い合わせ内容の新規登録処理
    public function store(ContactRequest $request)
    {        
        $contact = $request->validated();
        $contact['is_contact_speed'] = boolval($request['is_contact_speed']);
        $contact['is_status'] = false;
        Contact::create($contact);

        /*-------------------------------------
        メールの設定
        -------------------------------------*/
        // 管理者へメール通知
        Mail::to(config('mail.admin'))->send(new AdminInquiryForm($contact));
        // ユーザーへメール通知
        Mail::to($contact['email'])->send(new InquiryForm($contact));
        return view('contact.thanks', compact('contact'));
    }

    // 詳細ページの表示
    public function show(Contact $contact)
    {
        if($contact->status === 'unfinished') {
            $contact->status = '未対応';
        } else {
            $contact->status = '対応済';
        };
        return view('contact.show', compact('contact'));
    }

    // 編集ページの表示
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    // 更新の処理
    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $contact->user_id = auth()->user()->id;
        $contact->update($validated);
        return to_route('contact.index');
    }

    // 削除の処理
    public function destroy($id)
    {
        dd($id);
    }
}
