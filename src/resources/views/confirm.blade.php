@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__ttl">
        お問い合わせ内容確認
    </div>

    <form class="form" action="/contacts" method="post">
    @csrf
        <div class="confirm__table">
            <table class="confirm__table-inner">
                <tr class="confirm__table-row">
                    <th class="confirm__table-header">お名前</th>
                    <td class="confirm__table-text">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__table-row">
                    <th class="confirm__table-header">メールアドレス</th>
                    <td class="confirm__table-text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__table-row">
                    <th class="confirm__table-header">電話番号/th>
                    <td class="confirm__table-text">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__table-row">
                    <th class="confirm__table-header">お問い合わせ内容</th>
                    <td class="confirm__table-text">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection