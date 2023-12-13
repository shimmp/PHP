<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    public function category()
{
    return $this->belongsTo(Category::class);
}
protected $fillable = [
    'title',
    'body',
    'category_id'
];
    use SoftDeletes;
    use HasFactory;
}
