<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arbres
 *
 * @ORM\Table(name="arbres", indexes={@ORM\Index(name="id_proche", columns={"id_proche"})})
 * @ORM\Entity
 */
class Arbres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_arbre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArbre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_arbre", type="string", length=70, nullable=false)
     */
    private $nomArbre;

    /**
     * @var string
     *
     * @ORM\Column(name="type_lien", type="string", length=20, nullable=true)
     */
    private $typeLien;

    /**
     * @var \Proches
     *
     * @ORM\ManyToOne(targetEntity="Proches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proche", referencedColumnName="id_proche")
     * })
     */
    private $idProche;


}

