<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenir
 *
 * @ORM\Table(name="appartenir", uniqueConstraints={@ORM\UniqueConstraint(name="id_proche", columns={"id_proche"}), @ORM\UniqueConstraint(name="id_groupe", columns={"id_groupe"})})
 * @ORM\Entity
 */
class Appartenir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

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
     * @var \Groupes
     *
     * @ORM\ManyToOne(targetEntity="Groupes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_groupe", referencedColumnName="id_groupe")
     * })
     */
    private $idGroupe;


}

