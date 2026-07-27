@extends('layouts.app')

@section('title', 'お問い合わせ内容の確認')

@section('content')
    <h1>入力内容のご確認</h1>

    <dl>
        <div class="confirm-row">
            <dt>名前</dt>
            <dd>{{ $name }}</dd>
        </div>
        <div class="confirm-row">
            <dt>メールアドレス</dt>
            <dd>{{ $email }}</dd>
        </div>
        <div class="confirm-row">
            <dt>件名</dt>
            <dd>{{ $subject }}</dd>
        </div>
        <div class="confirm-row">
            <dt>本文</dt>
            <dd>{{ $body }}</dd>
        </div>
    </dl>

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="subject" value="{{ $subject }}">
        <input type="hidden" name="body" value="{{ $body }}">

        <div class="actions">
            <button type="submit" formaction="{{ route('contact.index') }}" formmethod="GET" formnovalidate class="secondary">戻る</button>
            <button type="submit">送信する</button>
        </div>
    </form>
@endsection
