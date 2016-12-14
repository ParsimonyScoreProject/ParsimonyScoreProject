<?php

namespace PagesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ScoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ScoreRepository extends EntityRepository
{

	public function getScoreLikeName($name) {
		$query = $this->createQueryBuilder('a')
               ->where("a.problem LIKE :my_name")
			   ->setParameter('my_name', '%'.$name.'%')
               ->getQuery();
			   
		return $query->getResult();
	}

	public function getScores($delta,$gamma,$score) {
		$query = $this->createQueryBuilder('a')
               ->where("a.rn >= :beg_rn AND a.rn <= :end_rn AND a.rg >= :beg_rg AND a.rg <= :end_rg AND a.s >= :beg_s AND a.s <= :end_s ")
			   ->setParameter('beg_rn', $score->getRn() - $delta)
			   ->setParameter('end_rn', $score->getRn() + $delta)
			   ->setParameter('beg_rg', $score->getRg() - $delta)
			   ->setParameter('end_rg', $score->getRg() + $delta)
			   ->setParameter('beg_s', $score->getS() - $gamma)
			   ->setParameter('end_s', $score->getS() + $gamma)
               ->getQuery();
			   
		return $query->getResult();
	}


}
