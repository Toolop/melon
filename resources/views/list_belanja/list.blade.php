<!DOCTYPE html>
<html lang="en">
<head>
    @include('global.global')
    <title>Kasir Hero</title>
</head>
<body>
    <br>
    <br>
    <h2>list Semua Harga</h2>
    <br><br>

    @include('listPembelian.list')

    <a href="{{url('/home')}}">Home</a>
    
</body>
</html>