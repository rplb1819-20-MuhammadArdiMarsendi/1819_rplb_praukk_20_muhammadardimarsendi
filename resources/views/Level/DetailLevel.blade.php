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
                            <p class="h4">Detail <b>Level</b></p>
                      
                        <br>
      <div class="text-center">
  
       <h6 class="text-info">ID LEVEL</h6>
            <h3>{{ $detail_level->id}}</h3>

          <h6 class="text-info">NAMA LEVEL</h6>
            <p>{{ $detail_level->nama_level}}</p>

      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
