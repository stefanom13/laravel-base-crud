<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $value){
            $comic = new Comic();
            
            $comic->title = $value['title'];
            $comic->description = $value['description'];
            $comic->thumb = $value['thumb'];
            $comic->price = $value['price'];
            $comic->series = $value['series'];
            $comic->sale_date = $value['sale_date'];
            $comic->type = $value['type'];

            $comic->save();
        }
    }
}
