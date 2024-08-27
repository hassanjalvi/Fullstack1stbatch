@section('title', 'User Data')
@extends('Admin.layots.main')

@section('main-container')
    <div class="container mt-5" >
        <h1>User Data</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="button-container">
            <button id="addUserButton" class="green-outline-button">Add Users</button>
        </div>
        <div id="userFormContainer" style="display:none;">
            <section class="sign-up-area">
                <span class="contact-box-shape"></span>
                
            
                <div class="sign-up-section-title">
                    <h4>REGISTER</h4>
                    <span>Create Your Account Now!</span>
                </div>
            
                <div class="sign-up-inner">
                    <div class="sign-up-form">
                        <form action="/register/user" method="POST">
                            @csrf
                            <p class="sign-up-single-input">
                                <label> NAME</label>
                                <input type="text" name="name" >
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="sign-up-single-input">
                                <label>EMAIL ADDRESS</label>
                                <input type="text" name="email" >
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </p>
            
                            <p class="sign-up-single-input">
                                <label>PASSWORD</label>
                                <input type="password" name="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </p>
            
                            <p class="sign-up-single-input">
                                <label>CONFIRM PASSWORD</label>
                                <input type="password" name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </p>
            
                            <p class="sign-up-single-button" style="margin-right:200px;">
                                <input type="submit" value="CREATE MY ACCOUNT">
                            </p>
                            <br><br><br>
                            <p class="sign-up-single-checkbox">
                                <label>
                                    <input type="checkbox">
                                    Sign up to get our weekly updates & offers. We do not spam.
                                </label>
                                Already have an account? <a href="{{ url('/signin') }}">Sign In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
       <table class="table table-striped mt-5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <!-- Delete Form -->
                <form method="post" action="{{ url('/userdelete') }}"> 
                    @csrf
                     <input type="hidden" name="user_id" value="{{ $user->id }}">
                     <button type="submit" class="btn btn-danger"
                         onclick="return confirm('Are you sure you want to delete this user?')">
                         <i class="fas fa-trash-alt"></i>
                     </button>
                 </form>

                <!-- Edit Form -->
              
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

        
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#addUserButton').click(function() {
            $('#userFormContainer').toggle();
        });
    });
</script>


<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #3ad82e;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #3ad82e;
        color: #fff;
    }

    .table td {
        background-color: #f8f9fa;
    }

    .btn-danger {
        background-color: #3ad82e;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #3ad82e;
    }

    .button-container {
        text-align: center;
    }

    .green-outline-button {
        margin-bottom: 10px;
        margin-left: 620px;
        background-color: transparent;
        border: 2px solid #3ad82e;
        color: #3ad82e;
        padding: 10px 10px;
        text-align: center;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .green-outline-button:hover {
        background-color: #3ad82e;
        color: white;
    }

    @media screen and (max-width: 600px) {
        .container {
            width: 100%;
            padding: 0 10px;
        }
    }

    .sign-up-area {
        background-color: #f8f9fa;
        padding: 30px;
        margin-top: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .sign-up-section-title h4 {
        color: #3ad82e;
    }

    .sign-up-form {
        margin-top: 20px;
    }

    .sign-up-single-input label {
        color: #3ad82e;
    }

    .sign-up-single-input input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .sign-up-single-button input[type="submit"] {
        background-color: #3ad82e;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .sign-up-single-button input[type="submit"]:hover {
        background-color: #2e9c25;
    }

    .sign-up-single-checkbox label {
        color: #333;
    }

    .sign-up-single-checkbox a {
        color: #3ad82e;
    }
</style>
