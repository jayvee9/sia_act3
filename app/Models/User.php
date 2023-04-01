<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'instruments';
// column sa table
protected $fillable = [
'Guitars', 'Bass', 'Drums'
];
}