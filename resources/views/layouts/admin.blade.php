<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!--Bootstrap css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!--font-awesome-icons-->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

        <!--Custom Css-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>

      
    </head>

    <body>

        {{--navbar --}}
        {{-- @include('includes.navbar') --}}

        {{-- sidebar --}}
        @include('includes.admin.sidebar')

        {{-- main contents --}}
        <div class="main-content">
           
            <main>
                @yield('content')
            </main>
            
        </div>

        {{-- s --}}


        <!--js bootstrap-->
        <script src="{{asset('js/jquery-slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!--Custom js-->
        {{-- <script src="{{asset('js/main.js')}}"></script> --}}
        <script src={{asset('js/jquery-3.5.1.js')}}></script>
        <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

       

        <script>
          $(document).ready(function() {
            var t =$('#search').DataTable( {
             "columnDefs": [
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 5],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 7 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 8 ],
                "visible": false,
                "searchable": true
            },
            
            {
                "targets": [ 9 ],
                "visible": false
            }
        ]
    } );


                $(document).on('click', '.viewuser', function() {
                    
                    var _this= $(this).parents('tr');
                    
                    $('#Fullname').val(_this.find('.Fullname').text());
    
                 
                     var currentRow = $(this).closest("tr");
                     var contactnumber = t.row(currentRow).data()[4];
                     var emailaddress = t.row(currentRow).data()[5];
                     $('#Contact').val(contactnumber);
                     $('#Email').val(emailaddress);
                     
                });


                
                $(document).on('click', '.updateuser', function() {
                    
                    var _this= $(this).parents('tr');
                    
                    var usertype1 = $(this).children('option:selected').data('usertype');
    
                 
                     var currentRow = $(this).closest("tr");
                     var usertype = t.row(currentRow).data()[2];
                     var contactnumber = t.row(currentRow).data()[4];
                     var emailaddress = t.row(currentRow).data()[5];
                     var firstname = t.row(currentRow).data()[6];
                     var lastname = t.row(currentRow).data()[7];
                     var middlename = t.row(currentRow).data()[8];
                     var userid = t.row(currentRow).data()[9];
                     $('#UpdateContactNumber').val(contactnumber);
                     $('#UpdateEmailAddress').val(emailaddress);
                     $('#UpdateFirstname').val(firstname);
                     $('#UpdateLastname').val(lastname);
                     $('#UpdateMiddlename').val(middlename);
                     $('#UpdateUserType').val(usertype);
                     $('#userid').val(userid);
                    console.log(usertype);
                     
                });
} );

    


        </script>


   
    </body>

</html>