<?php

namespace App\Http\Controllers;


use App\Post;
use App\Http\Requests\PostRequest;
use App\Tag;

class AdminPostController extends Controller
{
    /**
     * @var Post
     */
    private $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(20);
        return view("admin.post.index",['posts'=>$posts]);
    }

    public function create()
    {
        return view("admin.post.create");
    }

    public function store(PostRequest $request)
    {

        $post = $this->post->create($request->all());
        $post->tags()->sync($this->getTagsId($request->tags));
        return redirect()->route('admin.post.index');
    }
    public function edit($id)
    {
        $post = $this->post->find($id);
        return view("admin.post.edit",["post" => $post]);
    }
    public function update($id, PostRequest $request)
    {
        $post = $this->post->find($id);
        $post->update($request->all());
        $post->tags()->sync($this->getTagsId($request->tags));
        return redirect()->route('admin.post.index');
    }
    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.post.index');
    }
    private function getTagsId($tags)
    {
        $tagList = array_filter(array_map('trim',explode(',',$tags)));
        $tagsIDs = array_map(function($tagName){
            return Tag::firstOrCreate(['name' => $tagName])->id;},$tagList);
        return $tagsIDs;
    }
}
