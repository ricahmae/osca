@extends('layouts.admin')

@section('content')

    <header>
      
        <form action="/search" method="get">
            @csrf
            <div class="search-wrapper">
            
                <input class="" name="search" type="search" placeholder="Search...">
                <span class="search">
                    <button type="submit" class="btn btn-outline-secondary">
                        {{-- <img src="{{asset('img/search.png')}}" alt=""> --}}
                        <span><i class="fas fa-search"></i></span>
                    </button>
                    <span class="ml-5">User: <!--add mo dito yung role-->MAQUE, RICAH MAE</span>
                </span>
            </div>
          
        </form>


    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="dashboard-cards">
      
        <div class="card-single">
            <div class="card-body">
                <span><i class="fas fa-users"></i></span>
                <div >
                    
                    <h5>APPLICANTS</h5>
                    <h4></h4>
                </div>
            </div>
            <div class="card-footer">
                <a href="/admin/patient/">View</a>
            </div>
        </div>

    </div>

    <section class="recent">

        <h3>Recent Client Updates</h3>

        <div class="recent-table-card">
            <div class="table-responsive">

                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Control No.</th>
                            <th>Name</th>
                            <th>Date Requested</th>
                            <th>Status</th>
                            <th>Reviewed By</th>
                        </tr>
                    </thead>

                    <tbody>     
                   
                    </tbody>
                </table>

            </div>
        </div>
      
    </section>
    
@endsection