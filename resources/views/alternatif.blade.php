<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Data Alternatif Perhitungan</h2>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Pelamar</th>
            <th scope="col">Nama</th>
            <th scope="col">Nilai Kriteria 1</th>
            <th scope="col">Nilai Kriteria 2</th>
            <th scope="col">Nilai Kriteria 3</th>
            <th scope="col">Nilai Kriteria 4</th>
          </tr>
        </thead>
        <tbody> 
          @forelse ($data_alternatif as $alternatif )
            <tr>
                <td>{{ $alternatif->id_alternatif }}</td>
                <td>{{ $alternatif->id_pelamar }}</td>
                <td>{{ $alternatif->pelamar->nama }}</td>
                <td>{{ $alternatif->alternatif_kriteria1}}</td>
                <td>{{ $alternatif->alternatif_kriteria2}}</td>
                <td>{{ $alternatif->alternatif_kriteria3}}</td>
                <td>{{ $alternatif->alternatif_kriteria4}}</td>
            </tr>
          @empty
          <tr>
            <td colspan='7' align='center'>Data Alternatif Kosong</td>
          </tr>
          @endforelse
          <tr><td colspan='3' align='center' style="font-weight: bold">PEMBAGI</td>
            <td>{{ $max_k1 }}</td>
            <td>{{ $max_k2 }}</td>
            <td>{{ $max_k3 }}</td>
            <td>{{ $min_k4 }}</td>
          </tr>
        </tbody>
      </table>
</x-layout>