<!DOCTYPE html>
<body>

    <form method="POST" action="{{ route('users.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input name="name" type="text" placeholder="name"/><br>
        <input name="email" type="email" placeholder="email"/><br>
        <input name="password" type="password" placeholder="password"/><br>
        <input name="repeat_password" type="password" placeholder="repeat password"/><br>
        <input type="submit" /><br>
    </form>
</body>