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
                    <th scope="col">Nama Type</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pesawat</td>
                    <td>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed do eiusmod
                    </td>
                    <td class="d-flex justify-content-between">
                        <a href="{{route('Tambah.type')}}"><i class="fas fa-plus"></i></a>
                        <a href="{{route('Edit.type')}}"><i class="fas fa-pen"></i></a>
                        <a href="{{route('Detail.type')}}"><i class="fas fa-eye"></i></a>
                        <a href=""><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kereta</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    
                    </td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href=""><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
