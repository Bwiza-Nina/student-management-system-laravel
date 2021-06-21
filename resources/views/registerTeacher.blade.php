<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Register Teacher</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    .student{
        position: absolute;
        right: 30px;
        margin-top: 1.5em;
    }
    .course{
        position: absolute;
        right: 200px;
        margin-top: 1.5em;
    }
    </style>
</head>
<body>
<button class="btn btn-primary student"><a href="#" class="text-white text-decoration-none">Register Student</a></button>
<button class="btn btn-primary course"><a href="#" class="text-white text-decoration-none">Register Course</a></button>

<br><form action="{{ route('register.teacher') }}" method="POST" class="col-xl-4 mx-auto p-4 shadow p-3 mb-5 bg-white rounded mt-5">
    @csrf
    <h4 class="fw-bold text-primary text-center text-capitalize">Register Yourself in tutorLab</h4>
    <div class="form-group mt-4">
        <label for="course">First Name</label>
    <input type="text" id="course" name="Teacher_fName" placeholder="Enter Your first names" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('Teacher_fName')
{{ $message }}
    @enderror</small>
    <div class="form-group mt-4">
        <label for="course">Last Name</label>
    <input type="text" id="course" name="Teacher_lName" placeholder="Enter Your last names" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('Teacher_lName')
{{ $message }}
    @enderror</small>
    <div class="form-group mt-4">
    <label for="course">Email</label>
    <input type="email" id="course" name="email" placeholder="Enter Your email address" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('email')
{{ $message }}
    @enderror</small>
        <div class="form-group mt-4">
    <label for="course">Address</label>
    <input type="text" id="course" name="address" placeholder="Enter Your address" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('address')
{{ $message }}
    @enderror</small>
        <div class="form-group my-4">
        <button class="btn btn-primary w-100">Submit</button>
    </div>
</form>
</body>
</html>


