<!-- default value foto -->
<!-- aksi edit foto -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Data pegawai</title>
</head>

<body class="container">
  <h2 class="my-3 text-center">Data Pegawai</h2>
  <a href="/tambahpegawai" class="btn btn-success">Tambah +</a>

  @if($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    <strong>{{$message}}</strong>
  </div>
  @endif

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Foto</th>
        <th scope="col">Jenis kelamin</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
      $no = 1;
      @endphp
      @foreach($data as $row)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$row->nama}}</td>
        <td>
          <img src="{{asset('fotopegawai/'.$row->foto)}}" style="width:100px;" alt="">
        </td>
        <td>{{$row->jenis_kelamin}}</td>
        <td>0{{$row->no_telp}}</td>
        <td>{{$row->created_at->diffForHumans()}}</td>
        <td>
          <a href="/deletepegawai/{{$row->id}}" class="btn btn-danger">Delete</a>
          <a href="/tampilkanpegawai/{{$row->id}}" class="btn btn-info">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>