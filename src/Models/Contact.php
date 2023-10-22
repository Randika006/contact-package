<?php

namespace Randika\Contact\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //protected $guarded=[];
    public $timestamps = false;
    protected $table = 'contacts';
    protected $primaryKey='id';
    protected $fillable =['name','email','message'];

}
