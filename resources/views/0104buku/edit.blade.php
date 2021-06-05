<form action="{{ route('buku.update', $buku->id) }}" method="POST">
			@csrf
			@method('patch')
			<label for="judul">Judul</label>
			<input type="text" id="judul" name="judul" value="{{ $buku->judul}}">

			<label for="tahun">Tahun Terbit</label>
			<input type="text" id="tahun" name="tahun" value="{{ $buku->tahun_terbit}}">

			<button type="submit" value="Submit">Simpan</button>
		</form>