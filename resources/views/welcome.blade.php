@extends("layout")
@section("content")
    <h1>Danh Sách Sinh Viên</h1><a href="{{url("/create")}}">Create</a>
    <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th Id="width: 10px">ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Telephone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->telephone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
