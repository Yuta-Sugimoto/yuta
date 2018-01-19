<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('articles')->truncate();
     DB::table('articles')->insert(
         [
    'body'=>'AAA',
    'title'=>'BBB',
    'id'=>'1111',
    'user_id'=>'00000',
    'status'=>0,
    'is_delete'=>0,
    'created_at'=>'2015-02-01 00:00:00',
    'updated_at'=>'2015-02-01 00:00:00'
     ]) ;  //
    }
}
