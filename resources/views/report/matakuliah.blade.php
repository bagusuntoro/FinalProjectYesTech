<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Matakuliah</title>
</head>
<body>
  <div>
    <h1>Data Matakuliah</h1>
  <table border='1'>
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col" id="tes">Kode Matakuliah</th>
              <th scope="col">Nama Matakuliah</th>
              <th scope="col">Nama Dosen</th>
              <th scope="col">SKS</th>
              <th scope="col">Tanggal Buat</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->id_matkul}}</td>
              <td>{{$row->Nama_matkul}}</td>
              <td>{{$row->Nama_Dosen}}</td>
              <td>{{$row->SKS}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</body>
</html>