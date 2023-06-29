<?php

namespace App\DataFixtures;

use App\Document\User;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Exception;

class UserFixture implements FixtureInterface
{
    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setName("Joe Doe");
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName("John Smith");
        $manager->persist($user2);


        $manager->flush();
    }
}
