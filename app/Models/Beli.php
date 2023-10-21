<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    use HasFactory;
    protected $table = 'beli';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['jumlah','harga','pembeli','berat'];

    public function scopeUpdateBeli($query,$request,$id){
        return $query->where("id",'=',$id)->update(['jumlah' => $request->jumlah,
                                                    'pembeli' => $request->pembeli, 
                                                    'berat' => $request->berat,
                                                    'harga' => $request->harga,
                                                   ]);
    }
}
