<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publications
 *
 * @ORM\Table(name="publications", indexes={@ORM\Index(name="id_comm", columns={"id_comm"}), @ORM\Index(name="id_proche", columns={"id_proche"})})
 * @ORM\Entity
 */
class Publications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_publication", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPublication;

    /**
     * @var integer
     *
     * @ORM\Column(name="likes", type="integer", nullable=true)
     */
    private $likes;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_statut", type="string", length=255, nullable=true)
     */
    private $contenuStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="text", length=65535, nullable=true)
     */
    private $video;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_pub", type="datetime", nullable=true)
     */
    private $datePub;

    /**
     * @var integer
     *
     * @ORM\Column(name="dislike", type="integer", nullable=true)
     */
    private $dislike;

    /**
     * @var \Commentaires
     *
     * @ORM\ManyToOne(targetEntity="Commentaires")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comm", referencedColumnName="id_comm")
     * })
     */
    private $idComm;

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
     * @return int
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * @param int $idPublication
     */
    public function setIdPublication($idPublication)
    {
        $this->idPublication = $idPublication;
    }

    /**
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param int $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @return string
     */
    public function getContenuStatut()
    {
        return $this->contenuStatut;
    }

    /**
     * @param string $contenuStatut
     */
    public function setContenuStatut($contenuStatut)
    {
        $this->contenuStatut = $contenuStatut;
    }

    /**
     * @return string
     */
    public function getImage()
    {

            return base64_encode(@stream_get_contents($this->image)) ;

    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        if($image != null)
        {
            $this->image = @file_get_contents($image);
        }

    }

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return \DateTime
     */
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * @param \DateTime $datePub
     */
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;
    }

    /**
     * @return int
     */
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * @param int $dislike
     */
    public function setDislike($dislike)
    {
        $this->dislike = $dislike;
    }

    /**
     * @return \Commentaires
     */
    public function getIdComm()
    {
        return $this->idComm;
    }

    /**
     * @param \Commentaires $idComm
     */
    public function setIdComm($idComm)
    {
        $this->idComm = $idComm;
    }

    /**
     * @return \Proches
     */
    public function getIdProche()
    {
        return $this->idProche;
    }

    /**
     * @param \Proches $idProche
     */
    public function setIdProche($idProche)
    {
        $this->idProche = $idProche;
    }



}

