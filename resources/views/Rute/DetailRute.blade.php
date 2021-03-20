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
                            <p class="h4">Detail <b>Rute</b></p>
                        </div>
                        <br>
                     <div class="text-center">
        
            <h6 class="text-info">ID RUTE</h6>
            <h3 class="text-danger">{{$data_rute->id}}</h3>

             <h6 class="text-info">KOTA AWAL</h6>
            <p>{{$data_rute->kota_awal}}</p>

             <h6 class="text-info">KOTA AKHIR</h6>
            <p>{{$data_rute->kota_akhir}}</p>

             <h6 class="text-info">RUTE AWAL</h6>
            <p>{{$data_rute->rute_awal}}</p>

             <h6 class="text-info">RUTE AKHIR</h6>
            <p>{{$data_rute->rute_akhir}}</p>

             <h6 class="text-info">JAM CEKIN</h6>
            <p>{{$data_rute->jam_cekin}}</p>

            <h6 class="text-info">JAM BERANGKAT</h6>
            <p>{{$data_rute->jam_berangkat}}</p>

             <h6 class="text-info">HARGA</h6>
            <p>{{$data_rute->harga}}</p>

             <h6 class="text-info">ID TRANSPORTASI</h6>
            <h3 class="text-danger">{{$data_rute->transportasi_id}}</h3>
      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
