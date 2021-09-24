<?php

use App\Article;
use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $photoList=[ 
            'https://biografieonline.it/img/bio/box/p/Paolo_Mieli.jpg',
            'https://biografieonline.it/img/bio/box/b/Bruno_Vespa.jpg',
            'https://www.viagginews.com/wp-content/uploads/2019/07/giampiero_mughini-600x338.jpg',
            'http://www.blitzquotidiano.it/wp/wp/wp-content/uploads/2017/01/Lanza-Cesare-237x300-237x300.jpg'
        ];

        $idAuthorsList = [];

        $photoListKey = array_rand($photoList, 1);
        $photo = $photoList[$photoListKey];

        for($i = 0; $i <10; $i++){
            $author = new Author;
            $author->name = $faker-> words(3, true);
            $author->surname = $faker-> words(3, true);
            $author->photo = $photo;    
            $author->email = $faker-> text(50);
            $author->feed = $faker-> numberBetween(0, 10);            
            $author->save();
            $idAuthorsList[]=$author->id;
        };


        $pictureList=[ 
            'https://www.iisscotton.it/wp-content/uploads/2018/05/Articolo-di-Giornale.jpg',
            'https://lh3.googleusercontent.com/proxy/InfsTV7melNR9lFDrtdNNuZSv6TIH0LZnVWK7UgqIU1RsnWbm3Afdtir6KlK1wT9CrIVdw_x_GOSkr7W612YJU7Z8GoVYRnjraoYIzjvkrrz4hHNa8TjZdTgRRKDWNYwzHc4Ddvw_BWd7TJPiAYOMHhm3zd3sBEixB9ktNlbRU_CjaaBJaJW9G0eZQ',
            'https://lh3.googleusercontent.com/proxy/zIdubz26u0NEgBUKtdL4_NY1vCc2u8FllMqZjWYCHHFyhBVrSfeUYHRT7Qw1d6C9QgOIZ1g6VjBfL9UeWUkBwwMjLtuKz6t_2xJf8W4UTK6hGMjV',
            'https://lh3.googleusercontent.com/proxy/SFc3twM9q965Cg_HFiKxGhS9mWroRfTb-qzm-u6hD9nFHRGvWxk_WUp_TBwHhT8lgkyiJsgRp-L5qd11JrsBWq6Gw0EHNXgoqZFM'
        ];
        
        // $authorList=[
            //  TODO: inserire una lista di autori
            // ];
            
            
        for($i = 0; $i <10; $i++){
            
            $picureListKey = array_rand($pictureList, 1);
            $picture = $pictureList[$picureListKey];

            $idAuthorsListKey = array_rand($idAuthorsList, 1);
            $author = $idAuthorsList[$idAuthorsListKey];

            $article = new Article;
            $article->title=$faker->words(2, true);
            $article->typeof=$faker->words(2, true);
            $article->subtitle=$faker->words(2, true);
            $article->paragraph=$faker->words(2, true);
            $article->author = $author;           
            $article->picture = $picture;    
            $article->save();
        }

    }
}
