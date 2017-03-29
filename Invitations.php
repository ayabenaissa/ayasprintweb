<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations")
 * @ORM\Entity
 */
class Invitations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_inv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInv;

    /**
     * @var string
     *
     * @ORM\Column(name="relation", type="string", length=50, nullable=false)
     */
    private $relation;


}

