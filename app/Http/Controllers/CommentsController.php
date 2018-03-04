<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);

        $blacklists = [
            'gs',
            'bjk',
            'fb'
        ];

        $comment = collect($request->get('comment'));

        $filtered = $comment->search(function ($value, $key) {
            return $value == 'gs';
        });

        dd($filtered);

        \App\Comment::create([
            'user_id' => auth()->user()->id,
            'news_id' => $request->get('news_id'),
            'comment' => $comment,
        ]);

        return 'OK';
    }
}
