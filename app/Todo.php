<?php

namespace App;
// use Illuminate\Foundation\Auth\TodoModel as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Steps;

class Todo extends Model
{
//  /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */

    
   protected $fillable =['title','completed', 'user_id', 'description' ];

   public function steps(){
         return $this->hasMany(Step::class);
     }

    
}
 