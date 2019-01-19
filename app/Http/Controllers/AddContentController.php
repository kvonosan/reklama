<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\DB;

class AddContentController extends Controller
{
    public function show()
    {
        if (!Auth::guest())
        {
            return view('add_content');
        } else
        {
            return view('error');
        }
    }
    
    public function add(Request $request)
    {
        if (!Auth::guest())
        {
            if ($request->isMethod('post'))
            {
                if ($request->input('name') !==NULL)
                {
                    if ((!$request->hasFile('image')) && ($request->input('video') === NULL)
                        && ($request->input('data') === NULL))
                    {
                        $mess = "Выберите картинку, видео, или добавьте текст!";
                        return view('add_content', ['mess' => $mess]);
                    }
                    
                    $image_name = "";
                    if ($request->hasFile('image'))
                    {
                        $file = $request->file('image');
                        $image_name = time()."-".$file->getClientOriginalName();
                        $file->move('img', $image_name);
                        $filename = public_path(sprintf('img/%s', $image_name));
                        $image = Image::make($filename)->resize(600, 400)->save();
                    }
                    
                    $like_id = DB::table('likes')->insertGetId(['count' => 0, 'content_id' => 0]);
                    $dislike_id = DB::table('dislikes')->insertGetId(['count' => 0, 'content_id' => 0]);
                    $id = DB::table('contents')->insertGetId(
                            ['image_path' => $image_name, 
                                'name' => $request->input('name'),
                                'video_url' => $request->input('video'),
                                'data' => $request->input('data'),
                                "created_at" =>  \Carbon\Carbon::now(),
                                "updated_at" => \Carbon\Carbon::now(),
                                "like" => $like_id,
                                "dislike" => $dislike_id,
                                "view" => 0]);
                    
                    DB::table('likes')->where('id', $like_id)->update(['content_id' => $id]);
                    DB::table('dislikes')->where('id', $dislike_id)->update(['content_id' => $id]);
                    
                    $uploaded = "Реклама добавлена!";
                    return view('add_content', ['uploaded' => $uploaded]);
                } else
                {
                    $mess = "Название рекламы должно быть заполнено!";
                    return view('add_content', ['mess' => $mess]);
                }
            }
        }
    }
}
