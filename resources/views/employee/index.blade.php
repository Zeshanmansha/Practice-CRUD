<x-app-layout>
    <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

        <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group breadcrumb-right d-flex justify-content-between">
           <a href="{{ route('employee.create')}}" class="btn btn-primary mb-3">Add Employee</a>
    <a href="{{ route('department.index')}}" class="btn btn-primary mb-3"> Department</a>
    
</div>
                <div class="card">
                    <div class="card-body">
                        <center>
                        <table id="tables_id" class="table" border="solid white" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Pic</th>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td >
                                            <a href="{{ asset('images/' . $employee->pic) }}" target="_blank">
                                    <img src="{{ asset('images/' . $employee->pic) }}" alt="{{ $employee->name }} Pic" style="max-width: 50px;">
                                    </a>
                                    </td>
                                        <td>{{ $employee->department->name }}</td>

                                        <td>
                                            <div class="d-flex justify-content-center">
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('employee.edit', $employee->id) }}">Edit<i class="ri-edit-box-line"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm(' Are You Sure You Want To Delete?')" class="btn btn-danger"><i class="ri-delete-bin-5-line"></i></button>
                        </form>
                    </div>
        </td>
                                        @endforeach
                                    </tbody>    
                                    
                                </table>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
</x-app-layout>
