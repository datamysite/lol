<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Blogs;

class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    public static function create(array $data){
        $c = new Categories;
        $c->name = $data['name'];
        $c->parent_id = $data['parent_id'];
        $c->type = $data['category_type'];
        $c->max_discount = $data['max_discount'];
        $c->name_ar = $data['name_ar'];
        $c->order = $data['category_order'];
        $c->created_by = Auth::guard('admin')->id();
        $c->save();

        return $c->id;
    }

    public function parentCategory()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function subCategories(){
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }

    public function blogs(){
        return $this->hasMany(Blogs::class, 'category_id', 'id');
    }

}
