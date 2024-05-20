@extends('layout')
@section('content')
<style>
     textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid lightgray;
        border-radius: 4px;
        box-sizing: border-box; 
        resize: vertical;
    }
</style>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
    
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Manage Audience</h4>
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
                                <h4 class="card-title">Audience List</h4>
                                    <p class="card-title-desc">Welcome to the Audience Management section! Here, you have the capability to create targeted audiences using filters,
                                         allowing you to tailor your messages and communications effectively
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
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Segment</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($list as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>
                                        @foreach($row['state'] as $state)    
                                            <span class="badge bg-primary">{{$state}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($row['city'] as $city)    
                                             <span class="badge bg-primary">{{$city}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($row['segment'] as $segment)    
                                             <span class="badge bg-primary">{{$segment}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($row['category'] as $category)    
                                            <span class="badge bg-primary">{{$category}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-soft-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>
                                    <button onclick="window.location=`delAudience/{{$row['id']}}`"  type="button" class="btn btn-soft-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bx bx-block font-size-16 align-middle"></i></button>
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
                                                                <h5 class="modal-title" id="myModalLabel">Add New Audience</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="addAudience" method="post">
                                                                @csrf
                                                            <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">Name</label>
                                                            <input class="form-control" type="text" value="" placeholder
                                                            ="Enter user's name" id="example-text-input"
                                                            required data-pristine-required-message="Please Enter Audience Name"
                                                            name = "name"
                                                            >
                                                           </div>
                                                           <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">State</label>
                                                            <select class="form-control" data-trigger name="state[]"
                                                                id="choices-multiple-remove-button" multiple
                                                            >
                                                            @foreach($state_list as $item)
                                                            <option value = "{{$item}}">{{$item}}</option>
                                                            @endforeach
                                                           </select>
                                                           </div>
                                                           <div class="mb-3">
                                                            <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Cities</label>
                                                            <select class="form-control" data-trigger
                                                                name="city[]" id="choices-multiple-default"
                                                                placeholder="This is a placeholder" multiple>
                                                                @foreach($city_list as $item)
                                                                <option value = "{{$item}}">{{$item}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="choices-multiple-remove-button" class="form-label font-size-13 text-muted">Categories</label>
                                                            <select class="form-control" data-trigger
                                                            name="category[]" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                                <option value="Premium_Dealer_Contact">Premium Dealer</option>
                                                                <option value="Dealer_Contact">Dealers</option>
                                                                <option value="Distributor_Contact">Distributors</option>
                                                                <option value="null">Retailers</option>
                                                                <option value="Mechanic_Contact">Mechanics</option>
                                                                <option value="null">Fleets</option>
                                                                <option value="Banco_Staff_Contact">Banco Staff</option>
                                                            </select>
                                                           </div>
                                                        <div class="mb-3">
                                                            <label for="choices-multiple-remove-button" class="form-label font-size-13 text-muted">Segments</label>
                                                            <select class="form-control" data-trigger
                                                            name="segment[]" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                                <option value="2-Wheeler">Two Wheeler</option>
                                                                <option value="Car/MUV">Car/MUV</option>
                                                                <option value="LCV/HCV">LCV/HCV</option>
                                                                <option value="Industrial">Industrial</option>
                                                                <option value="Genset">Genset</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                             </select>
                                                           </div>
                                                          <input type="submit" class = "btn btn-primary greenBg"/>
                                                        </form>
                                                     </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
    
@endsection