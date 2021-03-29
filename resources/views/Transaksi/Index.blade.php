<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>
@section('content')
<body>
    @include('layouts.app')
    
    <br>

    <div class="container">
    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">TRANSAKSI TIKET</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">

                    {!! Form::open(['route'=>'transaksi.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                        {{csrf_field()}}
                          <tr><td>
                                <div class="form-group col-md-12">
                                <label for="petugas_id">nama petugas</label>
                                {!! Form::select('petugas_id', \App\Model\Petugas\Petugas::pluck('nama_petugas','id'), null, ['class' => 'form-control']) !!}
                      
                               
                                </div>
                           </td></tr>
                           <tr><td>
                                <div class="col-md-12">
                                <label for=""class="h5">Tujuan</label>
                                {!! Form::select('route_id', \App\Model\Route\Route::pluck('kota_akhir','id'), null, ['class' => 'form-control']) !!}
                                    
                                </div>
                           </td></tr>
                           <tr><td>
                                <div class="col-md-12">
                                <label for="">nama penumpang</label>
                                {!! Form::select('penumpang_id', \App\Model\Penumpang\Penumpang::pluck('nama_penumpang','id'), null, ['class' => 'form-control']) !!}
                                </div>
                           </td></tr>
                        <tr><td>
                                <div class="col-md-12">
                                <label for="">tanggal pemesanan</label>
                                {!! Form::date('tanggal_pemesanan', null, ['class' => 'form-control']) !!}

                                </div>
                         </td></tr>
                         <tr><td>
                                <div class="col-md-12">
                                <label for="">tempat pemesanan</label>
                                {!! Form::text('tempat_pemesanan', null, ['class' => 'form-control']) !!}

                                </div>
                         </td></tr>
                         <tr><td>
                                <div class="col-md-12">
                                <label for="">Quantity</label>
                                {!! Form::number('qty', null, ['class' => 'form-control']) !!}

                                
                                </div>
                         </td></tr>
                         <tr><td>
                                <div class="col-md-12">
                                <label for="">tanggal berangkat</label>
                                {!! Form::date('tanggal_berangkat', null, ['class' => 'form-control']) !!}

                                </div>
                         </td></tr>
                         <tr><td>
                                <div class="col-md-12">
                                <label for="">Bukti Pembayaran</label>
                                {!! Form::file('bukti_pembayaran', null, ['class' => 'form-control','src'=>'/image/']) !!}
                                </div>
                         </td></tr>
                         <tr><td>
                                <div class="col-md-12">
                                <label for="">Total bayar</label>
                                {!! Form::number('total_bayar', null, ['class' => 'form-control']) !!}
                                </div>
                         </td></tr>
                        <tr><td>
                        <button type="submit" name="submit" class="btn btn-danger">Simpan</button>

                                <button type="submit" name="submit" class="btn btn-danger">Selesai</button>
                            </td></tr>
                    </table>

                    {!! Form::close() !!}

                    <table class="table ">
                        <tr class="success"><th colspan="12">Detail Transaksi</th></tr>
                        <tr>
                        <th>No</th>
                        <th>Nama Penumpang</th>
                        
                        <th>Tujuan</th>
                        <th>Jam Berangkat</th>

                        <th>Nama Petugas</th>
                        <th>Tanggal Pemesanan</th>
                        <th>tempat pemesanan</th>
                        <th>Quantity</th>
                        
                        <th>bukti transaksi</th>
                        <!-- <th>status</th> -->

                        <th>Subtotal</th>
                        <th>Action</th></tr>
                        <?php $no=1; $total=0; ?>
                         @foreach ($transaksi as $item)
                        <tr>
                                <td>{{ $no}}</td>
                                <td>{{ $item->penumpang->nama_penumpang }}</td>
                                <td>{{ $item->penumpang->tujuan }}</td>
                                <td>{{ $item->rute->jam_berangkat }}</td>
                                <td>{{ $item->petugas->nama_petugas}}</td>
                                
                                <td>{{ $item->tanggal_pemesanan }}</td>
                                <td>{{ $item->tempat_pemesanan }}</td>
                                <td>{{ $item->qty }}</td>
                                
                                <td><img src="/image/{{ $item->bukti_pembayaran }}" alt="" width="50%"></td>
                                <!-- <td>{{ $item->status }}</td> -->
                                <td>{{ $item->rute->harga*$item->qty }}</td>

                                {!! Form::open(['route'=>['transaksi.destroy',$item->id],'method'=>'DELETE']) !!}
                                <td><button type="submit" class="btn btn-danger">Cancel</button></td></tr>
                                 {!! Form::close() !!}

                                 <!-- {!! Form::open(['route'=>['transaksi.show',$item->id]]) !!}
                                <td><button type="submit" class="btn btn-danger">Detail</button></td></tr>
                                 {!! Form::close() !!} -->
                                
                                <?php $no++ ?>
                                <?php $total=$total+($item->rute->harga*$item->qty) ?>
                         
                       @endforeach
                       <tr><td colspan="10"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>

</html>
