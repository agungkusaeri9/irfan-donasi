<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id','visitor'];

    public function category()
    {
        return $this->belongsTo(PostCategory::class,'post_category_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function image()
    {
        if($this->image)
        {
            return asset('storage/' . $this->image);
        }else{
            return asset('assets/frontend/images/project-1.jp');
        }
    }
}
