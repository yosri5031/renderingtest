<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'original_file_name',
        'file_path',
        'type',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
