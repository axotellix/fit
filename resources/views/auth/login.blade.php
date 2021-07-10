@extends('Layouts.auth')

@section('content')

    <h1 class = 'auth-heading'>ENTRANCE</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- email -->
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="EMAIL ..." required autocomplete="off">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <!-- password -->
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder = 'PASSWORD ...' required autocomplete="off">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <!-- remember me -->
        <div class="checkbox-field flex-row-center">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label for="remember" class = 'm-0'>
                {{ __('Remember Me') }}
            </label>
        </div>

        <!-- submit -->
        <button type="submit" class="button-wide center-x">
            <span>ENTER</span>
        </button>

        <div class="form-nav">
            <span>Don`t have an account?</span>
            <a href="{{ route('register') }}">Sign up</a>
        </div>

    </form>

@endsection
