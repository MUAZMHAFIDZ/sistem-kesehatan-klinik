<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DentalCare Klinik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  @include('pasien.layout.navbarPasien')
  <form method="POST" action="{{ route('login.submit') }}">
          @csrf
          
    <div class="container d-flex justify-content-center align-items-center ">


      {{-- <div>
        @if (session()->has('message'))
          {{ session()->get('message') }}
        @endif
      </div> --}}


      <div class="auth-form-header mt-2">
        <img class="gambarDokter mt-5" src="dentalcare.png"  width="250px">

          <div class="border shadow p-2 rounded mt-2 " style="width: 400px" >
          <div class="form-signin ">
            <div>
              @if (session()->has('message'))
              {{ session()->get('message') }}
              @endif
            </div>
            <h1 class="DentalCareLogin h4 mb-5 d-flex justify-content-center text-opacity-75">Login to DentalCare</h1>
            <div class="position-relative">
              
                <input type="text" class="form-control small-placeholder @error('username') is-invalid @enderror" required value="{{ old('username') }}"  name="username" placeholder="Username " >

                @error('username')
                <div class="invalid-feedback username-error">
                    {{ $message }}
                </div>
                @enderror
              
            </div>   
            <div class="position-relative mt-2 py-4 input-wrapper">
            
              <input type="password" class="form-control small-placeholder @error('password') is-invalid @enderror" required value="{{ old('password') }}" name="password" id="password" placeholder="Password">
            
              @error('password')
              <div class="invalid-feedback password-error">
                  {{ $message }}
              </div>
              @enderror


              <a class="label-link position-absolute forgotPassword" id="forgot-password" href="{{ route('recoveryPassword') }}">Forgot passsword?</a> 


            </div>
            
            <button class="mt-4 w-100 btn btn-block btn-primary" type="submit" method="POST">Login</button>
            <div class="question">
              <small class="question">Belum memiliki akun? <a href="/register">Daftar disini</a></small>

          </div>
            <p class="mt-4  text-center text-muted">Version 1.0</p>
           
          </form>
        </main>
   
</body>
</html>
