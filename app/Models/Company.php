<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes,SoftDeletes;
    protected $fillable = ['name','phone','adress','resident','birthday','satus'];

//    protected $table='My_companies';
//    protected $primaryKey = 'c_id';
//    public $incrementing = false;
//    public $timestamps = false;
//    protected $attributes= [
//        'status'=>'active'
//    ];
//

}
