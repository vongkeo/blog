<?php

use Illuminate\Database\Seeder;
use App\Model\blog as ModelBlog;
use Carbon\Carbon;

class blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
            [
                "title" => "Hello Devla Media",
                "slug" => "Hello Devla Media",
                "images" => "upload/blog/devlamedia.jpg",
                "body" => "Hello Devla MediaHello Devla MediaHello Devla MediaHello Devla MediaHello Devla Media",
                "cat_id" => "1",
                "user_id" => "1",
            ],
        );
        ModelBlog::insert($data);
    }
}
