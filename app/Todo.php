<?

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model{
    protected $table = 'todo';
    protected $filliable = ['todo','category','user_id', 'description'];
}