<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Data Kriteria Penilaian</h2>
    <h5>
      Keterangan : Kriteria 1 (Benefit), Kriteria 2 (Benefit), Kriteria 3 (Benefit), Kriteria 4 (Cost)
    </h5>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Bobot</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
          @forelse ($data_kriteria as $kriteria )
            <tr>
                <td>{{ $kriteria->id_kriteria }}</td>
                <td>{{ $kriteria->keterangan }}</td>
                <td>{{ $kriteria->bobot}}</td>
                <td>
                    <a class='btn btn-success' href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}">Edit</a>
              </td>
            </tr>
          @empty
          <tr>
            <td colspan='4' align='center'>Data kriteria Kosong</td>
          </tr>
          @endforelse
        </tbody>
      </table>
</x-layout>