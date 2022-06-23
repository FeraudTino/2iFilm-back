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
        $film->setImage('https://m.media-amazon.com/images/I/51NiGlapXlL._AC_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('The Godfather');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/71JPziIzj7L._AC_SY606_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('The Godfather: Part II');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/51PNHSY6B8L._AC_SY580_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('The Dark Knight');
        $film->setDescription('Une chauve souris qui souris pas.');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/71dwS9phhCL._AC_SY679_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film = new Films();
        $film->setNom('12 Angry Men');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/51H1Fa83TZL._AC_.jpg');
        $film->setAnnee(new \DateTime('1957-09-23'));
        $manager->persist($film);


        $manager->flush();
    }
}
