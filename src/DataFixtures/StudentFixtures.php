<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StudentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i =0 ; $i<10 ; $i++) {


       $student = new Student();
       $student -> setName('Tony Andriatsiferana');
       $student -> setAge (20);
       $student -> setClass (Student::CLASSES [0]);

       $manager -> persist($student);
    }
        $manager->flush();
    }
}
