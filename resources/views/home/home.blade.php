<!DOCTYPE html>
<html lang="en">

<head>
  @include('global.global')
  <title>Kasir Hero</title>
</head>

<body>
  <div class="bg-main-color main-card w-100">
    <h1>Kasir Hero</h1>
    <br><br>
    <form method="POST" action="{{ url('/home') }}" class="form-bayar">
      @csrf
      <div class="input-group flex-nowrap">
        <span class="input-group-text material-symbols-outlined fill text-primary pointer flex"
          id="addon-wrapping">shopping_cart</span>
        <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" required>
      </div>
      <br>
      <div class="input-group flex-nowrap">
        <span class="input-group-text material-symbols-outlined fill text-primary pointer flex"
          id="addon-wrapping">attach_money</span>
        <input type="text" class="form-control" placeholder="Berat" name="berat" required>
      </div>
      <br>
      <div class="input-group flex-nowrap">
        <span class="input-group-text material-symbols-outlined fill text-primary pointer flex"
          id="addon-wrapping">person</span>
        <input type="text" class="form-control" placeholder="Nama Pembeli" name="pembeli">
      </div>
      <br>
      <div class="input-group flex-nowrap">
        <span class="input-group-text material-symbols-outlined fill text-primary pointer flex"
          id="addon-wrapping">attach_money</span>
        <input type="text" class="form-control" value="40000" name="harga">
      </div>
      <br>
      <div class="test">
        <button class="btn btn-danger" type="submit">Simpan</button>
      </div>
    </form>
  </div>
  <br><br>
  <div class="pembelian">
    <h2>Total Pembelian</h2>
    <br>
    <div class="justify-content-center">
      <div class="card">
        <span class="material-symbols-outlined fill text-danger pointer flex m-2"
          id="addon-wrapping">shopping_cart</span>
        <p>{{ $jumlahMelon }}</p>
        <p>Total Jumlah</p>
      </div>
      <div class="card">
        <span class="material-symbols-outlined fill text-alert pointer flex m-2" id="addon-wrapping">attach_money</span>
        <p>{{ $beratMelon }}</p>
        <p>Total Berat</p>
      </div>
      <div class="card">
        <span class="material-symbols-outlined fill text-primary pointer flex m-2" id="addon-wrapping">person</span>
        <p>{{ $hargaMelon }}</p>
        <p>Total Harga</p>
      </div>
    </div>
  </div>
  <br>

  <h2>list Semua Harga</h2>
  <br><br>

  @include('listPembelian.list')



  <a href="{{ url('/list') }}" class="w-75 m-4"><button class="btn btn-primary w-100">Lihat Semua Harga</button></a>

</body>

</html>
