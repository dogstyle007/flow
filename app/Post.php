<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
        use Sluggable;
    
     protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    protected $hidden = [];
    
    protected $fillable = [ 'title', 'body', 'user_id'];
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

}
