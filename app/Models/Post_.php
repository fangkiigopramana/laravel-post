<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Collection;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Sandika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam excepturi earum enim consequuntur eaque tenetur minima dolorem quis error! Nam atque consectetur est, libero architecto vel quasi, autem nobis dolor dolorum enim tenetur expedita minima quia assumenda impedit possimus laudantium nemo voluptatem pariatur animi, quaerat facere. Cupiditate omnis nostrum sapiente modi minima, vero dolor cumque quam. Laborum voluptatibus vero veritatis placeat, doloribus cupiditate maiores eius possimus repellendus omnis. A minima expedita quaerat libero excepturi dicta fuga neque, nisi aliquam! Saepe recusandae non eum dolor cumque neque excepturi culpa quos, asperiores molestiae nobis dolores provident optio eveniet voluptatem enim ad dignissimos."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Agung Fernanda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti facilis, eveniet quaerat minus voluptatem id aut officia aliquid eligendi error consectetur molestiae optio voluptatum quisquam ex nam, assumenda nemo nostrum neque sapiente consequuntur dolor fuga? Necessitatibus illum rem fugiat, iure neque beatae officiis mollitia. Iusto, doloremque vero. Esse consequatur nostrum ab qui explicabo odio voluptatum, quia voluptates cumque quas magni ad sint vitae fugiat. Sed iste, nisi reiciendis, magnam perspiciatis doloremque eligendi saepe, distinctio assumenda ipsam dolorum eaque quae itaque ipsum laudantium deleniti quibusdam aperiam minus! Expedita modi facere, sint consectetur commodi eveniet velit voluptate quos ut perferendis similique laborum mollitia culpa, aut ipsam debitis? Odit doloribus optio amet totam quos dolorem vero excepturi blanditiis nobis cumque odio quaerat, quis porro, unde voluptatum debitis omnis dolores tempore exercitationem explicabo! Accusantium, fuga optio aperiam ad sequi adipisci sit necessitatibus dolor non iste et rerum facere? Ex accusamus eum, officiis aspernatur illum labore quia eligendi possimus adipisci molestiae tempore aperiam nam perspiciatis inventore fuga veritatis quod quas repudiandae omnis alias laudantium dignissimos nostrum? Repudiandae delectus eius, rem exercitationem sed modi labore laborum voluptate repellendus commodi illum blanditiis. Iusto fugit dolores temporibus explicabo ea aperiam eum quod, dignissimos libero officiis dolore veritatis."
        ]
    ];

    public static function all(){
        return Collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
