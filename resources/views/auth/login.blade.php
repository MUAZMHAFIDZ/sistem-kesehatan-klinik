<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare Klinik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .boddy{
    background-color: rgb(255, 255, 255);
}
.form-signin {
    width: 100%;
    max-width: 400px;
    padding: 25px;
    margin: auto;
    margin-top: 50px;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
    
  }
  
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    background-color: white;
  }
  
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: white;
  }
  .gambarDokter {
    margin-left:13%;
    margin-right: 0;
    margin-bottom: 20px;
  }

  
    </style>
</head>
<body class="boddy">
    <main class="form-signin">
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <img class="gambarDokter" src="dentalcare.png"  width="70%" height="70%" >
            <h1 class="h3 mb-3 fw-normal">Login </h1>
        
            <div class="form-floating">
                <input type="text" class="form-control"  name="username" placeholder="UserName">
                <label for="username">Username</label>
            </div>   
            <div class="form-floating">
              <input type="password" class="form-control"  name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit" method="POST">Masuk</button>
            <p class="mt-4  text-center text-muted">Version 1.0</p>
            <a href="" class="bi bi-box-arrow-left position-absolute" style="top: 10px; left: 10px;"></a>
          </form>
        </main>
</body>
</html>
