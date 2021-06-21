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
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    .register{
        position: absolute;
        right: 30px;
        margin-top: 1.5em;
    }
    </style>
</head>
<body>
<button class="btn btn-primary register"><a href="#" class="text-white text-decoration-none">Register Student</a></button>
<br><form action="{{ route('register.course') }}" method="POST" class="col-xl-4 mx-auto p-4 shadow p-3 mb-5 bg-white rounded mt-5">
    @csrf
    <h4 class="fw-bold text-primary text-center text-capitalize">Register Courses in tutorLab</h4>
    <div class="form-group mt-4">
        <label for="course">Course</label>
    <input type="text" id="course" name="Course_Name" placeholder="Enter the course Name" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('Course_Name')
{{ $message }}
    @enderror</small>
    <div class="form-group mt-3">
        <label for="teacher">Teacher Name</label>
        <select type="text" name="Teacher" class="form-select mt-1" id="teacher">
            <option value="" selected disabled>--Select Assigned Teacher--</option>
            @foreach ($teachers as $row)
            <option>{{ $row->teacherName }}</option>
            @endforeach
        </select>
        </div>
        <small class="text-danger">
            @error('Teacher')
             {{ $message }}
            @enderror
        </small>
        <div class="form-group mt-4">
    <label for="course">Number of periods per week</label>
    <input type="text" id="course" name="periods" placeholder="Enter number of periods" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('periods')
{{ $message }}
    @enderror</small>
        <div class="form-group my-4">
        <button class="btn btn-primary w-100">Submit</button>
    </div>
</form>
</body>
</html>


