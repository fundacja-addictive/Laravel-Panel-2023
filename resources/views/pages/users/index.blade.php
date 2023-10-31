@extends("page")

@section("content")
    <a href="{{ route('users.create') }}">Create user</a>

    <div class="container row">
        <div class="col-6">
        <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
        </thead>
        @foreach ($users as $user)
        <tr>
            <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
        </div>
        <div class="col-6"></div>
    </div>


    

@endsection