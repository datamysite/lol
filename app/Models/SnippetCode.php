<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;
use App\Models\Admin;
use Auth;

class SnippetCode extends Model
{
    use HasFactory;

    protected $table = 'snippet_code';

    public static function create(array $data){
        $c = new SnippetCode;
        $c->name = $data['name'];
        $c->position = $data['position'];
        $c->page_url = empty($data['page_url']) ? '' : $data['page_url'];
        $c->snippet_code = $data['snippet_code'];
        $c->created_by = Auth::guard('admin')->id();
        $c->save();

        return $c->id;
    }

    public static function snippet_update($id, array $data){
        $c = SnippetCode::find($id);
        $c->name = $data['name'];
        $c->position = $data['position'];
        $c->page_url = empty($data['page_url']) ? '' : $data['page_url'];
        $c->snippet_code = $data['snippet_code'];
        $c->created_by = Auth::guard('admin')->id();
        $c->save();

        return $c->id;
    }

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }
}
