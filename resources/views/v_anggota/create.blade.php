<h3> {{ $judul }} </h3>

<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Anggota">
    <p></p>

    <label for="nomor">HP</label>
    <input type="text" name="hp" id="nomor" value="{{ old('hp') }}"
        placeholder="Masukkan Nomor HP Anggota">
    <p></p>

    <button type="submit">
        Simpan
    </button>

    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>
