 <div style="overflow-x:auto;" class="w-75">
   <table class="table body2 surface center table w-100">
     <thead>
       <tr class="">
         <th class="text-center">No</th>
         <th class="text-center">Pembeli</th>
         <th class="text-center">Jumlah</th>
         <th class="text-center">Berat</th>
         <th class="text-center">Harga</th>
         <th class="text-center">Keterangan</th>
       </tr>
     </thead>
     <tbody>
       @foreach ($listMelon as $key => $list)
         <tr class="tr-context-menu">
           <th scope="row" class="align-middle text-center">{{ $key + 1 }}</th>
           <td class="align-middle">{{ $list->pembeli }}</td>
           <td class="align-middle text-center">{{ $list->jumlah }}</td>
           <td class="align-middle text-center">{{ $list->berat }}</td>
           <td class="align-middle text-center">{{ $list->harga }}</td>
           <td class="justify-content-center align-middle text-center">
             <a href="{{ url('home/' . $list->id) }}">
               <div class="material-symbols-outlined fill text-info pointer">edit</div>
             </a>
             <form method="post" action="{{ url('home/' . $list->id) }}">
               @csrf
               @method('delete')
               <button onclick="return confirm('Anda yakin ingin menghapus list ini?');" type="submit"
                 class="button-none">
                 <div class="material-symbols-outlined fill text-danger pointer">delete</div>
               </button>
             </form>
           </td>
         </tr>
       @endforeach
     </tbody>
   </table>

 </div>
