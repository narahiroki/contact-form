@extends('layouts.admin')

@section('title', 'お問い合わせ詳細')

@section('content')
    <a class="back-link" href="{{ route('admin.contacts.index') }}">&laquo; 一覧に戻る</a>

    <h1>お問い合わせ詳細</h1>

    @if (session('status_updated'))
        <div class="alert">ステータスを更新しました。</div>
    @endif

    <dl>
        <div class="detail-row">
            <dt>受信日時</dt>
            <dd>{{ $contact->created_at->format('Y-m-d H:i') }}</dd>
        </div>
        <div class="detail-row">
            <dt>名前</dt>
            <dd>{{ $contact->name }}</dd>
        </div>
        <div class="detail-row">
            <dt>メールアドレス</dt>
            <dd>{{ $contact->email }}</dd>
        </div>
        <div class="detail-row">
            <dt>件名</dt>
            <dd>{{ $contact->subject }}</dd>
        </div>
        <div class="detail-row">
            <dt>本文</dt>
            <dd>{{ $contact->body }}</dd>
        </div>
    </dl>

    <form method="POST" action="{{ route('admin.contacts.update', $contact) }}">
        @csrf
        @method('PATCH')

        <div class="detail-row">
            <dt>ステータス</dt>
            <dd>
                <select name="status">
                    @foreach (\App\Models\Contact::statusOptions() as $value => $label)
                        <option value="{{ $value }}" @selected($contact->status === $value)>{{ $label }}</option>
                    @endforeach
                </select>
                <button type="submit">更新</button>
            </dd>
        </div>
    </form>
@endsection
