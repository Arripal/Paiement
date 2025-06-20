<?php

namespace App\DataFixtures;

use App\Entity\Produit as EntityProduit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Produit extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $produit = new EntityProduit();

        $produit
            ->setNom('Téléviseur Samsung X7')
            ->setDescription('Ecran plat 4K Full HD 50 pouces')
            ->setCategorie('Téléviseurs')
            ->setPrix(499);


        $manager->persist($produit);

        $manager->flush();

        $produit2 = new EntityProduit();

        $produit2
            ->setNom('Philipps Ventilator WG-X78')
            ->setDescription('Ventilateur dernier cri, d\'une puissance rafraichissante démesurée.')
            ->setCategorie('Ventilateur')
            ->setPrix(340);


        $manager->persist($produit2);

        $manager->flush();
    }
}
