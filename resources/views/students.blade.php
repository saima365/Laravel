



<h1>Student Id: {{$id}}</h1>
<h1>Student Name: {{$name}}</h1>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
       
      </tr>
    </thead>
    <tbody>
@foreach($student as $key=>$student)
      <tr>
        <td>{{$key +1}}</td>
        <td>{{$student}}</td>  
      </tr>
@endforeach
    </tbody>
  </table>
</div>

</body>
</html>
