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
                <span class="ml-5">User: <!--add mo dito yung role--> {{ $LoggedUserInfo['Lastname'] }}, {{ $LoggedUserInfo['Firstname'] }}</span>
            </span>
        </div>
    </form>

    <span class="ml-5">{{ $LoggedUserInfo['Lastname'] }}{{ $LoggedUserInfo['Firstname'] }}</span>
</header>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">FIELD OFFICES</li>
    </ol>
</nav>




<div class="dashboard-cards">

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-users"></i></span>
            <div>
                <h5>APPLICANTS</h5>
                <h4></h4>
            </div>
        </div>
    </div>

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-check"></i></span>
            <div>
                <h5>APPROVED</h5>
                <h4></h4>
            </div>
        </div>
    
    </div>

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-clock"></i></span>
            <div>
                <h5>PENDING</h5>
                <h4></h4>
            </div>
        </div>
    </div>

</div>

<hr>

<section class="recent">
    <div class="table-responsive-sm">

        <div class="sort-header">
            <h4 class="h4">Sort and Export Options</h4>
        </div> 
        
        <!--Filter and export functions-->
        <form action="/search/date" method="get">
            <div class="row align-items-center float-left ml-1">

                <div class="col-auto my-2">
                    <input type="date" class="form-control" id="" name="date">
                </div>
        
                <div class="col-auto my-2">
                    <input type="text" class="form-control" id="" placeholder="Location" name="location">
                </div>
        
                <div class="col-auto my-2">
                    <button type="submit" class="btn btn-outline-secondary">
                        <span><i class="fas fa-sync-alt"></i></span>
                        Sort
                    </button>
                </div>

                <div class="col-auto my-2">
                    <form action="/search/refresh" method="get">
                        <button type="submit" class="btn btn-outline-secondary">
                            <span><i class="fas fa-sync-alt"></i></span>
                            Refresh
                        </button>
                    </form>
                </div>

            </div>
        </form>

        <div class="row align-items-center float-right mr-1">

            <div class="col-auto my-2">
                <button id="downloadexcel" class="btn btn-outline-secondary">
                    <span><i class="fas fa-file-download"></i></span>
                    Export Table
                </button>
            </div>

            <div class="col-auto my-2">
                <a href="{{'/download'}}" class="btn btn-outline-secondary">
                    <span><i class="fas fa-file-download"></i></span>
                    Export all
                </a>
            </div>

        </div>
    
        
        <table class="table table-hover table-sm" id="search">

            <thead>
                <tr class="table-info">
                    <th>Control No.</th>
                    <th>Name</th>
                    <th>Date Requested</th>
                    <th>Status</th>
                    <th>Reviewed By</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>     
          
            </tbody>
        
        </table>

        <script src="{{asset('js/table2excel.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
        <script>
            document.getElementById('downloadexcel').addEventListener('click',function()
            {
                var table2excel = new Table2Excel();
                table2excel.export(document.querySelectorAll("#search"));
            });
          
        </script>

    </div>
</section>

@endsection