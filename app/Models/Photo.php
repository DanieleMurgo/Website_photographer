<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'thumb_path',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
