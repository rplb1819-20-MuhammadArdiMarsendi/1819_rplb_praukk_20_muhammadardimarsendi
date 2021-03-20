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
                   <th scope="col">ID TRANSPORTASI</th>
      <th scope="col">Id Type</th>
      <th scope="col">Kode Type</th>
      <th scope="col">Jumlah Kursi</th>
      <th scope="col">Keterangan</th>
     
      <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
              @foreach($data_transportasi as $data)
                <tr>
              <th scope="row">{{$data->id}}</th>
             <td>{{$data->type_transportasi_id}}</td>
             <td>{{$data->kode_transportasi}}</td>
             <td>{{$data->jumlah_kursi}}</td>
             <td>{{$data->keterangan}}</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.transportasi')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.transportasi',$data->id)}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.transportasi',$data->id)}}"><i class="fas fa-eye"></i></a>
                        <form action="{{url('Transportasi/'.$data->id) }}" class="d-inline" method="post"
              onsubmit="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA')" >
            @method('DELETE')
            @csrf 
            <button class="btn btn-white" >
              <i class="fas fa-minus"></i>
            </button>
            </form>
                    </td>
                </tr>
                
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
