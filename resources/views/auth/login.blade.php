@extends('layouts.templates.theme-login')

@section('content')
<div class="pen-title">
    <h1>Inventory</h1>
</div>
<div class="module form-module">
    <div class="toggle"></div>
    <div class="form">
        <h2>Masuk dengan akun anda</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
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

            <button type="submit">Login</button>

            <!-- <div class="pen-title-mini">
                <span><i class='fa fa-code'></i> Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></span>
            </div>             -->
        </form>
    </div>
    <div class="cta"><a href="{{ route('password.request')}}">Lupa password?</a></div>
</div>

@endsection
