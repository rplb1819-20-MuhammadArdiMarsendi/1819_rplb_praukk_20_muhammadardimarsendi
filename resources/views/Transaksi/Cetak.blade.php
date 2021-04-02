<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535
        }
    </style>
<body>
   <div class="form-group">
        <p align="center"><b>Laporan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr >
                        <tr>
                        <th>No</th>
                        <th>Nama Penumpang</th>
                        
                        <th>Tujuan</th>
                        <th>Jam Berangkat</th>

                        <th>Nama Petugas</th>
                        <th>Tanggal Pemesanan</th>
                        <th>tempat pemesanan</th>
                        <th>Quantity</th>
                        
                        <!-- <th>bukti transaksi</th> -->
                        <!-- <th>status</th> -->

                        <th>Total</th>
                        
                        <?php $no=1; $total=0; ?>
                    
                        <tr>
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
                                
                                <!-- <td><img src="/image/{{ $item->bukti_pembayaran }}" alt="" width="100px"></td> -->
                                <!-- <td>{{ $item->status }}</td> -->
                                <td>{{ $item->rute->harga*$item->qty }}</td>
                                <?php $no++ ?>
                                <?php $total=$total+($item->rute->harga*$item->qty) ?>
                         
                       @endforeach
                        </tr>
        </table>
   </div>
   <script type="text/javascript">
        window.print();
   </script>
</body>

</html>