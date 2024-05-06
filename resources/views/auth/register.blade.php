<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    @include('pasien.layout.navbarPasien')

    <main class="register-form">
        <form class="register-pasien" method="POST" action="{{ route('register.submit') }}">
            <span>Create Your Dental Care Account</span>
            <p>One Dental Care account is all you need to acces all Dental Care services.</p>
            @csrf
            <div class="username-field">
                <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror"  value="{{ old('username') }}" autocomplete="off">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="username">This will be your account Dental Care.</label>
            </div>
    
            <div class="fullname-field">
                <input type="text" name="fullname" placeholder="Fullname" class="@error('fullname') is-invalid @enderror"  value="{{ old('fullname') }}" autocomplete="off">
                @error('fullname')
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
                <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password" >
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
    
            <!-- <div>
                <label for="photo">Foto Profil</label>
                <input type="file" name="photo">
            </div> -->
            
            <div class="tombol-register">
                <button type="submit">Daftar</button>
            </div>
            <div class="question">
                <small> Already registered? <a href="{{ route('/login') }}">Login</a></small>
            </div>
            <div class="question">
                <small> Forgot Password? <a href="{{ route('recoveryPassword') }}">Recovery Now</a></small>
            </div>
        </form>
    </main>
</body>
</html>