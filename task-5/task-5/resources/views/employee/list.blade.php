<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-4">
        <h2 class="text-white text-center">Employee Table</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('employees.create')}}" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
                <div class="col-md-10 mt-4">
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                </div>
            @endif
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Employee List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @if ($employees->isNotEmpty())
                            @foreach ($employees as $employee )
                               <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>
                                    <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-dark">Edit</a>
                                    <a href="#" onclick="deleteEmployee({{ $employee->id }})" class="btn btn-danger">Delete</a>
                                    <form id="delete-employee-form{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                               </tr>
                            @endforeach
                                
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    function deleteEmployee(id){
        if(confirm('Are yor sure! You want to delete employee')){
            document.getElementById("delete-employee-form"+id).submit();
        }
    }
</script>
