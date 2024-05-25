<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelamar</title>
</head>

<style>
    table, th, td {
        border: 0.5px solid black;
        border-collapse: collapse;
    }
    td {
        text-align: center;
    }
</style>

<body>
    <h3 style="text-align: center">Data Pelamar</h3>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">ID</th>
                    <th scope="col" style="width: 30%">Nama</th>
                    <th scope="col" style="width: 20%">Usia</th>
                    <th scope="col" style="width: 20%">Pendidikan</th>
                    <th scope="col" style="width: 20%">Nilai Tes</th>
                    <th scope="col" style="width: 30%">Pengalaman</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($data_pelamar as $pelamar)
                <tr>
                    <td>{{ $pelamar->id_pelamar }}</td>
                    <td>{{ $pelamar->nama }}</td>
                    <td>{{ $pelamar->usia }}</td>
                    <td>{{ $pelamar->pendidikan }}</td>
                    <td>{{ $pelamar->nilai_tes }}</td>
                    <td>{{ $pelamar->pengalaman }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>