<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Effectuer
 *
 * @ORM\Table(name="effectuer", uniqueConstraints={@ORM\UniqueConstraint(name="id_proche", columns={"id_proche"}), @ORM\UniqueConstraint(name="id_tache", columns={"id_tache"})})
 * @ORM\Entity
 */
class Effectuer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ide;

    /**
     * @var \Proches
     *
     * @ORM\ManyToOne(targetEntity="Proches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proche", referencedColumnName="id_proche")
     * })
     */
    private $idProche;

    /**
     * @var \Taches
     *
     * @ORM\ManyToOne(targetEntity="Taches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tache", referencedColumnName="id_tache")
     * })
     */
    private $idTache;


}

