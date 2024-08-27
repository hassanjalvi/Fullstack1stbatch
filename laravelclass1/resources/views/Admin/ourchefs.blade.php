@section('title', 'Our chef')
@extends('Admin.layots.main')
@section('main-container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our chefs |@yield('title')</title>
    <link rel="stylesheet" href="Admin/Css/chef.css">
    <link rel="stylesheet" href="Admin/css/foodecart.css">
    <link rel="stylesheet" type="text/css" href='Frontend/css/bootstrap.min.css'>
</head>

<body>

    <section class="admin-panel">
        <h2>Manage Chefs</h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#ff4f00">
            <strong>Success!</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form class="admin-form" action="{{url('/ourchefs')}}" method="post" enctype="multipart/form-data">
        @csrf
            <label for="chef-name1">Chef Name:</label>
            <input type="text" id="chef-name1" placeholder="Enter Chef Name" name="chef_name">
            @if ($errors->has('chef_name'))
            <span class="text-danger" >
                {{$errors->first('chef_name')}}
            </span>
            @endif
          
            <label for="chef-position1">Chef Position:</label>
            <input type="text" id="chef-position1" placeholder="Enter Chef Position" name="designation">
            @if ($errors->has('designation'))
            <span class="text-danger">
                {{$errors->first('designation')}}
            </span>
            @endif
            <label for="chef-image1">Chef Image:</label>
            <input type="file" id="chef-image1" name="chefImg">
            @if ($errors->has('chefImg'))
            <span class="text-danger">
                {{$errors->first('chefImg')}}
            </span>
            @endif
            <label for="chef-instagram1">Instagram:</label>
            <input type="text" id="chef-instagram1" placeholder="Enter Instagram URL" name="instaurl">
            @if ($errors->has('instaurl'))
            <span class="text-danger">
                {{$errors->first('instaurl')}}
            </span>
            @endif
            <label for="chef-facebook1">Facebook:</label>
            <input type="text" id="chef-facebook1" placeholder="Enter Facebook URL" name="facebookurl">
            @if ($errors->has('facebookurl'))
            <span class="text-danger">
                {{$errors->first('facebookurl')}}
            </span>
            @endif
            <label for="chef-twitter1">Twitter:</label>
            <input type="text" id="chef-twitter1" placeholder="Enter Twitter URL" name="twitterurl">
            @if ($errors->has('twitterurl'))
            <span class="text-danger">
                {{$errors->first('twitterurl')}}
            </span>
            @endif
            <button type="submit" name="BtnSubmit">Submit</button>
        </form>

        <!-- Add Manage Chefs button -->
        <section class="manage-chefs-button">
            <a href="{{url('/managechefs')}}" class="btn">Manage Chefs</a>
        </section>
    </section>
</body>
<style>
    /* Custom CSS for the unique Manage Chefs button */
    .admin-panel {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .admin-form {
        width: 100%;
        max-width: 400px;
        /* Adjust maximum width as needed */
        margin-bottom: 20px;
        /* Add margin to the bottom of the form */
    }

    .manage-chefs-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .manage-chefs-button .btn {
        background-color: #FF6347;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
    }

    .manage-chefs-button .btn:hover {
        background-color: #FF5733;
    }
</style>

</html>
@endsection