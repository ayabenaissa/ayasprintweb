<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenements
 *
 * @ORM\Table(name="evenements", indexes={@ORM\Index(name="id_publication", columns={"id_publication"}), @ORM\Index(name="id_proche", columns={"id_proche"})})
 * @ORM\Entity
 */
class Evenements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvt;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_evt", type="string", length=50, nullable=false)
     */
    private $nomEvt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_evt", type="date", nullable=false)
     */
    private $dateDebutEvt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_evt", type="text", length=65535, nullable=false)
     */
    private $descriptionEvt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_evt", type="date", nullable=false)
     */
    private $dateFinEvt;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=50, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evt", type="string", length=255, nullable=false)
     */
    private $typeEvt;

    /**
     * @var \Publications
     *
     * @ORM\ManyToOne(targetEntity="Publications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id_publication")
     * })
     */
    private $idPublication;

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

