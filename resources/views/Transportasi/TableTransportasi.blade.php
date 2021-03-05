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
      <th scope="col">KODE</th>
      <th scope="col">JUMLAH KURSI</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">JUMLAH KURSI</th>
      <th scope="col">ID TYPE TRANSPORTASI</th>
      <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
               <th scope="row">1</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td>@mdo</td>
             <td>@mdo</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.transportasi')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.transportasi')}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.transportasi')}}"><i class="fas fa-eye"></i></a>
                        <a href=""><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
             <th scope="row">2</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td>@mdo</td>
             <td>@mdo</td>
                    <td class="d-flex justify-content-between">
                       <a href="{{route('Tambah.transportasi')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.transportasi')}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.transportasi')}}"><i class="fas fa-eye"></i></a>
                        <a href=""><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
             <td>@mdo</td>
             <td>@mdo</td>
                    <td class="d-flex justify-content-between">
                       <a href="{{route('Tambah.type')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.type')}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.type')}}"><i class="fas fa-eye"></i></a>
                        <a href=""><i class="fas fa-minus"></i></a>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
