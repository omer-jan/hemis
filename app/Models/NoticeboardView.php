<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NoticeboardView extends Model
{
    protected $table ='noticeboard_view';
    protected $fillable =[
        'user_id',
        'announcement_id',
          ];
    public function announcement()
    {
        return $this->belongsTo(\App\Models\Announcement::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function date()
    {
        Carbon::setLocale('fa');
        return  Carbon::parse($this->created_at)->diffForHumans();
    }
}
