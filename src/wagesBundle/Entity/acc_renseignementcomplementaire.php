<?php

namespace wagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * acc_renseignementcomplementaire
 *
 * @ORM\Table(name="acc_renseignementcomplementaire")
 * @ORM\Entity(repositoryClass="wagesBundle\Repository\acc_renseignementcomplementaireRepository")
 */
class acc_renseignementcomplementaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="horaires", type="string", length=255)
     */
    private $horaires;

    /**
     * @var string
     *
     * @ORM\Column(name="periodrefconges", type="string", length=255)
     */
    private $periodrefconges;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set horaires
     *
     * @param string $horaires
     *
     * @return acc_renseignementcomplementaire
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get horaires
     *
     * @return string
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set periodrefconges
     *
     * @param string $periodrefconges
     *
     * @return acc_renseignementcomplementaire
     */
    public function setPeriodrefconges($periodrefconges)
    {
        $this->periodrefconges = $periodrefconges;

        return $this;
    }

    /**
     * Get periodrefconges
     *
     * @return string
     */
    public function getPeriodrefconges()
    {
        return $this->periodrefconges;
    }
}

