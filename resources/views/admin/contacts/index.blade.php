@extends('layouts.admin')

@section('title', 'お問い合わせ一覧')

@section('content')
    <h1>お問い合わせ一覧</h1>

    @if ($contacts->isEmpty())
        <p class="empty">お問い合わせはまだありません。</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>受信日時</th>
                    <th>名前</th>
                    <th>件名</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="clickable-row" onclick="location.href='{{ route('admin.contacts.show', $contact) }}'">
                        <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                        <td><a href="{{ route('admin.contacts.show', $contact) }}">{{ $contact->name }}</a></td>
                        <td>{{ $contact->subject }}</td>
                        <td><span class="badge badge-{{ $contact->status }}">{{ $contact->statusLabel() }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $contacts->links() }}
        </div>
    @endif
@endsection
