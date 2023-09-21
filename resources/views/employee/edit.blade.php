<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Department Edit </h3>
                </div>
                   
                 

                            <div class="card-body">
                                <form class="needs-validation" method="POST" action="{{url('employee/'.$employee->id)}}" novalidate enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Name</label>
                                        <input type="text" id="basic-addon-name" class="form-control" placeholder="name" aria-label="Name" value="{{$employee->name}}" name="name" aria-describedby="basic-addon-name"  />
                                        <div class="valid-feedback">Done!</div>
                                    </div>
                                    <div class="col-mb-1">
                                            <label class="form-label" for="basic-default-email1">Email</label>
                                            <input type="email" id="basic-default-email1" class="form-control" placeholder="john.doe@email.com" name="email"  aria-label="john.doe@email.com" value="{{$employee->email}}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter a valid email</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pic">Pic</label>
                                        <input type="file" name="pic" class="form-control" id="pic" aria-describedby="pic">
                                    </div>
                                    

                                    <div class="mb-1">
                                            <label class="form-label" for="basic-default-email1">Department</label>
                                            <select class="form-select select2" name="dep_id" aria-label="Default select example" required>
                                                <option selected disabled value="">Select Department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}" @if($department->id==$employee->dep_id)
                                                    selected @endif>{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                           
                                        <div class="invalid-feedback">Please select Department.</div>
                                        </div>

                                         <div class="col-md-12 text-right mb-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>