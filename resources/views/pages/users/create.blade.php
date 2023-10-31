@extends("page")

@section("content")
    <div class="container">
        <h1>Nowy uzytkownik</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <header></header>
    
    <article>
        <h1>Tytuł</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vel! Nesciunt, corrupti omnis asperiores maxime sint doloribus animi magnam atque dicta expedita modi recusandae vero id perspiciatis cum rerum non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vel! Nesciunt, corrupti omnis asperiores maxime sint doloribus animi magnam atque dicta expedita modi recusandae vero id perspiciatis cum rerum non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vel! Nesciunt, corrupti omnis asperiores maxime sint doloribus animi magnam atque dicta expedita modi recusandae vero id perspiciatis cum rerum non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vel! Nesciunt, corrupti omnis asperiores maxime sint doloribus animi magnam atque dicta expedita modi recusandae vero id perspiciatis cum rerum non.</p>

    </article>

    <form class="container" method="POST" action="{{ route('users.store') }}">
        <div class="form-group">
            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="form-group">
            <input class="form-control" name="name" type="text" placeholder="name"/><br>
        </div>
        <div class="form-group">
            <input class="form-control" name="email" type="email" placeholder="email"/><br>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" type="password" placeholder="password"/><br>
        </div>
        <div class="form-group">
            <input class="form-control" name="repeat_password" type="password" placeholder="repeat password"/><br>
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" /><br>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection