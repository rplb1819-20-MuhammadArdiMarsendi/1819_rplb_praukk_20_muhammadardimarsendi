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
    <table class="table static" align="center" >
                        <tr class="success"><th colspan="20 ">Laporan</th></tr>
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

                               
                                <td><a href="{{route('laporan.cetak')}}" target="blank" type="submit" class="btn btn-danger">Cetak</a></td></tr>
                                

                                
                                
                                <?php $no++ ?>
                                <?php $total=$total+($item->rute->harga*$item->qty) ?>
                         
                       @endforeach
                       </table>
    </div>
</body>

</html>
