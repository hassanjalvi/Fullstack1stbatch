@extends('Admin.layots.main')

@section('title', 'Manage Chefs')

@section('main-container')
<main>
    <section id="manage-chefs">
        <div class="container">
            <h2>Manage Chefs</h2>
            @if(session('success'))
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

            <div class="chefs-list">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>    <link rel="stylesheet" 
                    </thead>
                    <tbody>
                        @foreach ($chefs as $chef)
                        <tr>
                            <td>
                                <img src="{{ asset($chef->imgpath) }}" alt="{{ $chef->name }}" style="width: 100px; height: auto;">
                            </td>
                            <td>{{ $chef->name }}</td>
                            <td>{{ $chef->designation }}</td>
                            <td>
                                <button class="btn btn-primary edit-btn" onclick="toggleEditForm({{ $chef->id }})">
                                    <i class="fas fa-edit"></i>
                                </button>
                                {{-- <form method="post" action="{{ route('chef.destroy') }}" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="chef_id" value="{{ $chef->id }}">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this offer?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form> --}}
                            </td>
                        </tr>
                        {{-- <tr id="edit-form-{{ $chef->id }}" class="edit-form" style="display: none;">
                            <td colspan="4"> --}}
                                
                                {{-- <form method="post" action="{{ route('chef.update', ['chef' => $chef->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $chef->name) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation:</label>
                                        <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation', $chef->designation) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="imgpath" class="form-label">Image:</label>
                                        <input type="file" class="form-control" id="imgpath" name="imgpath">
                                        @if ($chef->imgpath)
                                        <img src="{{ asset($chef->imgpath) }}" alt="{{ $chef->name }}" style="max-width: 200px; height: auto;">
                                        @else
                                        <p>No image found</p>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button> --}}
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>



<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
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

    .btn {
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #3ad82e;
        color: #fff;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .edit-form {
        background-color: #f1f1f1;
        padding: 15px;
        border-top: 1px solid #ddd;
    }

    .edit-form label {
        font-weight: bold;
    }

    .edit-form input[type="text"] {
        width: calc(100% - 24px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>



<script>
    function toggleEditForm(chefId) {
        var editForm = document.getElementById('edit-form-' + chefId);
        if (editForm.style.display === 'none' || editForm.style.display === '') {
            editForm.style.display = 'table-row';
        } else {
            editForm.style.display = 'none';
        }
    }
</script>
@endsection
//mangechef