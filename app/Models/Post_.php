<?php

namespace App\Models;

use PhpParser\Node\Stmt\Static_;

class Post
{
    private static $blogPosts = [
        [
            'title' => 'Blog Ke Satu',
            'slug' => 'blog-ke-satu',
            'author' => 'Yama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores doloremque officia tenetur suscipit at hic sit eligendi voluptas distinctio magni voluptates, deleniti ullam ipsa velit impedit praesentium reprehenderit nisi! Nulla ullam nihil deserunt fugiat non soluta eaque voluptatibus nisi fugit est eligendi, neque quidem ut, facilis assumenda porro suscipit recusandae explicabo maiores possimus? Facere, excepturi debitis obcaecati necessitatibus quas autem rerum rem a fugit iste! Ex suscipit tempore, aut eius quam sint perferendis atque labore explicabo veritatis nisi laboriosam dolorum eveniet sunt dolores quos error. Recusandae ea delectus est dolor nesciunt, qui veniam nulla, suscipit, architecto magnam amet tempora culpa?'
        ],
        [
            'title' => 'Blog Ke Dua',
            'slug' => 'blog-ke-dua',
            'author' => 'Wiwid',
            'body' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta velit, quibusdam quod consequatur eos non quaerat porro culpa repellendus quasi rem vel fuga veniam, at, perspiciatis cumque ex quis eveniet facilis. Aliquam iure unde consequuntur exercitationem neque possimus praesentium repellendus alias cupiditate nam voluptate facilis iusto minus perspiciatis nisi, eveniet mollitia sunt hic sequi sint amet. Quisquam beatae sequi fugiat neque excepturi aut repellendus non, et, deserunt repudiandae consequatur. Vero repellendus nemo sit officia dolor sunt assumenda voluptatibus incidunt! Recusandae accusamus ut asperiores sit, repudiandae totam vel porro nostrum, error sed deleniti dignissimos odit, facere perferendis incidunt earum ea. Tempore, harum. Ipsa, debitis consequatur, nam repellendus labore vitae facere vero eaque explicabo consequuntur dolorem dicta iure dolorum quod iusto amet aperiam doloribus dolores perferendis adipisci officiis! Ex tenetur pariatur quo maiores distinctio dicta, possimus quidem facere nesciunt eius consequatur. Debitis impedit provident alias amet quibusdam reiciendis numquam maxime enim! Dolore veritatis nesciunt, ullam aliquid, mollitia provident sit cumque explicabo aut adipisci libero cum officia suscipit architecto facilis exercitationem! Sed nulla et aspernatur nam dolores expedita, deleniti ullam repellendus ex dicta doloremque amet quos eveniet? Nemo dolor neque voluptate rem iusto necessitatibus nam perspiciatis quae fugit. Maiores delectus voluptatum id eveniet?
            '
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
