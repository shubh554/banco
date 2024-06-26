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
                                    <th>Product Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($list as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>
                                        @if($row['state'])
                                        @foreach($row['state'] as $state)    
                                            <span class="badge bg-primary">{{$state}}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if($row['city'])
                                        @foreach($row['city'] as $city)    
                                             <span class="badge bg-primary">{{$city}}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if($row['segment'])
                                        @foreach($row['segment'] as $segment)    
                                             <span class="badge bg-primary">{{$segment}}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($row['category'] as $category)    
                                            <span class="badge bg-primary">{{$category}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($row['product_type'])
                                        @foreach($row['product_type'] as $type)    
                                            <span class="badge bg-primary">{{$type}}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
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
                                                            <form action="addAudience" method="post" id="audienceForm">
                                                                @csrf
                                                            <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">Name</label>
                                                            <input class="form-control" type="text" value="" placeholder
                                                            ="Enter audience name" id="example-text-input"
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
                                                            <label for="choices-multiple-remove-button" class="form-label font-size-13 text-muted">Product Type</label>
                                                            <select class="form-control" data-trigger
                                                            name="product_type[]" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                                <option value="Rad">Rad</option>
                                                                <option value="Gsk">Gsk</option>
                                                            </select>
                                                           </div>
                                                        <div class="mb-3">
                                                            <label for="choices-multiple-remove-button" class="form-label font-size-13 text-muted">Categories</label>
                                                            <select class="form-control" data-trigger
                                                            name="category[]" id="choices-multiple-default"
                                                            placeholder="This is a placeholder"   multiple>
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
                                                           <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">SAP_Code (Comma Separated For Multiple Entries)</label>
                                                            <input class="form-control" type="text"  placeholder
                                                            ="Enter SAP_Code (Only valid for Banco Staff)" id="example-text-input"
                                                            name = "SAP_Code"/>
                                                           </div>
                                                          <input type="submit" class = "btn btn-primary greenBg"/>
                                                          <button type="button" class="btn btn-primary waves-effect waves-light" onclick="getCount()">Get Audience Count</button>
                                                          <span class="badge bg-primary-subtle text-primary" id="audience_count"></span>
                                                          <div id="countError" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;margin-top:15px">
                                                        </div>
                                                        </form>
                                                     </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
    <script>
        function getCount()
        {
            document.getElementById('audience_count').innerHTML = 'Please Wait ...';
            document.getElementById('countError').style.display = 'none';
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = $('#audienceForm').serialize();

        $.ajax({
            url: "getAudienceCount",
            method: 'POST',
            data: formData,
            success: function (response) {
                
                document.getElementById('audience_count').innerHTML = response;
              
            },
            error: function (xhr) {
                 if(xhr.status === 422)
                 {
                    let errors = xhr.responseJSON.errors;
                    let errorsHtml = '<ul>';
                    $.each(errors, function (key, value) {
                        errorsHtml += '<li>' + value[0] + '</li>';
                    });
                    errorsHtml += '</ul>';
                    document.getElementById('audience_count').innerHTML = null;
                    document.getElementById('countError').style.display = 'block';
                    document.getElementById('countError').innerHTML = errorsHtml;
                    
                 }
                 if(xhr.status === 421)
                 {
                    let errors = xhr.responseJSON.errors;
                    console.log(errors);
                    document.getElementById('audience_count').innerHTML = null;
                    document.getElementById('countError').style.display = 'block';
                    document.getElementById('countError').innerHTML = errors;
                 }
            }
        });
        }
    </script>

@endsection