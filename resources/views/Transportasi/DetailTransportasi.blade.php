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
                            <p class="h4">Detail <b>Transportasi</b></p>
                        </div>
                        <br>
                     <div class="text-center">
        
        <h6 class="text-info">ID TRANSPORTASI</h6>
            <h3>{{$data_transportasi->id}}</h3>

          <h6 class="text-info">Nama type</h6>
            <p>{{$data_transportasi->type_transportasi_id}}</p>

               <h6 class="text-info">kode</h6>
            <p>{{$data_transportasi->kode_transportasi}}</p>

             <h6 class="text-info">JUMLAH KURSI</h6>
            <p>{{$data_transportasi->jumlah_kursi}}</p>

             <h6 class="text-info">KETERANGAN</h6>
            <p>{{$data_transportasi->keterangan}}</p>

            
      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
