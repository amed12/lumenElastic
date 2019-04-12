<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Users extends Model implements Authenticatable{
    use Authenticatable;
    protected $filliable = ['username','email','password','userimage'];
    protected $hidden = ['password'];

    public function todo(){
        return $this->hasMany('App\Todo','user_id');
    }
    
}