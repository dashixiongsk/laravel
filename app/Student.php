<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016/9/9
 * Time: 14:26
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    protected  $table = 'student';
    protected $primarykey='id';
    public $timestamps = false;

}