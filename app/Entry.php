<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Entry extends Model
{
    use SoftDeletes;

    protected $guarded = [];
       
    
    public function categories()
    {
        return $this->hasMany(Category::class, 'entry_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'entry_id');
    }


    // public function fillData($data)
    // {
    //     if ($data) {
    //         $this->name = $data['name'];
    //         $this->website = $data['website'];
    //         $this->map_url = $data['map_url'];
    //         $this->designer_and_others = $data['designer_and_others'];
    //         $this->cost = $data['cost'];
    //         $this->credits = $data['credits'];
    //         $this->short_description = $data['short_description'];
    //         $this->long_description = $data['long_description'];
    //         $this->completed_date = $data['completed_date'];
    //         $this->floor_area = $data['floor_area'];
    //         $this->question = $data['question'];
    //     }
    // }
}