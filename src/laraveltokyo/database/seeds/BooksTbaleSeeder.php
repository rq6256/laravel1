<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('books')->truncate();

        //初期データの用意（列名をキーとする連装配列）
        $books = [
            ['name' => 'PHP Book',
            'price' => 2000,
            'author' => 'PHPER'],

            ['name' => 'Laravel Book',
            'price' => 3000,
            'author' => 'null'],

            ['name' => 'Ruby Book',
            'price' => 2500,
            'author' => 'Rubyist'],
        ];

        //登録
        foreach($books as $book){
            \App\Book::create($book);
        }
    }
}
