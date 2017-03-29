<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_msg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="contexte", type="text", length=65535, nullable=false)
     */
    private $contexte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_msg", type="date", nullable=false)
     */
    private $dateMsg;


}

