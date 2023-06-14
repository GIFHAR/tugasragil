

{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>Login</title>
    </head>
    <body>
      <div class="container">
        <div class="row justify-content-md-center"
        style="width: 700px; background-color: white; margin-top: 100px; margin-left: 200px; border-radius: 25px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="col-md-8">
          <h1 class="text-center text-primary" style="margin-top: 60px; margin-bottom: 60px;">Login</h1>
          <form action="{{url('login')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="inputAddress">Email</label>
              <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Masukan Email Anda">
              @error('email')
              <span class="text-red-500">{{ $message }}</span>
          @enderror
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Masukan Password Anda">
              @error('password')
              <span class="text-red-500">{{ $message }}</span>
          @enderror
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <span class="text-center" style="font-size: 14px;"></span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 60px; ">Lanjutkan</button>
          </form>
        </div>
      </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header text-center text-primary mt-4">Login</h1>
                <div class="card-body">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" name="email" id="inputEmail"
                                   placeholder="Masukkan Email Anda">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword"
                                   placeholder="Masukkan Password Anda">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+2CkvhDbvkl/L65l5a5SJQciafcoeKNsG0sTTC+IIa2mAuWr+8mI5n0P0"
        crossorigin="anonymous"></script>
</body>
</html>
