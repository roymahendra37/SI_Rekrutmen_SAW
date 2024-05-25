<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Hasil</title>
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
    <h3 style="text-align: center">Data Hasil Rekrutmen</h3>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">Ranking</th>
                    <th scope="col" style="width: 20%">Nama</th>
                    <th scope="col" style="width: 20%">Kriteria 1</th>
                    <th scope="col" style="width: 20%">Kriteria 2</th>
                    <th scope="col" style="width: 20%">Kriteria 3</th>
                    <th scope="col" style="width: 20%">Kriteria 4</th>
                    <th scope="col" style="width: 20%">Total</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($data_hasil as $index => $hasil )
                <tr>
                    <td>{{ $index + 1 }}</td> <!-- Nomor urut dihitung dari 1, index dimulai dari 0 -->
                    <td>{{ $hasil->pelamar->nama }}</td>
                    <td>{{ $hasil->hasil_kriteria1 }}</td>
                    <td>{{ $hasil->hasil_kriteria2 }}</td>
                    <td>{{ $hasil->hasil_kriteria3 }}</td>
                    <td>{{ $hasil->hasil_kriteria4 }}</td>
                    <td>{{ $hasil->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>