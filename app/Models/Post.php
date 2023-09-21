<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    use HasFactory,Sluggable;    
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['author','category'];// eps 12

    // public function scopeFilter($query){
    //     if(request('search')){//eps 13
    //         return $query->where('title','like','%' . request('search') . '%')
    //         ->orWhere('body','like','%' . request('search') . '%');
    //     }
    // // }
    // public function scopeFilter($query, array $filters){
    //     if(isset($filters['search']) ? $filters['search'] : false){//if else
    //         return $query->where('title','like','%' . $filters['search'] . '%')
    //         ->orWhere('body','like','%' . $filters['search'] . '%');
    //     }
    // }
    public function scopeFilter($query, array $filters){    
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category',function($query) use ($category) {
                 $query->where('slug', $category);
             });
         });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
             $query->whereHas('author',fn($query) =>
                 $query->where('username', $author)
            )
         );
    }

    public function category(){//menghubungkan model post dengn kategori
        return $this->belongsTo(Category::class); //relasi dari 1 to 1 (belongsto)

    }
    public function author(){
        return $this->belongsTo(User::class,'user_id'); //relasi dari 1 to 1 (belongsto) 1 post hanya dimiliki oleh 1 user

    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
