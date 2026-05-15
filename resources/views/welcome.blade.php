<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Office Management</title>
</head>
<body style="background: linear-gradient(135deg, #667eea, #764ba2); min-height:100vh;">



    <table class="table container " style="margin-top: 50px">
       
        <div class=" d-flex justify-content-between me-4">
            <div></div>
            <div> <h1 class="text-center text-white fw-bold mt-5 text-decoration-underline">চাকরির বিঞ্জপ্তি সমূহ</h1></div>
            <div>
               
                  <button class="btn btn-success mt-5 " id="add"> Add New Job Circular</button>
            </div>

            
          
        </div>
        <div class="container shadow p-2 mt-5 text-white    " style="width: 550px; height: auto; border: 2px solid black; display: none; background: linear-gradient(135deg, #667eea, #764ba2); " id="box">
            <head>
                <h1 class="text-center fw-bold text-white" >Add New Job Circular</h1>
            </head>

          <form action="{{ route('data.store') }}" method="POST">
            @csrf
            @method('Put')
             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="date" class="form-label " style="width: 8rem">তারিখ: </label>
                <input type="date" id="date" class="form-control"  placeholder="Enter date" name="date">

            </div>

            <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="countryName" class="form-label " style="width: 8rem">দেশের নাম: </label>
                <input type="text" id="countryName" class="form-control" placeholder="দেশের নাম" name="countryName">

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="work" class="form-label " style="width: 8rem">কাজের ধরন: </label>
                <input type="text" id="work" class="form-control" aria-describedby="work" placeholder="কাজের ধরন" name="work">

            </div>

              <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="age" class="form-label " style="width: 8rem">বয়স: </label>
              <input type="text" id="ages" name="age" class="form-control">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="companyName" class="form-label " style="width: 8rem">কোম্পানির নাম: </label>
                <input type="text" id="companyName" class="form-control" aria-describedby="companyName" placeholder=কোম্পানির নাম" name="companyName">

             
             

            </div>

              <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="salary" class="form-label " style="width: 8rem">বেতন: </label>
                <input type="number" id="salary" class="form-control" aria-describedby="salary" placeholder="বেতন" name="salary">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="facility" class="form-label " style="width: 8rem">সুযোগ সুবিধা: </label>
                <input type="text" id="facility" class="form-control" aria-describedby="facility" placeholder=সুযোগ সুবিধা" name="facility">

             
             

            </div>

             <div class="d-flex gap-2 align-items-center mt-2">
                  <label for="raf" class="form-label " style="width: 8rem">রেফার: </label>
                <input type="number" id="raf" class="form-control" aria-describedby="raf" placeholder="রেফার" name="raf">

             
             

            </div>



            <div class=" d-flex gap-4  align-items-center mt-4 ">
               <div>
                <button class="btn btn-danger" id="col">Close</button>
               </div>
                 <input type="submit" class="btn btn-success " value="publish">
               

            </div>

           
           </form>


        <thead class="border-1 text-white" style="background-color: #7532F9;">
            <tr>
                <th>#</th>
                <th>তারিখ</th>
                <th>দেশের নাম</th>
                <th>কাজের ‍ধরণ</th>
                <th>বয়স</th>
                <th>কোম্পানির নাম</th>
                <th>বেতন</th>
                <th>সুযোগ সুবিধা</th>
                <th>রেফা</th>
                <th>অ্যাকশন</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                  <tr>
                <td>{{ $data->id}}</td>
                 <td>{{ $data->date }}</td>
                <td>{{ $data->countryName }}</td>
                <td>{{ $data->work }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->companyName }}</td>
                <td>{{ $data->salary }}</td>
                <td>{{ $data->facility }}</td>
                <td>{{ $data->raf }}</td>
                 <th>
                    <div class=" d-flex gap-2">
                      <a href="{{ route('edit.page',$data->id) }}" class="btn btn-warning text-white">Edit</a>
                
                      <form action="{{ route('delete.data', $data->id) }}" method="post">
                        @csrf
                        @method('Delete')
                        <input type="submit" class="btn btn-danger" value="Delete" onclick="confirmDelete({{ $data->id }})">
                      </form>
                    </div>
                 </th>
               
            </tr>
            @endforeach
          

        </tbody>
    </table>
    



    <script src="{{ asset('Js/script.js') }}"></script>

    
</body>
</html>