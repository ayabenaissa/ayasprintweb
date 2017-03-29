<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity
 */
class Commentaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComm;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_comm", type="text", length=65535, nullable=false)
     */
    private $contenuComm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_comm", type="date", nullable=false)
     */
    private $dateComm;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbreSignalisation", type="integer", nullable=false)
     */
    private $nbresignalisation;


}

