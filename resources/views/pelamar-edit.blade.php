<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Edit Data Pelamar</h2>
    <form action="{{ route('pelamar.update', $data->id_pelamar) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input style="width: 500px" type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input style="width: 100px" type="text" class="form-control" name="usia" placeholder="Usia" value="{{ $data->usia }}">
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <select style="width: 100px" name="pendidikan" class="form-control">
                <option @if ($data->pendidikan == 'SMA') selected @endif value="SMA">SMA</option>
                <option @if ($data->pendidikan == 'SMK') selected @endif value="SMK">SMK</option>
                <option @if ($data->pendidikan == 'D3/D4') selected @endif value="D3/D4">D3/D4</option>
                <option @if ($data->pendidikan == 'S1') selected @endif value="S1">S1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai_tes" class="form-label">Nilai Tes</label>
            <input style="width: 100px" type="text" class="form-control" name="nilai_tes" placeholder="Nilai Tes" value="{{ $data->nilai_tes}}">
        </div>
        <div class="mb-3">
            <label for="pengalaman" class="form-label">Pengalaman</label>
            <select style="width: 200px" name="pengalaman" class="form-control">
                <option @if ($data->pengalaman == 'Fresh Graduate') selected @endif value="Fresh Graduate">Fresh Graduate</option>
                <option @if ($data->pengalaman == '1 Tahun') selected @endif value="1 Tahun">1 Tahun</option>
                <option @if ($data->pengalaman == '1-2 Tahun') selected @endif value="1-2 Tahun">1-2 Tahun</option>
                <option @if ($data->pengalaman == 'Lebih Dari 2 Tahun') selected @endif value="Lebih Dari 2 Tahun">Lebih Dari 2 Tahun</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning" style="margin-top: 10px">Edit</button>
      </form>
</x-layout>