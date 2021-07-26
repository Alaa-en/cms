<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class post extends Model
{

    use softDeletes;

    protected $dates=['deleted_at'];

    protected $fillable = ['title','category_id','description','user_id'];
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function Category()
        {
            return $this->belongsTo('App\Category','category_id');
        }

        
}
