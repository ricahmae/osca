@extends('layouts.admin')
@section('content')

<header>
    <form action="/search" method="get">
   
        <div class="search-wrapper">
        
            <input class="" name="search" type="search" placeholder="Search...">
            <span class="search">
                <button type="submit" class="btn btn-outline-secondary">
                    {{-- <img src="{{asset('img/search.png')}}" alt=""> --}}
                    <span><i class="fas fa-search"></i></span>
                </button>
                <span class="ml-5">User: <!--add mo dito yung role--> {{ $LoggedUserInfo['lastname'] }}, {{ $LoggedUserInfo['firstname'] }}</span>
            </span>
        </div>
    </form>

    <span class="ml-5">{{ $LoggedUserInfo['Lastname'] }}{{ $LoggedUserInfo['Firstname'] }}</span>
</header>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">USERS</li>
    </ol>
</nav>




<div class="dashboard-cards">

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-users"></i></span>
            <div>
                <h5>TOTAL USERS</h5>
                <h4>{{$usercount}}</h4>
            </div>
        </div>
    </div>

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-check"></i></span>
            <div>
                <h5>ACTIVE USERS</h5>
                <h4>{{$useractive}}</h4>
            </div>
        </div>
    
    </div>

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-clock"></i></span>
            <div>
                <h5>INACTIVE USERS</h5>
                <h4>{{$usernotactive}}</h4>
            </div>
        </div>
    </div>

</div>

<hr>

<section class="recent">
    <div class="table-responsive-sm">

        <div class="sort-header">
            <h4 class="h4">LIST OF USERS <button type="button" class="m-2 btn btn-success" data-bs-toggle="modal"  data-bs-target="#modalCreateUser">
            <span>  <img src="{{asset('assets/img/add.png')}}" width="20" height="20"></span>
            Create
        </button></h4>
        </div> 
        
       
        <div class="modal fade" id="modalCreateUser" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Create User</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form class="row g-3" method="POST" enctype="multipart/form-data" action="/admin/adduser">
                            @csrf

                            <div class="form-floating form-group col-6">
                            <label for="Firstname" >First Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder=" " >
                                
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="Lastname" >Last Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder=" ">
                                
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="Middlename">Middle Name</label>
                                <input type="text" class="form-control" id="Middlename" name="Middlename" placeholder=" ">
                              
                            </div>

                          

                            <div class="form-floating form-group col-6">
                            <label for="UserType">User Type<span class="text-danger">*</span></label>
                                <select class="form-select mr-sm-2" id="UserType" name="UserType">
                                    <option selected="">Select User Type </option>
                                    <option value="FIELD OFFICE">FIELD OFFICE</option>
                                    <option value="OSCA">OSCA</option>
                                
                                </select>
                              
                            </div>

                          
                            <div class="form-floating form-group col-6">
                            <label for="contactNumber">Contact Number <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" placeholder=" ">
                               
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="userName">Username(Gmail) <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="EmailAddress" name="EmailAddress" placeholder=" ">
                             
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="password">Password <span class="text-danger">*</span> </label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder=" ">
                              
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modalViewUser" tabindex="-1" data-bs-backdrop="static">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                
                        <div class="modal-body">
                    

                            <div class="col-12">
                                <label>Fullname</label>
                                <input type="text" id="Fullname" class="form-control"  name="Fullname" value="" readonly="true">
                            </div>
                            <div class="col-12">
                                <label>Contact Number</label>
                                <input type="text" id="Contact" class="form-control" name="Contact" value="" readonly="true">
                            </div>
                            <div class="col-12">
                                <label>Email Address</label>
                                <input type="text" id="Email" class="form-control" name="Email" value="" readonly="true">
                            </div>
                            
                            
                        
                        
                        </div>

                    
                

                    </div>
                </div>

        </div>

        <div class="modal fade" id="modalUpdateUser" tabindex="-1" data-bs-backdrop="static">

        <div class="modal-dialog" role="document">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Update User</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form class="row g-3" method="POST" enctype="multipart/form-data" action="/admin/updateuser">
                            @csrf

                            <div class="form-floating form-group col-6">
                            <label for="Firstname" >First Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="UpdateFirstname" name="UpdateFirstname" placeholder=" " >
                                
                            </div>

                           
  
                                <input type="hidden" class="form-control" id="userid" name="userid" placeholder=" " >
                                
                          

                            <div class="form-floating form-group col-6">
                            <label for="Lastname" >Last Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="UpdateLastname" name="UpdateLastname" placeholder=" ">
                                
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="Middlename">Middle Name</label>
                                <input type="text" class="form-control" id="UpdateMiddlename" name="UpdateMiddlename" placeholder=" ">
                              
                            </div>

                          

                            <div class="form-floating form-group col-6">
                            <label for="UserType">User Type<span class="text-danger">*</span></label>
                                <select class="form-select mr-sm-2" id="UpdateUserType" name="UpdateUserType">
                                    <option selected="">Select User Type </option>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="FIELD OFFICE">FIELD OFFICE</option>
                                    <option value="OSCA">OSCA</option>
                                
                                </select>
                              
                            </div>

                          
                            <div class="form-floating form-group col-6">
                            <label for="contactNumber">Contact Number <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="UpdateContactNumber" name="UpdateContactNumber" placeholder=" ">
                               
                            </div>

                            <div class="form-floating form-group col-6">
                            <label for="userName">Username(Gmail) <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="UpdateEmailAddress" name="UpdateEmailAddress" placeholder=" ">
                             
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

       
       
   
        
        <table class="table table-hover" id="search">

            <thead>
                <tr class="table-info">
                    <th>No.</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>lastname</th>
                    <th>middlename</th>
                    <th>userid</th>
                    <th>Action</th>
                   
                  
                </tr>
            </thead>

            <tbody>     
                        @foreach($user as $index => $userinfo)
                            <tr class="striped">
                                <td class="UserId">{{$index + 1}}</td>
                                <td class="Fullname">{{ $userinfo->lastname}} {{ $userinfo->firstname}} {{ $userinfo->middlename}}</td>
                                <td class="UserType">{{ $userinfo->usertype}}</td>
                                <td class="UserStatus">{{ $userinfo->userstatus}}</td>
                                <td class="Contact">{{ $userinfo->contactnumber}}</td>
                                <td class="Email">{{ $userinfo->email}}</td>
                                <td class="Firstname">{{ $userinfo->firstname}}</td>
                                <td class="Lastname">{{ $userinfo->lastname}}</td>
                                <td class="Middlename">{{ $userinfo->middlename}}</td>
                                <td class="uid">{{ $userinfo->userid}}</td>
                                <td>
                                    <a href="" data-bs-toggle="modal" class="btn btn-outline-warning viewuser" data-idUpdate="{{$userinfo->id}}"  data-bs-target="#modalViewUser">View</a> 
                                    
                                    <a href="" data-bs-toggle="modal" class="btn btn-outline-info updateuser" data-idUpdate="{{$userinfo->id}}"  data-bs-target="#modalUpdateUser">Update</a> 
                                    

                                    @if ($userinfo->userstatus=='ACTIVE')
                                        <a  href="{{ url('/admin/userstatusactivate/'.$userinfo->id) }}" class="btn btn-outline-danger"  id='isActiveToggle'>Deactivate</a>
                                    @else
                                        <a  href="{{ url('/admin/userstatusdeactivate/'.$userinfo->id) }}" class="btn btn-outline-success"  id='isActiveToggle'>Activate</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
            </tbody>
        
        </table>

        <script src="{{asset('js/table2excel.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
       

    </div>
</section>

@endsection