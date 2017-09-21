<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\Commentaire;

class LoadCommentaire extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {


    }

    public function getOrder()
    {
        return 12; 
    }

}