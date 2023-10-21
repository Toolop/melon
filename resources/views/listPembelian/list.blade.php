 <div style="overflow-x:auto;">
    <table class="table body2 surface center table-borderless">
        <thead>
          <tr class="">
            <th scope="col">No</th>
            <th scope="col">Pembeli</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Berat</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            @foreach($listMelon as $key=>$list)
            <tr class="tr-context-menu">
                <th scope="row" class="align-middle text-center">{{$list->id}}</th>
                <td class="align-middle">{{$list->pembeli}}</td>
                <td class="align-middle text-center">{{$list->jumlah}}</td>
                <td class="align-middle text-center">{{$list->berat}}</td>
                <td class="align-middle text-center">{{$list->harga}}</td>
                <td class="justify-content-center align-middle text-center">
                    <a href="{{url('home/'.$list->id)}}"><div class="material-symbols-outlined fill text-info pointer">edit</div></a> 
                    <form method="post" action="{{ url('home/'.$list->id) }}">
                        @csrf
                        @method('delete')
                            <button onclick="return confirm('Anda yakin ingin menghapus list ini?');" type="submit" class="button-none">
                                <div class="material-symbols-outlined fill text-danger pointer">delete</div>
                            </button>
                        </form>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
  
    </div>