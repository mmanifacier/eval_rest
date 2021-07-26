<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $film1 = new Film();
        $film1->setTitle("La nuit des morts");
        $film1->setDescription("Lorem ipsum chorem it nunquae sipsum est");
        $film1->setDirector("John Smith");

        $film2 = new Film();
        $film2->setTitle("Le jour des vivants");
        $film2->setDescription("Lorem ipsum chorem it nunquae sipsum est");
        $film2->setDirector("Jane Doe");

        $manager->persist($film1);
        $manager->persist($film2);
        $manager->flush();
    }
}
