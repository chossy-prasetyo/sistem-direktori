<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explorer extends Model
{
  use HasFactory;
  protected $table = 'explorer';
  public $timestamps = false;

  public static function f01_get_main_folder()
  {
  	return self::whereNull('deleted_at')
  							->where('level', 1)
  							->where('type', 'folder')
  							->orderBy('order');
  }

  public static function f02_get_content_folder($folder)
  {
  	return self::whereNull('deleted_at')
  							->where('parent', $folder)
  							->orderBy('order');
  }
}
