@extends("page")

<table class="table">
    <thead>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Email</th>
        <th>Zmień hasło</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td></td>
            <td></td>
            <td><a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-sm">Zmień</a></td>
        </tr>
    </tbody>
</table>