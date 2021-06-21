@extends('./app')

<form action="{{route('student_form')}}" method="POST" class="w-50 mx-auto shadow p-3 mb-5 bg-white rounded mt-5">
@csrf
<h4 class=" text-primary text-center">Register Student in TutorLab</h4>
    <div class="form-group mt-4 mx-5">
      <label for="student_name">Student Name</label>
      <input type="text" id="student_name" name="student_name"  class="form-control w-75">
        <small  class="text-danger">
            @error("student_name")
              {{$message}}
            @enderror
        </small>
   </div>
   
   <div class="form-group mt-2 mx-5">
     <label for="student_grade">Student Grade</label>
     <input type="number" id="student_grade" name="student_grade"  class="form-control w-75">
     <small  class="text-danger">
            @error("student_grade")
              {{$message}}
            @enderror
        </small>
   </div>
   <div class="form-group mt-2 mx-5">
    <label for="academic_year">Academic Year</label>
    <input type="number" id="academic_year" name="academic_year"  class="form-control w-75">
    <small  class="text-danger">
            @error("academic_year")
              {{$message}}
            @enderror
        </small>
   </div>
   <div class="form-group mt-2 mx-5">
     <button class="btn btn-primary">Submit</button>
   </div>
</form>

@section('content')

@endsection