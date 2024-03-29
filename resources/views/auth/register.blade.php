<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="/css/pasien/register-pasien.css">
</head>
<body>

    @include('pasien.layout.navbarPasien')
<br>
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div class="name">
                <label for="name">UserName</label>
                <input type="text" name="name" placeholder="UserName" required>
            </div>
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div>
                <label for="nohp">No HP</label>
                <input type="number" name="nohp" placeholder="Masukkan No HP" required>
            </div>
            <!-- <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </div> -->
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
            </div>
            <!-- <div>
                <label for="photo">Foto Profil</label>
                <input type="file" name="photo">
            </div> -->
            <button type="submit">Daftar</button>
        </form>

        <svg>       
            <image xlink:href="/wave.svg">    
        </svg>

    <div class="box">

        <div class="content">
                
                <form method="POST" action="{{ route('register.submit') }}">
                    <h1>Form Register</h1>
                    @csrf
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div>
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" placeholder="Fullname" class="@error('fullname') is-invalid @enderror" required value="{{ old('fullname') }}">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div>
                        <label for="nohp">Nomer HP</label>
                        <input type="text" name="nohp" placeholder="Masukkan No HP" class="@error('nohp') is-invalid @enderror" required value="{{ old('nohp') }}">
                        @error('nohp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" placeholder="Password" class="@error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                    </div>
        
                    <!-- <div>
                        <label for="photo">Foto Profil</label>
                        <input type="file" name="photo">
                    </div> -->
                    
                    <button type="submit">Daftar</button>
                    <div class="question">
                        <small class="question"> Already registered? <a href="http:/login">Login</a></small>
                    </div>
                </form>
        </div>
        <div>
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" placeholder="Full Name" required>
        </div>
        <div>
            <label for="nohp">No HP</label>
            <input type="text" name="nohp" placeholder="Masukkan No HP" required>
        </div>
        <!-- <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div> -->
        <div>
            <label for="password"></label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <label for="password_confirmation"></label>
            <input type="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
        </div>
        <!-- <div>
            <label for="photo">Foto Profil</label>
            <input type="file" name="photo">
        </div> -->
        <button type="submit">Daftar</button>
    </form>
    </div>






        {{-- <svg width="90" height="90">       
            <image xlink:href="/wave3.svg" width="90" height="90"/>    
        </svg>
    
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
    
                <div style="margin-bottom: 20px">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div style="margin-bottom: 20px">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" placeholder="Full Name" class="@error('fullname') is-invalid @enderror" required value="{{ old('fullname') }}">
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

    
                <div style="margin-bottom: 20px">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" placeholder="Masukkan No HP" class="@error('nohp') is-invalid @enderror" required value="{{ old('nohp') }}">
                    @error('nohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div style="margin-bottom: 20px">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div style="margin-bottom: 20px">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" placeholder="Password" class="@error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
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
                
                <button type="submit">Daftar</button>
                <div class="question">
                    <small class="question"> Already registered? <a href="http:/login">Login</a></small>
                </div>
            </form> --}}
    

</body>
</html>