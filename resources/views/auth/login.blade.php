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
<body >
  <form method="POST" action="{{ route('login.submit') }}">
          @csrf

    <div class="container d-flex justify-content-center align-items-center ">


      {{-- <div>
        @if (session()->has('message'))
          {{ session()->get('message') }}
        @endif
      </div> --}}


      <div class="auth-form-header">
        <img class="gambarDokter py-2 mt-4" src="dentalcare.png"  width="250px">

          <div class="border shadow p-2 rounded mt-4" style="width: 400px" >
          <div class="form-signin">
            <div>
              @if (session()->has('message'))
              {{ session()->get('message') }}
              @endif
            </div>
            <h1 class="DentalCareLogin h4 mb-3 d-flex justify-content-center text-opacity-75">Login to DentalCare</h1>
            <div class="position-relative">
              <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" required value="{{ old('username') }}"  name="username" placeholder="Username " >

                @error('username')
                <div class="invalid-feedback username-error">
                    {{ $message }}
                </div>
                @enderror
              
            </div>   
            <div class="position-relative mt-2 py-4 input-wrapper">
            <label for="password">Password</label>
              <input type="password" class="form-control small-placeholder @error('password') is-invalid @enderror" required value="{{ old('password') }}" name="password" id="password" placeholder="Password">
              <div class="gambarMata"><img class="Mata" src="eyeCloseLogin.png" id="eyeicon"></div>
              @error('password')
              <div class="invalid-feedback password-error">
                  {{ $message }}
              </div>
              @enderror

              <a class="label-link position-absolute forgotPassword" href="{{ route('forgot-password')}}">Forgot passsword?</a>

              <!-- <a class="label-link position-absolute top-0 forgotPassword" id="forgot-password" href="{{ route('recoveryPassword') }}">Forgot passsword?</a> -->

            </div>
            
            <button class="mt-4 w-100 btn btn-block btn-primary" type="submit" method="POST">Login</button>
            <div class="question">
              <small class="question">Belum memiliki akun? <a href="/register">Daftar disini</a></small>
          </div>
            <p class="mt-4  text-center text-muted">Version 1.0</p>
           
          </form>
        </main>
        <script>
          let eyeicon = document.getElementById("eyeicon");
          let password = document.getElementById("password");
        
          eyeicon.onclick = function(){
            if(password.type == "password"){
              password.type = "text";
              eyeicon.src ="eyeOpenLogin.png"
            } else{
              password.type = "password";
              eyeicon.src = "eyeCloseLogin.png"
            }
          }
        </script>
</body>
</html>
