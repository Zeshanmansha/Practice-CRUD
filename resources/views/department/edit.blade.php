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
                                <form class="needs-validation" method="POST" action="{{url('department/'.$department->id)}}" novalidate enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                        <div class="form-group">
                            <label for="name">Department Name</label>
                            <input type="text" name="name"  value="{{$department->name}}" id="name" class="form-control" required>
                            <div class="invalid-feedback">
                                Please Edit department name.
                            </div>
                        </div>
                                    
                                    
                                         <div class="col-md-12 text-right mb-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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