<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function show()
    {
        $contents = DB::table('contents')->orderBy('id', 'desc')->paginate(5);
        foreach($contents as $content)
        {
            if (DB::table('likes')->where('id', '=', $content->like)->exists())
            {
                $content->like_count = DB::table('likes')->where('id', '=', $content->like)->get()[0]->count;
            }
            if (DB::table('dislikes')->where('id', '=', $content->dislike)->exists())
            {
                $content->dislike_count = DB::table('dislikes')->where('id', '=', $content->dislike)->get()[0]->count;
            }
            if (DB::table('user_likes')->where('content_id', '=', $content->id)->exists())
            {
                $content->type = DB::table('user_likes')->where('content_id', '=', $content->id)->get()[0]->type;
            }
            DB::table('contents')->where('id', '=', $content->id)->increment('view');
            
            if ($content->data !== "")
            {
                htmlspecialchars($content->data);
                $url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
                $string = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $content->data);
                $content->data = $string;
            }
        }
        
        return view("content", ['contents' => $contents]);
    }
}
