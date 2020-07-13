<html lang="en">
<head>

<title>Laravel</title>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
      <body>
         <div class="container mt-4">
            <h2 class="text-center mt-2 mb-3 alert alert-success">Customers List</h2>
            <table class="table table-bordered" id="laravel-datatable">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
     $(document).ready( function () {
      $('#laravel-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('customers') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' }
                 ]
       });
     });
   </script>
  </body>
</html>