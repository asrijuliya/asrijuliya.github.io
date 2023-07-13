<?php

namespace App\Models;


class Post
{ 
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Asri Juliya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. A sunt fugiat ipsam tenetur amet, quisquam dicta, tempore aliquid reiciendis eaque fuga sit sed quam eos nihil quas hic deleniti. Voluptatum, illum vero! Minus nostrum enim dolores fugiat facilis repellat necessitatibus reiciendis vitae non expedita ad iusto, quasi odio deleniti nesciunt ex ipsum vero dolor, laudantium tempore in. Unde iste facere nihil excepturi incidunt nesciunt illo voluptate illum maxime, doloremque vero, repudiandae animi sed. Modi, enim vel molestias eius laboriosam a!"
        ],
        [
            "title" => "Judul Post Indi",
            "slug" => "judul-post-kedua",
            "author" => "Indi Nur Hidayati",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tenetur eius, distinctio quod velit mollitia esse inventore optio odio fugiat error voluptatibus doloremque animi maxime illo facilis libero voluptate numquam asperiores nobis ex iusto eligendi aperiam dolore. Recusandae, a voluptate amet debitis quasi error molestiae tempora? Quia saepe consectetur doloribus, repellendus similique ut placeat rerum corrupti repellat cupiditate reprehenderit atque minima laboriosam delectus, quae quod maiores natus amet distinctio officia quam ex esse unde perferendis. Omnis laboriosam error eligendi numquam eos nam nobis obcaecati sit tenetur esse illo, sunt, eaque et natus ipsam fuga quas aut quo sed praesentium assumenda."
        ],
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
