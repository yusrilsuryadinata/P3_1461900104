<!doctype html>
<html lang="en">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    {{-- CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
    <form class="example">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
<a href="{{route('buku.create')}}" class="button button-hijau">Tambah Buku</a>
<table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:10%">
        <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($buku as $bu => $b)
        <tr>
            <td>{{$bu + 1}}</td>
            <td>{{$b->judul}}</td>
            <td>{{$b->tahun_terbit}}</td>
            <td>
                <form action="{{ route('buku.destroy', $b->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('buku.edit', $b->id) }}" class="button button-orange">Edit</a>
                    <button type="submit" class="button button-merah">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </div>
        </section>

    </table>