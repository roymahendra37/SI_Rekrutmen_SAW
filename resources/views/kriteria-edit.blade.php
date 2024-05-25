<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Edit Data Kriteria</h2>
    <form action="{{ route('kriteria.update', $data->id_kriteria) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>          
          <input style="width: 300px" type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ $data->keterangan }}" readonly>
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <input style="width: 100px" type="text" class="form-control" name="bobot" placeholder="Usia" value="{{ $data->bobot }}">
        </div>
        <button type="submit" class="btn btn-warning" style="margin-top: 10px">Edit</button>
      </form>
</x-layout>