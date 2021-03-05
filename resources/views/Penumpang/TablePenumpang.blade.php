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
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>santuyyy</td>
                    <td>uehcfui4rehjep</td>
                    <td>Felica</td>
                    <td>Jl. Apel No 11</td>
                    <td>02-08-2003</td>
                    <td>Perempuan</td>
                    <td>081265578982</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.penumpang')}}"><i class="fas fa-plus"></i></a>                       
                        <a href="{{route('Edit.penumpang')}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.penumpang')}}"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>aenjeaye</td>
                    <td>lnhilokpokpd</td>
                    <td>Adam</td>
                    <td>Jl. Akasia No 9</td>
                    <td>20-05-2003</td>
                    <td>Laki-laki</td>
                    <td>081265573211</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>sabebin</td>
                    <td>erhirkvkui</td>
                    <td>Mark</td>
                    <td>Jl. Pahlawan No 29</td>
                    <td>20-05-2001</td>
                    <td>Laki-laki</td>
                    <td>081265505511</td>
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
