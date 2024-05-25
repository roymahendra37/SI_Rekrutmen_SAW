<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Data Hasil Perhitungan</h2>
    <a href="/hasil/download/pdf"  class="btn btn-primary">Cetak Pdf</a>
    <table class="table table-striped table-hover">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">ID Normalisasi</th>
              <th scope="col">ID Pelamar</th>
              <th scope="col">Ranking</th>
              <th scope="col">Nama Pelamar</th>
              <th scope="col">Hasil Kriteria 1</th>
              <th scope="col">Hasil Kriteria 2</th>
              <th scope="col">Hasil Kriteria 3</th>
              <th scope="col">Hasil Kriteria 4</th>
              <th scope="col">Total Nilai</th>
          </tr>
      </thead>
      <tbody> 
          @forelse ($data_hasil as $index => $hasil )
          <tr>
              <td>{{ $hasil->id_hasil }}</td>
              <td>{{ $hasil->id_normalisasi }}</td>
              <td>{{ $hasil->id_pelamar }}</td>
              <td>{{ $index + 1 }}</td> <!-- Nomor urut dihitung dari 1, index dimulai dari 0 -->
              <td>{{ $hasil->pelamar->nama }}</td>
              <td>{{ $hasil->hasil_kriteria1 }}</td>
              <td>{{ $hasil->hasil_kriteria2 }}</td>
              <td>{{ $hasil->hasil_kriteria3 }}</td>
              <td>{{ $hasil->hasil_kriteria4 }}</td>
              <td>{{ $hasil->total }}</td>
          </tr>
          @empty
          <tr>
              <td colspan='9' align='center'>Data Hasil Perhitungan Kosong</td>
          </tr>
          @endforelse
      </tbody>
  </table>
</x-layout>