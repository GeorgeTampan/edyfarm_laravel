<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    body{
        background-image: url(aset/bg1.jpg);
        background-size: cover;
    }
    .row{
        margin: 0;
    }
    .a{
        padding: 10%;
    }
    .b{
        background-color: white;
        height: 100vh;
        margin: 0;
        padding: 50px;
        padding-top: 20opx;
        
    }
    .c{
        text-align: center;
        margin-top: 20%;
    }
</style>

<body>
    
    <div class="row">
        <div class="col-7 a">
            <h1>Selamat Datang</h1>
            <h3>Silahkan masukan data anda</h3>
        </div>
        <div class="col-5 b">
            <h3 class="c">form login</h3>
            <form action="{{ route('login.process') }}" method="POST">
            @csrf
            @if(session()->has('pesan'))
            <div class="alert alert-success">
            {{ session()->get('pesan') }}
            </div>
            @endif
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="username" name="username" value="{{ old('username') }}">
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Login</button>
                
                </form>
                
                <h6 class="c">belum punya akun? <a href="{{ route('login.register') }}">registrasi disini</a></h6>
                <a href="{{ route('landing.index') }}">Kembali</a></p>
        </div>
    </div>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>