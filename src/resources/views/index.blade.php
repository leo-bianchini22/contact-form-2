@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__ttl">
        <h2>お問い合わせ</h2>
    </div>
<!-- form-name -->
    <form class="form" action="">
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">お名前</span>
                <span class="form__label-required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="name" placeholder="テスト太郎" />
                </div>
                <div class="form__error">
                    <!-- バリデーション -->
                </div>
            </div>
        </div>
<!-- form-email -->
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">メールアドレス</span>
                <span class="form__label-required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="email" name="email" placeholder="test@example.com" />
                </div>
                <div class="form__error">
                    <!-- バリデーション -->
                </div>
            </div>
        </div>
<!-- form-tel -->
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">電話番号</span>
                <span class="form__label-required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="tel" name="tel" placeholder="09022223333" />
                </div>
                <div class="form__error">
                    <!-- バリデーション -->
                </div>
            </div>
        </div>
<!-- form-content -->
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">お問い合わせ内容</span>
                <span class="form__label-required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-textarea">
                    <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                </div>
                <div class="form__error">
                    <!-- バリデーション -->
                </div>
            </div>
        </div>
<!-- form-button -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection