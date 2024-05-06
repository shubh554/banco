@extends('layout')
@section('content')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Manage Users</h4>
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                    
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert" style="width:600px">
                    @foreach ($errors->all() as $error)
                    {{$error}}<br>
                    @endforeach  
                    </div>
                    @endif 
                    
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                   @endif

                 
                                
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="display:flex;justify-content:space-between">
                    <div>   
                    <h4 class="card-title">Users List</h4>
                        <p class="card-title-desc">Welcome to our CRM access management! Easily view, edit, and remove user permissions 
                            to ensure data security and efficiency.
                        </p>
                      </div>
                        <div>
                           <a href="#" class="btn btn-primary greenBg" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus me-1"></i> Add New</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Acccess Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                                @foreach($users as $row)
                            <tr>
                                <td>{{$row['name']}}</td>
                                <td>{{$row['designation']}}</td>
                                <td>{{$row['email']}}</td>
                                <td>{{$row['roles'][0]['name']}}</td>
                                <td><button type="button" class="btn btn-soft-primary waves-effect waves-light"data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="fas fa-eye" ></i></button>
                                <button type="button" class="btn btn-soft-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>
                                <button onclick="window.location=`delUser/{{$row['id']}}`"  type="button" class="btn btn-soft-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bx bx-block font-size-16 align-middle"></i></button>
                            </td>
                            </tr>
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                </div>
                <!-- end cardaa -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<!-- modal -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add New User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="addUser" method="post">
                                                            @csrf
                                                        <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Name</label>
                                                        <input class="form-control" type="text" value="" placeholder
                                                        ="Enter user's name" id="example-text-input"
                                                        required data-pristine-required-message="Please Enter a name"
                                                        name = "name"
                                                        >
                                                       </div>

                                                         
                                                       <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Designation</label>
                                                        <input class="form-control" type="text" value="" placeholder
                                                        ="Enter user's designation" id="example-text-input" name="designation" required>
                                                       </div>

                                                       <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input name="email" placeholder ="Enter user's email" class="form-control" type="email" value="" id="example-email-input" required>
                                                    </div>

                                                       <div class="mb-3">
                                                        <label class="form-label">Select Role</label>
                                                        <select class="form-select" name="role" Required>
                                                        @foreach($roles as $item)
                                                            <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label">Password</label>
                                                        <input role="password" name="password" placeholder="Enter user's password" class="form-control" type="password" value="" id="example-password-input" Required
                                                        pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" 
                                                        title="Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character."
                                                        >
                                                    </div>
                                                    <input type="submit" class = "btn btn-primary greenBg"/>
                                                    </form>
                                                 </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

@endsection