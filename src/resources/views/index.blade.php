@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />
  @endsection

  @section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first-name" placeholder="例:山田" value="{{ old('first-name') }}" />
              <div class="form__error">
              @error('first-name')
              {{ $message }}
              @enderror
              </div>
              <input type="text" name="last-name" placeholder="例:太郎" value="{{ old('last-name') }}" />
              <div class="form__error">
              @error('last-name')
              {{ $message }}
              @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-radio">
              <input type="radio" name="gender" />
              <label for="men">男性</label>
              <input type="radio" name="gender" />
              <label for="women">女性</label>
              <input type="radio" name="gender" />
              <label for="other">その他</label>
          </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101
              " value="{{ old('building') }}" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類
            </span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__select--text">
              <select class="Simple-select" >
                @foreach ($authors as $author)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->content}}</td>
                </tr>
              @endforeach
              </select>
              
            <div class="form__error">
            @error('detail')
            {{ $message }}
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
          <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面
          </button>
        </div>
      </form>
    </div>
  @endsection