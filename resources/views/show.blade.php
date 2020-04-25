@extends ('layouts.app')
@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">First Name</th>
            <th scope="col" class="text-center">Last Name</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Phone</th>
            <th scope="col" class="text-center">Wanna Edit or Delete??</th>
        </tr>
        </thead>
        <tbody>

        @foreach($students as $student)
            <tr>
                <th scope="row" class="text-center">{{$student->id}}</th>
                <td class="text-center">{{$student->first_name}}</td>
                <td class="text-center">{{$student->last_name}}</td>
                <td class="text-center">{{$student->email}}</td>
                <td class="text-center">{{$student->phone}}</td>
                <td class="text-center">
                    <a href="{{route('edit',$student->id )}}"><button>Edit</button></a>
                        <form method="post" id="delete-form-{{$student->id}}" action="{{route('delete',$student->id)}}" style="display: none;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                        </form>
                    <a href="#"><button onclick="if(confirm('are you sure?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$student->id}}').submit();
                    }else{
                        event.preventDefault();
                            }" class="">Delete</button></a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
{{--    paginating--}}
    {{$students->links()}}



@endsection
