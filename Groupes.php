<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes", indexes={@ORM\Index(name="id_proche", columns={"id_proche", "id_publication"}), @ORM\Index(name="id_publication", columns={"id_publication"}), @ORM\Index(name="IDX_576366D9A6ED4C74", columns={"id_proche"})})
 * @ORM\Entity
 */
class Groupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_groupe", type="string", length=50, nullable=false)
     */
    private $nomGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="type_groupe", type="string", length=50, nullable=false)
     */
    private $typeGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="confidentialite", type="string", length=50, nullable=false)
     */
    private $confidentialite;

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
     * @var \Publications
     *
     * @ORM\ManyToOne(targetEntity="Publications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id_publication")
     * })
     */
    private $idPublication;


}

