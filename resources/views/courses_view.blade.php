<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<style>
.center{
    margin-left:auto; 
    margin-right:auto; 
}
.head{
    margin-top:72px;  
}

</style>
<body>
<h4  class="fw-bold text-primary text-center text-capitalize head">List Of Courses</h4>
    
<table style="width: 60%; " class="table table-bordered table-striped table-hover table-responsive  center">
<caption>List of courses</caption>
  <thead class="thead-primary">
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Teacher</th>
      <th scope="col">Periods Per Week</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($courses as $course)
        <tr>
        <td>{{ $course->Course}}</td>
        <td>{{ $course->Teacher }}</td>
        <td>{{ $course->Periods }}</td>
        </tr>
        @endforeach
    </tr>
  </tbody>
</table>
</body>
</html>
