<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $postObj = new Post();

        $posts = $postObj->join('categories', 'categories.id', '=', 'posts.category_id')
            ->select('posts.*', 'categories.name as category_name')
            ->where('posts.status', 1)
            ->orderby('posts.id', 'desc')
            ->get();

        $categories = Category::all();

        return view('user.index', compact('posts', 'categories'));
    }

    public function sigle_post_view($id)
    {
        $postObj = new Post();

        $post = $postObj->join('categories', 'categories.id', '=', 'posts.category_id')
            ->select('posts.*', 'categories.name as category_name')
            ->where('posts.id', $id)
            ->first();

        $commentObj = new PostComment();

        $comments = $commentObj->join('users', 'users.id', '=', 'post_comments.user_id')
            ->select('post_comments.*', 'users.name as user_name', 'users.photo as user_photo')
            ->where('post_comments.post_id', $id)
            ->paginate(3);

        return view('user.single_post_view', compact('post', 'comments'));
    }

    public function filter_by_category($id)
    {
        $postObj = new Post();

        $posts = $postObj->join('categories', 'categories.id', '=', 'posts.category_id')
            ->select('posts.*', 'categories.name as category_name')
            ->where('posts.status', 1)
            ->where('posts.category_id', $id)
            ->orderby('posts.id', 'desc')
            ->get();

        return view('user.filter_by_category', compact('posts'));
    }

    public function comment_store(Request $request, $id)
    {
        $data = [
            'post_id' => $id,
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
        ];

        PostComment::create($data);

        $notify = ['message' => 'Comment Added Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }
}
