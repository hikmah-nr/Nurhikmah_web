<?php

namespace App\Models;


class Post
{

  private static $blog_posts =[
    
    [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-Posts-Pertama",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo debitis veritatis molestias quod, 
         dignissimos nostrum minus ducimus officia officiis dolores expedita nobis optio cupiditate et nihil soluta
         voluptatem laborum, voluptas quasi. Consequatur natus assumenda accusantium voluptate reprehenderit atque
         facilis illo ex harum excepturi commodi, ullam neque sed laboriosam cupiditate incidunt minus, obcaecati ea,
         hic praesentium suscipit labore. Eveniet nemo ad ducimus eligendi tenetur sed, voluptatibus quaerat
         consectetur deserunt assumenda at? Rerum cumque voluptate illo dolore quis sed mollitia pariatur distinctio?"
    ],
    [
        "title" => "Judul Post kedua",
        "slug" => "Judul-Posts-Kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum soluta quia consequuntur,
        aut dolorem optio! Repudiandae voluptas expedita asperiores quae suscipit aliquam placeat provident
        perferendis beatae itaque, eum, porro aut odio? Illum hic fuga iusto ratione unde earum facere, ut,
        dignissimos esse perferendis blanditiis nihil, excepturi obcaecati inventore? Tempora esse, reprehenderit,
        consequatur consectetur neque dolor quibusdam quo vero laborum porro nisi? Quas aspernatur vitae fuga suscipit labore,
        quos quasi iusto, eos ab explicabo necessitatibus. Itaque praesentium sed dolorum rerum at, provident doloremque
        adipisci iure deserunt maxime quam sint neque, commodi labore quisquam eligendi consectetur molestiae, libero eos quas.
        Voluptatem."
    ],
];

public static function all()
{
    return collect (self::$blog_posts);
}
public static function find($slug)
{
    $posts = static::all();

     return $posts->firstwhere('slug', $slug);
}
}
