<?php

namespace App\DataFixtures;

use App\Entity\Films;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $film = new Films();
        $film->setNom('The Shawshank Redemption');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('The Godfather');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('The Godfather: Part II');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $manager->flush();
    }
}
