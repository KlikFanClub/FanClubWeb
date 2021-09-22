<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  use HasFactory;

  protected $fillable = [

    'name',
    'profile-picture',
    'bio',
    'website',
    'email',
    'instagram',
    'facebook',
    'twiter',
    'other_socials',
    'highlighted'
  ];

  public function workarts()
  {
    return $this->hasMany(Workart::class);
  }
}
