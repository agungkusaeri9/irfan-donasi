<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $guarded = ['id','visitor'];
    protected $dates = ['deleted_at','time_up'];

    public function category()
    {
        return $this->belongsTo(ProgramCategory::class,'program_category_id','id');
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
            return asset('assets/img/news/img01.jpg');
        }
    }

    public function galleries()
    {
        return $this->hasMany(ProgramGallery::class);
    }

    public function budgets()
    {
        return $this->hasMany(ProgramBudget::class,'program_id');
    }

    public function transactions_success()
    {
        return $this->hasMany(Transaction::class,'program_id','id')->where('is_verified',1)->latest();
    }

    public function count_day()
    {
        if($this->time_up)
        {
            $now = Carbon::now();
            return $this->time_up->diffInDays($now);
        }else{
            return "0";
        }
    }

    public function deficiency()
    {
        $nominal = $this->donation_target;
        $ready = $this->transactions_success()->sum('nominal');
        if($nominal < $ready)
        {
            return '0';
        }else{
            return $nominal - $ready;
        }
    }

    public function percent()
    {
        $nominal = $this->donation_target;
        $ready = $this->transactions_success()->sum('nominal');
        $percent = ($ready/$nominal) * 100;
        return $percent;
    }

    public function scopeActive($query)
    {
        return $query->where('status',1);
    }

}
