<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * お問い合わせ一覧を表示する
     */
    public function index(): View
    {
        $contacts = Contact::latest()->paginate(20);

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * お問い合わせ詳細を表示する
     */
    public function show(Contact $contact): View
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * ステータスを更新する
     */
    public function update(Request $request, Contact $contact): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(array_keys(Contact::statusOptions()))],
        ]);

        $contact->update($validated);

        return redirect()->route('admin.contacts.show', $contact)
            ->with('status_updated', true);
    }
}
