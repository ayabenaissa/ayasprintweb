<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="taches")
 * @ORM\Entity
 */
class Taches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTache;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tache", type="string", length=255, nullable=false)
     */
    private $nomTache;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=50, nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_tache", type="date", nullable=false)
     */
    private $dateDebutTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_tache", type="date", nullable=false)
     */
    private $dateFinTache;


}

