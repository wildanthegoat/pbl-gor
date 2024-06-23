<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: yellowgreen;
            --bg: whitesmoke;
        }

        body {  
            background-image: url("{{ asset('img/image.jpg') }}");
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center {
            width: 400px;
            background-color: whitesmoke;
            border-radius: 10px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .center h1 {
            text-align: center;
            color: yellowgreen;
            margin-bottom: 20px;
        }

        .center form {
            padding: 0 20px;
        }

        .txt_field {
            position: relative;
            margin: 30px 0;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: 0.5s;
        }

        .txt_field span::before {
            content: "";
            position: absolute;
            top: 40px;
            left: 0;
            width: 0;
            height: 2px;
            background: yellowgreen;
            transition: 0.5s;
        }

        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label {
            top: -5px;
            color: yellowgreen;
        }

        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before {
            width: 100%;
        }

        .pass {
            margin: -5px 0 20px 5px;
            color: black;
            cursor: pointer;
        }

        .pass:hover {
            text-decoration: underline;
        }

        .button {
            width: 100%;
            height: 50px;
            border: 1px solid yellowgreen;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            color: yellowgreen;
            background: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: var(--primary);
            color: white;
        }

        .signup_link {
            text-align: center;
            font-size: 16px;
            color: #666666;
            margin-top: 30px;
        }

        .alert {
            padding: 10px;
            background-color: red;
            color: white;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        @if ($errors->has('login'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('login') }}
    </div>
@endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Lupa Sandi?</div>
            <button class="button" type="submit">Login</button>
            <div class="signup_link">
                Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
            </div>
        </form>
    </div>
</body>
</html>
