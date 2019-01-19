<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounterController extends Controller 
{
    public function Count(Request $request)
    {
        if (!Auth::guest() && $request->input('type') !== NULL &&
                $request->input('content') !== NULL && $request->input('id') !== NULL)
        {
            if ($request->input('type') == 'like')
            {
                if ($request->input('cancel') !== NULL)
                {
                    $like = DB::table('likes')->where('id', $request->input('id'))->value('id');
                    if ($like !== NULL)
                    {
                        //decrement likes on content and delete user_like if like exist
                        if (DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                            ['content_id', '=', $request->input('content')],
                            ['type', '=', 'like']])->exists())
                        {
                            DB::table('likes')->where('id', '=', $like)->decrement('count', 1);
                            DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                                ['content_id', '=', $request->input('content')],
                                ['type', '=', 'like']])->delete();
                        }
                        //echo likes
                        echo DB::table('likes')->where('id', $like)->value('count');
                    }
                } else
                {
                    $like = DB::table('likes')->where('id', $request->input('id'))->value('id');
                    if ($like !== NULL)
                    {
                        //delete dislike if exist
                        if (DB::table('user_likes')->where([['type', '=', 'dislike'],
                            ['content_id', '=', $request->input('content')],
                            ['user_id' , '=', Auth::User()->id]])->exists())
                        {
                            DB::table('user_likes')->where([['type', '=', 'dislike'],
                            ['content_id', '=', $request->input('content')],
                            ['user_id', '=', Auth::User()->id]])->delete();
                        }
                        //increment likes on content and insert user_like if like not exist
                        if (! (DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                            ['content_id', '=', $request->input('content')],
                            ['type', '=', 'like']])->exists()))
                        {
                            DB::table('likes')->where('id', '=', $like)->increment('count', 1);
                            DB::table('user_likes')->insert(['user_id' => Auth::User()->id,
                                'content_id' => $request->input('content'),
                                'type' => 'like']);
                        }
                        //echo likes
                        echo DB::table('likes')->where('id', $like)->value('count');
                    }
                }
            } else if ($request->input('type') == 'dislike')
            {
                if ($request->input('cancel') !== NULL)
                {
                    $dislike = DB::table('dislikes')->where('id', $request->input('id'))->value('id');
                    if ($dislike !== NULL)
                    {
                        //decrement dislikes on content and delete user_like if dislike exist
                        if (DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                            ['content_id', '=', $request->input('content')],
                            ['type', '=', 'dislike']])->exists())
                        {
                            DB::table('dislikes')->where('id', '=', $dislike)->decrement('count', 1);
                            DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                                ['content_id', '=', $request->input('content')],
                                ['type', '=', 'dislike']])->delete();
                        }
                        //echo likes
                        echo DB::table('dislikes')->where('id', $dislike)->value('count');
                    }
                } else
                {
                    $dislike = DB::table('dislikes')->where('id', $request->input('id'))->value('id');
                    if ($dislike !== NULL)
                    {
                        //delete like if exist
                        if (DB::table('user_likes')->where([['type', '=', 'like'],
                            ['content_id', '=', $request->input('content')],
                            ['user_id' , '=', Auth::User()->id]])->exists())
                        {
                            DB::table('user_likes')->where([['type', '=', 'like'],
                            ['content_id', '=', $request->input('content')],
                            ['user_id', '=', Auth::User()->id]])->delete();
                        }
                        //increment dislikes on content and insert user_like if dislike not exist
                        if (! (DB::table('user_likes')->where([['user_id', '=', Auth::User()->id],
                            ['content_id', '=', $request->input('content')],
                            ['type', '=', 'dislike']])->exists()))
                        {
                            DB::table('dislikes')->where('id', '=', $dislike)->increment('count', 1);
                            DB::table('user_likes')->insert(['user_id' => Auth::User()->id,
                                'content_id' => $request->input('content'),
                                'type' => 'dislike']);
                        }
                        //echo likes
                        echo DB::table('dislikes')->where('id', $dislike)->value('count');
                    }
                }
            }
        }
    }
}
