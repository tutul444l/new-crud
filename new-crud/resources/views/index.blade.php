@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">si</th>
                            <th scope="col">Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Number</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($students as $student )



                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->student_father}}</td>
                            <td>{{$student->student_address}}</td>
                            <td>{{$student->student_number}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="{{ route('student.delete',$student->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    {{-- form end --}}


                </div>
            </div>
        </div>
        {{-- sidebar --}}
        <div class="col-md-4">
            <form action="{{route('student.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="student_name" class="form-control" placeholder="student name" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Father name</label>
                    <input type="text" name="student_father" class="form-control" placeholder="Father name" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" name="student_address" class="form-control" placeholder="Address" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Number</label>
                    <input type="text" name="student_number" class="form-control" placeholder="Number" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>


                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        {{-- sidebar end --}}
    </div>
</div>
@endsection
