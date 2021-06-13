<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Dessinateur extends Model
{
    use HasFactory;

    //get the list of dessinateur stored in the dessinateur table.
    public function getAll()
    {
        # code...
        $dessinateurs = DB::table('dessinateur')->get();
        return $dessinateurs;
    }
}
