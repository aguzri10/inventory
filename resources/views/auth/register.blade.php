@extends('layouts.templates.theme-login')
@section('content')
    <div class="pen-title">
        <h1>Inventory</h1>
    </div>
    <div class="module form-module">
        <div class="toggle"></div>
        <div class="form">
            <h2>Membuat akun baru</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input placeholder="Nama" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                
                <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                <button type="submit">Register</button>
            </form>
        </div>
        <div class="cta"><a href="{{ route('login')}}">Saya sudah punya akun</a></div>
    </div>
@endsection