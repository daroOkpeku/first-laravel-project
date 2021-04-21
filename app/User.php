<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

// class User extends Model
class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'picture',
    ];
  
    //  public function posts(){
    //      return $this->hasMany(Post::class);
    //  }

    public static function upLoadadImage($pic)
    {
         $file_name = $pic->getClientOriginalName();
         $pic->storeAs('images', $file_name, 'public');
          (new self)->DeleteOldImage();
        // User::find(1)->update(['picture'=> $file_name]);
        /** auth()->user()-> to update the authenticated user in the DB */
        auth()->user()->update(['picture'=> $file_name]);
    }

     protected function DeleteOldImage()
  {
     Storage::delete("public/images/". auth()->user()->picture);
     
  }

  public function todos (){
         return $this->hasMany(Todo::class);
     }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

}

  // public function  setPasswordAttribute($password)
    // {
    //     $this->attribute['password'] =  bcrypt($password);
    // }
    // public function getNameAttribute ($name)
    // {
    //    return  ucfirst($name);
    // }