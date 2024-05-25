<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>Data Pelamar</h2>
    <a href="{{ route('pelamar.create') }}"  class="btn btn-warning">Tambah Data</a>
    <a href="/pelamar/download/pdf"  class="btn btn-primary">Cetak Pdf</a>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Usia</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Nilai Tes</th>
            <th scope="col">Pengalaman</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
          @forelse ($data_pelamar as $pelamar )
            <tr>
                <td>{{ $pelamar->id_pelamar }}</td>
                <td>{{ $pelamar->nama }}</td>
                <td>{{ $pelamar->usia}}</td>
                <td>{{ $pelamar->pendidikan }}</td>
                <td>{{ $pelamar->nilai_tes }}</td>
                <td>{{ $pelamar->pengalaman }}</td>
                <td>
                  <a class='btn btn-success' href="{{ route('pelamar.edit', $pelamar->id_pelamar) }}">Edit</a> |
                  <form action="{{ route('pelamar.destroy', $pelamar->id_pelamar) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                  </form>
              </td>
            </tr>
          @empty
          <tr>
            <td colspan='7' align='center'>Data Pelamar Kosong</td>
          </tr>
          @endforelse
          
        </tbody>
      </table>
</x-layout>