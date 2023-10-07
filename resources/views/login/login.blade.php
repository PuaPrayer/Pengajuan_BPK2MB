<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="body-container">
    <div class="container" id="container">
        <div>
        <div class="form-container sign-up-container">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <input name="name" type="text" placeholder="Name" required/>
                @error('name')
                    <span class="text-danger mt-1">{{ $message }}</span>
                @enderror
                <input name="email" type="email" placeholder="Email" required/>
                @error('email')
                    <span class="text-danger mt-1">{{ $message }}</span>
                @enderror
                <input name="password" type="password" placeholder="Password" required/>
                @error('password')
                    <span class="text-danger mt-1">{{ $message }}</span>
                @enderror
                <input name="password_confirmation" type="password" placeholder="Confirm Password" required/>
                <button type="submit" class="btn-grad">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <h1>Sign In</h1>
                <input name="email" type="email" placeholder="Email" />
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <input name="password" type="password" placeholder="Password" />
                @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn-grad">Login</button>
            </form>
        </div>
        </div>

        <div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        Silahkan Buat Akun !
                    </p>
                    <div class="btn-grad" id="signIn">Login</div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang</h1>
                    <p> Ingin Studi Lanjut ? </p>
                    <div class="btn-grad" id="signUp">Sign Up</div>
                </div>
            </div>
        </div>
        </div>
    </div>

    </div>
    @if(Session::has('register-success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ Session::get('register-success') }}',
        });
    </script>
    @endif
    @if(Session::has('logout-success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logout Berhasil',
            text: '{{ Session::get('logout-success') }}',
        });
    </script>
    @endif
    @if($errors->has('login'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Invalid email or password',
        });
    </script>
    @endif
    <script type="text/javascript" src="{{ asset('js/login.js')}}"></script>
</body>
</html>