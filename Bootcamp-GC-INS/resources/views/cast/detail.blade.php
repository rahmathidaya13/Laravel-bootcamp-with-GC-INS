<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3 ">
                <a class="btn btn-sm btn-primary mb-3" href="{{ route('cast') }}">Kembali</a>
                <div class="card mx-auto" style="width: 20rem;">
                    <img src="{{ asset('image/14636.jpg') }}" class="card-img-top" alt="{{ $cast->nama }}">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>
                                <h5 class="font-weight-bolder text-muted">Nama</h5>
                                <h6>{{ $cast->nama }}</h6>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>
                                <h5 class="font-weight-bolder text-muted">Umur</h5>
                                <h6>{{ $cast->umur. ' thn' }}</h6>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>
                                <h5 class="font-weight-bolder text-muted">Bio</h5>
                                <h6>{{ $cast->bio }}</h6>
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
