<?php

namespace AppBundle\Repository;

use Requestum\ApiBundle\Repository\ApiRepositoryTrait;
use Requestum\ApiBundle\Repository\FilterableRepositoryInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class UserRepository
 */
class UserRepository extends EntityRepository implements FilterableRepositoryInterface
{
    use ApiRepositoryTrait;
}