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
<br><form action="{{ route('login.teacher') }}" method="POST" class="col-xl-4 mx-auto p-4 shadow p-3 mb-5 bg-white rounded mt-5">
    @csrf
    <h4 class="fw-bold text-primary text-center text-capitalize">Login in tutorLab</h4>
    <div class="form-group mt-4">
    <label for="course">Email</label>
    <input type="email" id="course" name="email" placeholder="Enter Your email address" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('email')
{{ $message }}
    @enderror</small>
        <div class="form-group my-4">
        <button class="btn btn-primary w-100">Submit</button>
    </div>
</form>
</body>
</html>


