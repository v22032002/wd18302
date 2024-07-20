<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    protected $table="Tên bảng";
//    // Dổi Pkey cho bang
//    protected $primaryKey = "tên khóa chính khác vs id";
//    protected $keyType = "Kieu du kieu cua khoa chinh";
//    public $incrementing = false; // tắt trang thái tăng tự
//    // Động cho khóa chính
//    protected $connection = "tên db mơi";
// Mac dinh gan
    protected $fillable = [
        'title',
        'content'
    ] ;
}
