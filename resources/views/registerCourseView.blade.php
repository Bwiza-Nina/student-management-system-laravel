<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
    <style>
    .btns{
       margin-top: -2.5em;
    }
    .btns>a:first-of-type{
        position: absolute;
        right: 160px;
    }
    .btns>a:last-of-type{
        position: absolute;
        right: 30px;
    }
    nav{
        height: 60px;
    }
    input,.inp-cont>button,select{
        height: 45px;
    }
    </style>
</head>
<body>

<br><form action="{{ route('register.course') }}" method="POST" class="col-xl-4 mx-auto p-4 shadow-lg rounded mt-5">
    @csrf
    <h4 class="fw-bold">Register Courses</h4>
    <div class="inp-cont mt-4">
    <label for="course">Course Name</label>
    <input type="text" id="course" name="Course_Name" class="form-control mt-1">
    </div>
    <small class="text-danger">@error('Course Name')
{{ $message }}
    @enderror</small>
    <div class="inp-cont mt-3">
        <label for="teacher">Teacher Name</label>
        <select type="text" name="Teacher" class="form-select mt-1" id="teacher">
            <option value="">Select Teacher</option>
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
        <div class="inp-cont my-4">
        <button class="btn btn-primary w-100">Submit</button>
    </div>
</form>
</body>
</html>


