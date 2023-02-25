<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Mahasiswa</title>
</head>
<body>
  <div>
    <h1 class="text-center">Laporan Data Mahasiswa</h1>
  <table border="1">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col" id="tes">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No. HP</th>
              <th scope="col">Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->nama}}</td>
              <td>{{$row->jenisKelamin}}</td>
              <td>{{$row->noTelepon}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</body>
</html>