<!DOCTYPE html>
<html lang="en">

<head>
  @include('global.global')
  <title>Kasir Hero</title>
</head>

<body>
  <br>
  <br>
  <div class="flex justify-content-between align-items-center w-75">
    <a href="{{ url('/home') }}"><button
        class="btn btn-primary flex align-items-center justify-content-center gap-2"><svg
          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
        <p class="m-0">Back</p>
      </button>
    </a>
    <h2>list Semua Harga</h2>
    <div class="div"></div>
  </div>

  <br><br>

  @include('listPembelian.list')


</body>

</html>
