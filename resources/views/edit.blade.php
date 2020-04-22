@extends('layouts.app')

@section('content')

    <div class="container">
        @if(session('successMsg'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Done!</strong>{{session('successMsg')}}
            </div>
        @endif
    </div>

    <form action="{{route('update',$student->id)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="" name="firstname" value="{{$student->first_name}}">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="" name="lastname" value="{{$student->last_name}}">
        </div>

        <div class="form-group">
            <label for="first_name">Email:</label>
            <input type="text" class="form-control" id="" name="email" value="{{$student->email}}">
        </div>

        <div class="form-group">
            <label for="first_name">Phone Number:</label>
            <input type="text" class="form-control" id="" name="phone" value="{{$student->phone}}">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection()
