<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * 入力フォームを表示する
     */
    public function index(Request $request): View
    {
        // 確認画面から「戻る」で遷移してきた場合はクエリパラメータの値を初期値にする
        $input = [
            'name' => old('name', $request->query('name', '')),
            'email' => old('email', $request->query('email', '')),
            'subject' => old('subject', $request->query('subject', '')),
            'body' => old('body', $request->query('body', '')),
        ];

        return view('contact.index', $input);
    }

    /**
     * 入力内容を検証し、確認画面を表示する
     */
    public function confirm(ContactRequest $request): View
    {
        return view('contact.confirm', $request->validated());
    }

    /**
     * お問い合わせ内容を保存し、完了画面へリダイレクトする
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()->route('contact.complete');
    }

    /**
     * 送信完了画面を表示する
     */
    public function complete(): View
    {
        return view('contact.complete');
    }
}
