<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class AppFixtures extends Fixture
{
   private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {

         $user = new User();
         $user->setUsername("ibrahimtksl")->setRoles(['ROLE_ADMIN'])->setFullname("İbrahim TUKSAL");
         $user->setPassword($this->passwordEncoder->encodePassword($user, '123456'));
         $manager->persist($user);

        $manager->flush();
    }
}
