<?php

namespace ConciergerieBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * CommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeRepository extends \Doctrine\ORM\EntityRepository
{

  public function getCommandesValide()
  {
    $query = $this
    ->createQueryBuilder('c')
    ->orderBy('c.date','DESC')
    ->where('c.etat = 4')
    ->orWhere('c.etat = 5')
    ->getQuery()
    ->getResult();

    return $query;
  }
}
