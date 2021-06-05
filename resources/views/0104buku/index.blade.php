
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