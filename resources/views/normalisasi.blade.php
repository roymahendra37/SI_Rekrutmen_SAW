<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Data Hasil Normalisasi</h2>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Alternatif</th>
            <th scope="col">ID Pelamar</th>
            <th scope="col">Nama Pelamar</th>
            <th scope="col">Normalisasi Kriteria 1</th>
            <th scope="col">Normalisasi Kriteria 2</th>
            <th scope="col">Normalisasi Kriteria 3</th>
            <th scope="col">Normalisasi Kriteria 4</th>
          </tr>
        </thead>
        <tbody> 
          @forelse ($data_normalisasi as $normalisasi )
            <tr>
                <td>{{ $normalisasi->id_normalisasi }}</td>
                <td>{{ $normalisasi->id_alternatif }}</td>
                <td>{{ $normalisasi->id_pelamar }}</td>
                <td>{{ $normalisasi->pelamar->nama }}</td>
                <td>{{ $normalisasi->normalisasi_kriteria1 }}</td>
                <td>{{ $normalisasi->normalisasi_kriteria2 }}</td>
                <td>{{ $normalisasi->normalisasi_kriteria3 }}</td>
                <td>{{ $normalisasi->normalisasi_kriteria4 }}</td>
            </tr>
          @empty
          <tr>
            <td colspan='8' align='center'>Data Normalisasi Kosong</td>
          </tr>
          @endforelse
        </tbody>
      </table>
</x-layout>