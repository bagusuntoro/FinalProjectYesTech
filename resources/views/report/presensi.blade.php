<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Presensi</title>
</head>
<body>
  <div>
    <h1>Laporan Presensi</h1>
  <table border='1'>
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col" id="tes">NRP</th>
              <th scope="col">Nama</th>
              <th scope="col">Absen</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Waktu Absen</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->NRP}}</td>
              <td>{{$row->Nama}}</td>
              <td>{{$row->Absen}}</td>
              <td>{{$row->keterangan}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</body>
</html>