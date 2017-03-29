<?php

namespace FamilyBookEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proches
 *
 * @ORM\Table(name="proches", uniqueConstraints={@ORM\UniqueConstraint(name="id_publication", columns={"id_publication"}), @ORM\UniqueConstraint(name="id_evt", columns={"id_evt"}), @ORM\UniqueConstraint(name="id_tache", columns={"id_tache"}), @ORM\UniqueConstraint(name="id_inv", columns={"id_inv"})}, indexes={@ORM\Index(name="id_msg", columns={"id_msg", "id_inv", "id_tache", "id_comm", "id_evt", "id_publication"}), @ORM\Index(name="id_comm", columns={"id_comm"}), @ORM\Index(name="IDX_925D3E12F62EB7F5", columns={"id_msg"})})
 * @ORM\Entity
 */
class Proches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_proche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProche;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_proche", type="string", length=50, nullable=false)
     */
    private $nomProche;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_proche", type="string", length=50, nullable=false)
     */
    private $prenomProche;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_proche", type="string", length=20, nullable=true)
     */
    private $telProche;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=20, nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=60, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="cursus", type="string", length=255, nullable=false)
     */
    private $cursus;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=255, nullable=false)
     */
    private $emploi;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255, nullable=false)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_amoureuse", type="string", length=100, nullable=false)
     */
    private $situationAmoureuse;

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
     * @var \Taches
     *
     * @ORM\ManyToOne(targetEntity="Taches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tache", referencedColumnName="id_tache")
     * })
     */
    private $idTache;

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
     * @var \Evenements
     *
     * @ORM\ManyToOne(targetEntity="Evenements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evt", referencedColumnName="id_evt")
     * })
     */
    private $idEvt;

    /**
     * @var \Messages
     *
     * @ORM\ManyToOne(targetEntity="Messages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_msg", referencedColumnName="id_msg")
     * })
     */
    private $idMsg;

    /**
     * @var \Invitations
     *
     * @ORM\ManyToOne(targetEntity="Invitations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inv", referencedColumnName="id_inv")
     * })
     */
    private $idInv;

    /**
     * @return int
     */
    public function getIdProche()
    {
        return $this->idProche;
    }

    /**
     * @param int $idProche
     */
    public function setIdProche($idProche)
    {
        $this->idProche = $idProche;
    }

    /**
     * @return string
     */
    public function getNomProche()
    {
        return $this->nomProche;
    }

    /**
     * @param string $nomProche
     */
    public function setNomProche($nomProche)
    {
        $this->nomProche = $nomProche;
    }

    /**
     * @return string
     */
    public function getPrenomProche()
    {
        return $this->prenomProche;
    }

    /**
     * @param string $prenomProche
     */
    public function setPrenomProche($prenomProche)
    {
        $this->prenomProche = $prenomProche;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getTelProche()
    {
        return $this->telProche;
    }

    /**
     * @param string $telProche
     */
    public function setTelProche($telProche)
    {
        $this->telProche = $telProche;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getCursus()
    {
        return $this->cursus;
    }

    /**
     * @param string $cursus
     */
    public function setCursus($cursus)
    {
        $this->cursus = $cursus;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * @param string $emploi
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;
    }

    /**
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param string $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    /**
     * @return string
     */
    public function getSituationAmoureuse()
    {
        return $this->situationAmoureuse;
    }

    /**
     * @param string $situationAmoureuse
     */
    public function setSituationAmoureuse($situationAmoureuse)
    {
        $this->situationAmoureuse = $situationAmoureuse;
    }

    /**
     * @return \Publications
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * @param \Publications $idPublication
     */
    public function setIdPublication($idPublication)
    {
        $this->idPublication = $idPublication;
    }

    /**
     * @return \Taches
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     * @param \Taches $idTache
     */
    public function setIdTache($idTache)
    {
        $this->idTache = $idTache;
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
     * @return \Evenements
     */
    public function getIdEvt()
    {
        return $this->idEvt;
    }

    /**
     * @param \Evenements $idEvt
     */
    public function setIdEvt($idEvt)
    {
        $this->idEvt = $idEvt;
    }

    /**
     * @return \Messages
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * @param \Messages $idMsg
     */
    public function setIdMsg($idMsg)
    {
        $this->idMsg = $idMsg;
    }

    /**
     * @return \Invitations
     */
    public function getIdInv()
    {
        return $this->idInv;
    }

    /**
     * @param \Invitations $idInv
     */
    public function setIdInv($idInv)
    {
        $this->idInv = $idInv;
    }



}

