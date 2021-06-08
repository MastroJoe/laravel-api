<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
  protected $fillable = [
    'name',
    'description',
    'governing_body',
    'team_members',
    'equipment',
    'olympic'
  ];
}
