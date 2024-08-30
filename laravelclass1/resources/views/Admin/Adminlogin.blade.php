<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminLogin</title>
    <style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        input,
        button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .form-outline {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-outline input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-outline input:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-label {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #fff;
            padding: 0 5px;
            font-size: 0.8rem;
            color: #495057;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
            padding: 5px 10px;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .btn-link:hover {
            color: #0056b3;
        }

        .text-center {
            text-align: center;
            margin-top: 1.5rem;
        }

        .text-center p {
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .btn-floating {
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 0.5rem;
            transition: background-color 0.3s;
        }

        .btn-floating:hover {
            background-color: #0056b3;
        }

        .fab {
            font-size: 1.2rem;
        }

        /* Responsive design */
        @media (max-width: 480px) {
            form {
                padding: 1.5rem;
            }

            .btn-link,
            .fab {
                font-size: 1rem;
            }

            .btn-primary {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            <p>{{ session()->get('error') }}</p>
        </div>
    @endif
    <form action="{{ url('/Admin/login') }}" method="POST">
        @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" id="form2Example1" class="form-control" name="email" />
            @if ($errors->has('email'))
                <span class="text-danger">
                    {{ $errors->first('email') }}
                </span>
            @endif
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" name ="password" class="form-control" />
            @if ($errors->has('password"'))
                <span class="text-danger">
                    {{ $errors->first('password"') }}
                </span>
            @endif
        </div>

        <p class="sign-up-single-button"  >
            <input type="submit" value="Sign in" style="background:#0056b3">
        </p>

       



    </form>
</body>

</html>
