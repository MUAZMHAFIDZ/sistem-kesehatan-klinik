@extends('layout.navbarPasien')

@section('content')
        
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
@endsection