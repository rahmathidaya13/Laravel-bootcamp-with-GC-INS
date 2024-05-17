<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3">
                <div class="card">
                    <h1 class="card-title text-center mt-2">DATA PARA PEMAIN</h1>
                    <div class="p-3">
                        <a href="{{ route('cast.create') }}" class="btn btn-primary btn-sm">Tambah Pemain</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Bio</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cast as $rows)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a class="text-decoration-none" href="{{ route('cast.show', $rows->id_cast) }}">{{ $rows->nama }}</a></td>
                                    <td>{{ $rows->umur }}</td>
                                    <td>{{ $rows->bio }}</td>
                                    <td>
                                        <a href="{{ route('cast.edit', $rows->id_cast) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('cast.delete', $rows->id_cast) }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                @empty($rows)
                                    <tr>
                                        <td class="text-center" colspan="13" >Data tidak ditemukan</td>
                                    </tr>
                                @endempty
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
