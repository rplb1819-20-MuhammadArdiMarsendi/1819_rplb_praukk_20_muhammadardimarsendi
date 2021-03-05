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
                    <th scope="col">transportasi</th>
                    <th scope="col">kota awal</th>
                    <th scope="col">kota akhir</th>
                    <th scope="col">rute awal</th>
                    <th scope="col">rute akhir</th>
                    <th scope="col">jam cekin</th>
                    <th scope="col">jam berangkat</th>
                    <th scope="col">harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>kereta</td>
                    <td>bekasi</td>
                    <td>bandung</td>
                    <td>a</td>
                    <td>d</td>
                    <td>12:00</td>
                    <td>13:00</td>
                    <td>2000000</td>
                    <td class="d-flex justify-content-between">
                        
                        <a href="{{route('Tambah.rute')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.rute')}}"><i class="fas fa-pen"></i>
                        </a>
                        <a href="{{route('Detail.rute')}}"><i class="fas fa-eye"></i></a>
                        <a href="{{route('Tambah.rute')}}"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                   <td>kereta</td>
                    <td>bekasi</td>
                    <td>bandung</td>
                    <td>a</td>
                    <td>d</td>
                    <td>12:00</td>
                    <td>13:00</td>
                    <td>2000000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                   <td>kereta</td>
                    <td>bekasi</td>
                    <td>bandung</td>
                    <td>a</td>
                    <td>d</td>
                    <td>12:00</td>
                    <td>13:00</td>
                    <td>2000000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
