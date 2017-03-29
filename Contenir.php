<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table(name="contenir", uniqueConstraints={@ORM\UniqueConstraint(name="id_proche", columns={"id_proche"}), @ORM\UniqueConstraint(name="id_arbre", columns={"id_arbre"})})
 * @ORM\Entity
 */
class Contenir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

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
     * @var \Arbres
     *
     * @ORM\ManyToOne(targetEntity="Arbres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_arbre", referencedColumnName="id_arbre")
     * })
     */
    private $idArbre;


}

