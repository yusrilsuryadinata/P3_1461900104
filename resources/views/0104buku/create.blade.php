<form action="{{ route('buku.store') }}" method="POST">
			@csrf
			<label for="judul">Judul</label>
			<input type="text" id="judul" name="judul" placeholder="Judul..">

			<label for="tahun">Tahun Terbit</label>
			<input type="text" id="tahun" name="tahun" placeholder="Tahun Terbit..">

			<button type="submit" value="Submit">Simpan</button>
		</form>