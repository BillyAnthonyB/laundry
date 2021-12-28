<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class laundryModel extends Model
{
    function get_transaksi() {
        return DB::table('laundry_service.transaksi')->get();
    }

}
