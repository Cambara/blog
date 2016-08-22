<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function posts()
    {
        $posts = [
            0 => ["title" => "Lorem ipsum dolor sit amet", "text" =>"Curabitur eget blandit velit. Nunc quis dapibus mi, eu finibus enim. Maecenas odio leo, eleifend in porttitor quis, ornare sit amet lacus. Mauris vel sapien magna. Nullam pretium ullamcorper sollicitudin. Ut a luctus neque. Proin lectus nunc, eleifend ut sagittis nec, lacinia et massa."],
            1 => ["title" => "Donec ante elit, viverra in est in, mollis congue nulla", "text" =>"Ut tincidunt vel ex et eleifend. Vestibulum tincidunt ante eu eros interdum pretium. Donec tempor cursus libero vulputate tempor. Praesent dictum auctor semper. Integer posuere blandit enim, vitae faucibus metus egestas sit amet. Praesent vestibulum malesuada massa eu viverra. Nulla consectetur ante vitae massa maximus, quis efficitur risus porta. Donec magna augue, ornare et rutrum vel, fringilla at sapien. Maecenas volutpat ipsum sed ex sagittis hendrerit sed ut sem. Vestibulum ac lectus mauris. Nulla venenatis venenatis venenatis."],
            2 => ["title" => "Quisque suscipit nibh vel diam", "text" =>"Curabitur interdum et velit a rhoncus. Ut in elementum libero. Fusce leo mauris, faucibus ac odio id, tristique scelerisque diam. Nunc mollis augue et turpis sagittis convallis. Ut in nisi pellentesque erat laoreet tristique. Duis ullamcorper, dui sed facilisis molestie, nisi nibh finibus eros, ac laoreet lacus nulla id enim. Donec posuere ante nec vulputate porttitor. In hac habitasse platea dictumst."],
            3 => ["title" => "Ut metus metus, malesuada at mi a", "text" =>"Morbi velit odio, imperdiet sit amet turpis vitae, sagittis commodo velit. In ultricies rhoncus eros, volutpat bibendum orci placerat non. Quisque sed enim at felis facilisis volutpat non id nisi. Pellentesque tincidunt nulla sit amet nisl molestie pulvinar. Suspendisse sit amet egestas massa. Curabitur in ligula neque. Pellentesque placerat dui id dignissim vehicula. Proin ut risus mi."],

        ];
        return view("post.list",["posts" => $posts]);
    }
}
