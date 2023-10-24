<!DOCTYPE html>

<body>
    <a href="{{ route('users.create') }}">Create user</a>

    <table>
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
</body>