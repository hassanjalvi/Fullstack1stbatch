@section('title', 'dashbord')
@extends('Admin.layots.main')
@section('main-container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')|Admin </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<center style="margin-left: 200px";>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/users.jpg') }}" class="card-img-top" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">Admin can view and manage user accounts on AutoAdvertize plus.</p>
                    <a href="" class="btn btn-danger">View users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/companies.jpg') }}"  class="card-img-top" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">Manage Companies</h5>
                    <p class="card-text">The admin can view and manage company accounts on AutoAdvertize.</p>
                    <a href="" class="btn btn-danger">View comapnies</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/ads.jpg') }}" class="card-img-top" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">Manage Ads</h5>
                    <p class="card-text">The admin can view and manage companies' ads on AutoAdvertize.</p>
                    <a href="" class="btn btn-danger">View Ads</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ asset('images/contactcar.png') }}" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title">Manage contact</h5>
                <p class="card-text">The admin can manage and respond to inquiries from the Contact Us section on AutoAdvertize.</p>
                <a href="" class="btn btn-danger">View contactus</a>
            </div>
        </div>
    </div>
</div>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection