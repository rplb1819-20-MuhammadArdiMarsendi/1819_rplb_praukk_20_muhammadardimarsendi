<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>

<body>
    @include('layouts.app')
    
    <br>

    <div class="container">
        <table class="table">
          <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                   <!--  <th scope="col">Password</th> -->
                    <th scope="col">Nama Penumpang</th>
                    <th scope="col">Alamat Penumpang</th>
                    <!-- <th scope="col">Tanggal Lahir</th> -->
                    <!-- <th scope="col">Jenis Kelamin</th> -->
                    <th scope="col">Telephone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <thead>
              @foreach($data_penumpang as $dp)
                <tr>
                    <td scope="col">{{$dp->id}}</td>
                    <td scope="col">{{$dp->username}}</td>
                    <!-- <td scope="col">{{$dp->password}}</td> -->
                    <td scope="col">{{$dp->nama_penumpang}}</td>
                    <td scope="col">{{$dp->alamat_penumpang}}</td>
                   <!--  <td scope="col">{{$dp->tanggal_lahir}}</td> -->
                   <!--  <td scope="col">{{$dp->jenis_kelamin}}</td> -->
                    <td scope="col">{{$dp->telephone}}</td>

                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.penumpang')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.penumpang',$dp->id)}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.penumpang',$dp->id)}}"><i class="fas fa-eye"></i></a>
                        <form action="{{url('Penumpang/'.$dp->id) }}" class="d-inline" method="post"
              onsubmit="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA')" >
            @method('DELETE')
            @csrf 
            <button class="btn btn-white" >
              <i class="fas fa-minus"></i>
            </button>
            </form>
                </tr>
            </thead>
            @endforeach
        </table>
    </div>
</body>

</html>
