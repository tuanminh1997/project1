<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i=1;$i<=10;$i++){
            $article=new Article();
            $article->setName(sprintf('foo%d',$i));
            
            $manager->persist($article);
        }

        $manager->flush();
    }
}
