<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
  use HasFactory;
  protected $fillable = [
    'id',
    'task_id',
    'value'
  ];

  public function task()
  {
    return $this->belongsTo(Task::class, "task_id");
  }
}
