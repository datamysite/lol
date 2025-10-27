<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatestUpdates;
use App\Models\LatestUpdateImages;

class UpdateController extends Controller
{
    public function index()
    {
        //$data['menu'] = 'blogs';

        $data['data'] = LatestUpdates::orderBy('id', 'desc')->paginate(10);

        return view('admin.updates.index', ['data' => $data, 'menu' => 'updates']);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = LatestUpdates::orderBy('id', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('admin.updates.load', ['data' => $data]);
    }


    public function create(Request $request)
    {
        $data = $request->all();

            $lu = new LatestUpdates;
            $lu->heading = $data['heading'];
            $lu->created_by = '1';
            $lu->save();

            $id = $lu->id;

            $image_get = $request->images;
            $i = 1;
            foreach ($image_get as $image) {
                
                $ext = $image->getClientOriginalExtension();
                $newname = $i.$id . date('dmyhis') . '.' . $ext;

                $image->move(public_path() . '/storage/updates', $newname);

                $b = new LatestUpdateImages;
                $b->update_id = $id;
                $b->image = $newname;
                $b->save();

                $i++;
            }

        return redirect()->back()->with('success', 'Updaed.');
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['heading']) || empty($data['link'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {
            $id = base64_decode($data['blog_id']);

            $up = LatestUpdates::find($id);
            $up->heading = $data['heading'];
            $up->link = $data['link'];
            $up->save();


            if ($request->hasFile('edit_mblog_image')) {
                $file = $request->file('edit_mblog_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id . date('dmyhis') . '.' . $ext;

                $file->move(public_path() . '/storage/updates', $newname);

                $b = LatestUpdates::find($id);
                $b->banner = $newname;
                $b->save();
            }

            $response['success'] = 'success';
            $response['message'] = 'Successfully Updated.';
        }

        echo json_encode($response);
    }

    public function edit($id)
    {
        $id = base64_decode($id);

        $data = LatestUpdates::find($id);


        return view('admin.updates.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        LatestUpdates::destroy($id);

        $response = 'success';

        return $response;
    }
}
