<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Films;
use App\Entity\ListeFilms;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{

    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $film = new Films();
        $film->setNom('The Shawshank Redemption');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/51NiGlapXlL._AC_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film1 = $film;

        $film = new Films();
        $film->setNom('The Godfather');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/71JPziIzj7L._AC_SY606_.jpg');
        $film->setAnnee(new \DateTime('1994-09-23'));
        $manager->persist($film);

        $film2 = $film;

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

        $film3 = $film;

        $film = new Films();
        $film->setNom('12 Angry Men');
        $film->setDescription('Two imprisoned');
        $film->setGenre('Drama');
        $film->setImage('https://m.media-amazon.com/images/I/51H1Fa83TZL._AC_.jpg');
        $film->setAnnee(new \DateTime('1957-09-23'));
        $manager->persist($film);

        $film4 = $film;

        $film = new Films();
        $film->setNom('Le seigneur des anneaux');
        $film->setDescription('Le seigneur des anneaux est un film de fantasy réalisé par Peter Jackson et sorti en 2001. Il est le premier film de la trilogie du même nom, qui se déroule sur une île fantastique et où le héros, Frodon et sa compagnie se font face à un terrible mal.');
        $film->setGenre('Fantasy');
        $film->setImage('https://static.posters.cz/image/1300/art-photo/le-seigneur-des-anneaux-le-retour-du-roi-i105095.jpg');
        $film->setAnnee(new \DateTime('2001-09-23'));
        $manager->persist($film);


        $user = new User();
        $user->setEmail('john@2itech.fr');
        $user->setPassword($this->passwordEncoder->hashPassword(
            $user,
            'wick'
        ));
        $user->setRoles(['ROLE_ADMIN']);

        $user->addListeFilm($film1);
        $user->addListeFilm($film2);

        $manager->persist($user);

        $user = new User();
        $user->setEmail('billy@2itech.fr');
        $user->setPassword($this->passwordEncoder->hashPassword(
            $user,
            'billy'
        ));
        $user->setRoles(['ROLE_ADMIN']);


        $user->addListeFilm($film3);
        $user->addListeFilm($film4);

        $manager->persist($user);

        $manager->flush();

    }
}
