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
                    <th scope="col">Nama Level</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach($data_level as $dl)
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$dl->id}}</th>
                    <td>{{$dl->nama_level}}</td>
                    
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.level')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.level',$dl->id)}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.level',$dl->id)}}"><i class="fas fa-eye"></i></a>
                         <form action="{{url('Level/'.$dl->id) }}" class="d-inline" method="post"
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
