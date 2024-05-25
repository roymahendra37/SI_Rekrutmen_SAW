<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Tambah Data Pelamar</h2>
    <form action="{{ route('pelamar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input style="width: 500px" type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input style="width: 100px" type="text" class="form-control" name="usia" placeholder="Usia">
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <select style="width: 100px" name="pendidikan" class="form-control">
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="D3/D4">D3/D4</option>
                <option value="S1">S1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai_tes" class="form-label">Nilai Tes</label>
            <input style="width: 100px" type="text" class="form-control" name="nilai_tes" placeholder="Nilai Tes">
        </div>
        <div class="mb-3">
            <label for="pengalaman" class="form-label">Pengalaman</label>
            <select style="width: 200px" name="pengalaman" class="form-control">
                <option value="Fresh Graduate">Fresh Graduate</option>
                <option value="1 Tahun">1 Tahun</option>
                <option value="1-2 Tahun">1-2 Tahun</option>
                <option value="Lebih Dari 2 Tahun">Lebih Dari 2 Tahun</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning" style="margin-top: 10px">Simpan</button>
      </form>
</x-layout>