<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Gate;

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

    public function confirm(Request $request)
    {
      dd($request);
      return view('contact.confirm', ['request' => $request]);
    }

    // お問い合わせ内容の新規登録処理
    public function store(ContactRequest $request)
    {
        $contact = $request->validated();
        if($request['contact_speed'] === 'off') {
            $contact['contact_speed'] = 0;
        } else {
            $contact['contact_speed'] = 1;
        }
        $contact['memo'] = '';
        $contact['status'] = 'unfinished';
        Contact::create($contact);
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
