<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'image',
    ];

    // public function update(Request $request, $id)
    // {
    //     $post = Post::findOrFail($id);
    //     $post->image = $request->image;
    //     $post->update();

    //     return redirect("/user");
    // }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');
            Post::create(['image' => basename($path)]);

            return redirect('post')->with('filename', basename($path));
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }

        Model::insert([
            "image" => $path
        ]);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
