<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $primaryKey = 'task_id';
    protected $table = 'task';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['task_name', 'status', 'created_at', 'completed_at'];
    public $timestamps = false;
}
