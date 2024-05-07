{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/forgotPassword.css">
</head>
<body>
  <form method="POST" action="{{ route('forgot-password-act') }}">
          @csrf
    <div class="container d-flex justify-content-center align-items-center ">

      <div class="auth-form-header">
        <img class="gambarDokter py-2 mt-4" src="dentalcare.png"  width="250px">

          <div class="border shadow py-4 rounded mt-5 p-2" style="width: 400px" >
          <div class="form-forgotPassword">
            <h1 class="DentalCareLogin h6 mb-5 d-flex justify-content-center text-opacity-75">Masukkan E-mail kamu yang terdaftar</h1>
            
            <div class="position-relative ">
              
                <input type="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}"  name="email" placeholder="Email " >
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              
            </div>   


            <button class="mt-4 w-100 btn btn-primary btn-block" type="submit" method="POST">Submit</button>

            <p class="mt-5  text-center text-muted">Version 1.0</p>
           
          </form>
        </main>
</body>
</html> --}}
