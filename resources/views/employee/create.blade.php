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
          <h3 class="card-title">Employee Create</h3>
        </div>
        <div class="card-body">
	<form class="needs-validation" method="POST" action="{{route('employee.store')}}" enctype="multipart/form-data">
		@csrf
		 <div class="form-group">
    <label for="name">Name</label>
    <input type="text"name="name"  class="form-control" id="name" aria-describedby="name">
  </div>
  <div class="form-group">
    <label for="email">Email </label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" >
    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
  </div>
     <div class="form-group">
    <label for="pic">Pic</label>
    <input type="file"  name="pic"  class="form-control" id="pic" aria-describedby="pic">
  </div>
  <div  class="col-mb-1">
  				<label class="form-label" for="basic-default-email1">Department</label>
     			 <select class="form-control" name="dep_id" aria-label="Default select example" required>
				  <option selected  value="">Select Department</option>
				  @foreach ($departments as $department)
				      <option value="{{ $department->id }}">{{ $department->name }}</option>
				  @endforeach
                 </select>
  </div>
  <br>
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