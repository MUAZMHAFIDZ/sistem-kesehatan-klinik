<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    {{-- <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0
    ,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}

    <!-- Style CSS -->
    {{-- <link rel="stylesheet" href="{{ asset ('/css/pasien/stylePagesPasien.css') }}"> --}}

</head>
<body>

    @include('pasien.layout.navbarPasien')

    {{-- <main class="recoverypasword-form">

        <form action="{{ route('recovery.submit') }} methos="POST" class="recoveryPassword">
            <span>Recovery Your Dental Care Account</span>
            <p>Easy Recovery Using Your Personal Information</p>
            @csrf
            <div class="username-field">
                <input type="text" name="username" placeholder="Masukkan Username" class="@error('username') is-invalid @enderror"  value="{{ old('username') }}" autocomplete="off">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="nohp-field">
                <input type="text" name="nohp" placeholder="Masukkan Nomer Telepon" class="@error('nohp') is-invalid @enderror"  value="{{ old('nohp') }}" autocomplete="off">
                @error('nohp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="email-field">
                <input type="text" name="email" placeholder="Masukkan Email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="password-field">
                <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="New Password" >
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="password-confirmation-field">
                <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="@error("password_confirmation") is-invalid @enderror"  autocomplete="new-password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="tombol-register">
                <button type="submit">Verify</button>
            </div>
            
            <div class="question">
                <small> Already registered? <a href="/login">Login</a></small>
            </div>
            <div class="question">
                <small> Forgot Password? <a href="/login">Recovery Password</a></small>
            </div>
        </form>
    </main> --}}


    <main class="recoverypasword-form">
        <form action="{{ route('proccesRecoveryPassword') }}" method="POST" class="recoveryPassword">
            <span>Recovery Your Dental Care Account</span>
            <p>Easy Recovery Using Your Personal Information</p>
            @csrf
    
            <div class="nohp-field">
                <input type="text" name="nohp" placeholder="Masukkan Nomer Telepon" class="@error('nohp') is-invalid @enderror" value="{{ old('nohp') }}" autocomplete="off">
                @error('nohp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="email-field">
                <input type="text" name="email" placeholder="Masukkan Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="password-field">
                <input type="password" name="new_password" class="@error('new_password') is-invalid @enderror" placeholder="New Password" autocomplete="new-password">
                @error('new_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="password-confirmation-field">
                <input type="password" name="new_password_confirmation" placeholder="New Password Confirmation" class="@error('new_password_confirmation') is-invalid @enderror" autocomplete="new-password">
                @error('new_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="tombol-register">
                <button type="submit">Verify</button>
            </div>

        </form>
    </main>
    
</body>
</html>