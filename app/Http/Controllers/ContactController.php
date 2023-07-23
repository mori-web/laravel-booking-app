<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //お問い合わせ一覧ページ(管理者)
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        foreach($contacts as $contact) {
          if($contact->status === 'unfinished') {
            $contact->status = '未対応';
          } else {
            $contact->status = '対応済';
          };
        }
        return view('contact.index',compact('contacts'));
    }

    //作成画面の表示
    public function create()
    {
        return view('contact.create');
    }

    // お問い合わせ内容の新規登録処理
    public function store(ContactRequest $request)
    {
        $contact = $request->validated();
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
    public function update(ContactRequest $request, Contact $contact)
    {
      // dd($contact);
      $validated = $request->validated();
      $validated['status'] = 'unfinished';
      $contact->update($validated);
      return view('contact.index');
    }

    // 削除の処理
    public function destroy($id)
    {
        dd($id);
    }
}
