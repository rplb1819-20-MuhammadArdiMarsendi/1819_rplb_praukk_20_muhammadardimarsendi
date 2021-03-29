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
                    <th scope="col">Level</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">nama petugas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($data_petugas as $dp )
            <tbody>
                <tr>
                    <th scope="row">{{$dp->id}}</th>
                    <td>{{$dp->level->nama_level}}</td>
                    <td>{{$dp->username}}</td>
                    <td>{{$dp->password}}</td>
                    <td>{{$dp->nama_petugas}}</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.petugas')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.petugas',$dp->id)}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.petugas',$dp->id)}}"><i class="fas fa-eye"></i></a>
                        <form action="{{url('Petugas/'.$dp->id) }}" class="d-inline" method="post"
              onsubmit="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA')" >
            @method('DELETE')
            @csrf 
            <button class="btn btn-white" >
              <i class="fas fa-minus"></i>
            </button>
            </form>
                    </td>
                </tr>
                
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
