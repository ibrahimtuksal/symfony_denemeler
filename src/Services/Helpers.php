<?php

namespace App\Services;

use App\Entity\Bolgeler;
use Doctrine\ORM\EntityManagerInterface;

class Helpers
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getSemt(int $semtId)
    {
        $semt = $this->entityManager->getRepository(Bolgeler::class)->findOneBy(['id' => $semtId]);
        if ( is_null($semt)) {
            return FALSE;
        }
        return $semt;
    }

}