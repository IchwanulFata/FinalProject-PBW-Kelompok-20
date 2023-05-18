<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonKetua extends Model
{
    protected $table ='calon_ketua';
    protected $primaryKey ='id';
    protected $fillable = ['image','nama_calon', 'nis', 'visi', 'misi'];
    use HasFactory;
}
