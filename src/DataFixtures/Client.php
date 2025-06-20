<?php

namespace App\DataFixtures;

use App\Entity\Client as EntityClient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Client extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new EntityClient();

        $client
            ->setEmail("john@doe.fr")
            ->setPrenom("John")
            ->setNom("Doe")
            ->setPassword("azerty123");

        $manager->persist($client);
        $manager->flush();

        $client2 = new EntityClient();

        $client2
            ->setEmail("jeanne@dupont.fr")
            ->setPrenom("Jeanne")
            ->setNom("Dupont")
            ->setPassword("azerty123");

        $manager->persist($client2);
        $manager->flush();
    }
}
