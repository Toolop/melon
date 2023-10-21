<!DOCTYPE html>
<html lang="en">
<head>
    @include('global.global')
    <title>Kasir Hero</title>
</head>
<body>
    <div class="bg-main-color main-card">
        <h1>Kasir Hero</h1>
        <br><br>
        <form method="POST" action="{{url('home/'.$model->id)}}" class="form-bayar" >
          @csrf
          @method('PUT')
            <div class="input-group flex-nowrap">
                <span class="input-group-text material-symbols-outlined fill text-primary pointer flex" id="addon-wrapping">shopping_cart</span>
                <input type="text" class="form-control" placeholder="Jumlah" value="{{$model->jumlah}}"  name="jumlah" required>
              </div>
              <br>
              <div class="input-group flex-nowrap">
                <span class="input-group-text material-symbols-outlined fill text-primary pointer flex" id="addon-wrapping">attach_money</span>
                <input type="text" class="form-control" placeholder="Berat" value="{{$model->berat}}" name="berat" required>
              </div>
              <br>
              <div class="input-group flex-nowrap">
                <span class="input-group-text material-symbols-outlined fill text-primary pointer flex" id="addon-wrapping">person</span>
                <input type="text" class="form-control" placeholder="Nama Pembeli" value="{{$model->pembeli}}" name="pembeli">
              </div>
              <br>
              <div class="test">
                <button class="btn btn-danger" type="submit">Edit</button>
              </div>
        </form>
    </div>
    
</body>
</html>