<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insert(Request $request, $id_post)
    {
        $data = $request->validate(
            [
                'comment' => 'required'
            ]
        );
        $data['id_post'] = $id_post;
        Comment::create($data);
        return redirect()->back();
    }
}
