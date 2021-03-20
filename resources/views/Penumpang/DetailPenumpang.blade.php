<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket Pedia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="hold-transition login-page">
    @include('layouts.app2')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="h4">Detail <b>Petugas</b></p>
                        </div>
                        <br>
                     <div class="text-center">
        
        
       <h6 class="text-info">ID Penumpang</h6>
            <h3>{{$data_penumpang->id}}</h3>

        <h6 class="text-info">ID Route</h6>
            <h3>{{$data_penumpang->route_id}}</h3>

          <h6 class="text-info">USERNAME</h6>
            <p>{{$data_penumpang->username}}</p>

             <h6 class="text-info">PASSWORD</h6>
            <p>{{$data_penumpang->password}}</p>

             <h6 class="text-info">NAMA PENUMPANG</h6>
            <p>{{$data_penumpang->nama_penumpang}}</p>

             <h6 class="text-info">ALAMAT PENUMAPNG</h6>
            <p>{{$data_penumpang->alamat_penumpang}}</p>

             <h6 class="text-info">TANGGAL LAHIR</h6>
            <p>{{$data_penumpang->tanggal_lahir}}</p>

             <h6 class="text-info">JENIS KELAMIN</h6>
            <p>{{$data_penumpang->jenis_kelamin}}</p>

            <h6 class="text-info">TELEPHONE</h6>
            <p>{{$data_penumpang->telephone}}</p>
      </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
