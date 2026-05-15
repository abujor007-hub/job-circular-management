<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <title>Edit Page</title>
</head>
<body style="background: linear-gradient(135deg, #667eea, #764ba2); min-height:100vh;">
    <div class="container shadow p-2 mt-5 bg-primary text-white" style="width: 550px; height: auto; border: 2px solid black; background: linear-gradient(135deg, #4b2c5e, #8e44ad); min-height: 100vh; " id="box">
            <head>
                <h1 class="text-center fw-bold " >Edit Job Circular</h1>
            </head>

          <form action="{{ route('date.update',$job->id) }}" method="POST">
            @csrf
            @method('Put')
             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="date" class="form-label">তারিখ: </label>
                <input type="date" id="date" class="form-control"  placeholder="Enter date" name="date" value="{{ $job->date }}">

            </div>

            <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="countryName" class="form-label">দেশের নাম: </label>
                <input type="text" id="countryName" class="form-control" placeholder="দেশের নাম" name="countryName" value="{{  $job->countryName  }}">

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="work" class="form-label">কাজের ধরন: </label>
                <input type="text" id="work" class="form-control" aria-describedby="work" placeholder="কাজের ধরন" name="work" value="{{ $job->work }}">

            </div>

              <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="age" class="form-label">বয়স: </label>
              <input type="text" id="ages" name="age" class="form-control" value="{{ $job->age }}">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="companyName" class="form-label">কোম্পানির নাম: </label>
                <input type="text" id="companyName" class="form-control" aria-describedby="companyName" placeholder=কোম্পানির নাম" name="companyName" value="{{ $job->companyName }}">

             
             

            </div>

              <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="salary" class="form-label">বেতন: </label>
                <input type="number" id="salary" class="form-control" aria-describedby="salary" placeholder=বেতন" name="salary" value="{{ $job->salary }}">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="facility" class="form-label">সুযোগ সুবিধা: </label>
                <input type="text" id="facility" class="form-control" aria-describedby="facility" placeholder=সুযোগ সুবিধা" name="facility" value="{{ $job->facility }}">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="raf" class="form-label">রেফার: </label>
                <input type="number" id="raf" class="form-control" aria-describedby="raf" placeholder="রেফার" name="raf" value="{{ $job->raf }}">

             
             

            </div>



            <div class=" d-flex gap-4  align-items-center mt-4 ">
               <div>
                <div>

                </div>
               </div>
               <div class=" d-flex gap-2">
                      <a href="{{ route('close.page') }}" class="btn btn-warning text-white">Close</a>
                        <form action="">
                            <input type="submit" class="btn btn-danger" value="Update">
                        </form>
                    </div>
               

            </div>

           
           </form>
           


</body>
</html>