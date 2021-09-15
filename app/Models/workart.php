<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workart extends Model
{
  use HasFactory;

  protected $fillable = [

    'title',
    'imageworkart',
    'edition',
    'price',
    'technique',
    'theme',
    'others',
    'category'
  ];

  public function artist()
  {
    return $this->belongsTo(Artist::class);
  }
}
