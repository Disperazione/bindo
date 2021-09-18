<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            'id' => Str::uuid(),
            "name" => "Rusman Jainudi",
            "email" => "rusman@gamil.com",
            "comment" => "Terimakasih sudah membuatkan berita",
            "post_id" => DB::table('post')->first()->id,
        ]);
    }
}
