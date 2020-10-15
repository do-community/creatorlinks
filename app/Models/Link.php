<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'description',
        'thumbnail',
        'enabled',
        'clicks'
    ];

    public function changeStatus(bool $status)
    {
        $this->enabled = $status;
        $this->save();
    }

    public function addClick()
    {
        $this->clicks++;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
