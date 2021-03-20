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
                    <th scope="col">id transportasi</th>
                    <th scope="col">kota awal</th>
                    <th scope="col">kota akhir</th>
                   <!--  <th scope="col">rute awal</th>
                    <th scope="col">rute akhir</th> -->
                    <th scope="col">jam cekin</th>
                    <th scope="col">jam berangkat</th>
                    <th scope="col">harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($data_rute as $dr)
            <tbody>
                <tr>
                    <th scope="row">{{$dr->id}}</th>
                    <td>{{$dr->transportasi_id}}</td>
                    <td>{{$dr->kota_awal}}</td>
                    <td>{{$dr->kota_akhir}}</td>
                   <!--  <td>{{$dr->rute_awal}}</td>
                    <td>{{$dr->rute_akhir}}</td> -->
                    <td>{{$dr->jam_cekin}}</td>
                    <td>{{$dr->jam_berangkat}}</td>
                    <td>{{$dr->harga}}</td>
                    <td class="d-flex justify-content-between">
                        
                        <a href="{{route('Tambah.rute')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.rute',$dr->id)}}"><i class="fas fa-pen"></i>
                        </a>
                        <a href="{{route('Detail.rute',$dr->id)}}"><i class="fas fa-eye"></i></a>
              <form action="{{url('Rute/'.$dr->id) }}" class="d-inline" method="post"
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
