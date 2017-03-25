<?php

namespace wagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * mutuelle
 *
 * @ORM\Table(name="acc_mutuelle")
 * @ORM\Entity(repositoryClass="wagesBundle\Repository\acc_mutuelleRepository")
 */
class acc_mutuelle
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return mutuelle
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     *  @ORM\OneToMany(targetEntity="acc_companies", mappedBy="mutuelle")
     */
    protected $companies;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add company
     *
     * @param \wagesBundle\Entity\acc_companies $company
     *
     * @return acc_mutuelle
     */
    public function addCompany(\wagesBundle\Entity\acc_companies $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \wagesBundle\Entity\acc_companies $company
     */
    public function removeCompany(\wagesBundle\Entity\acc_companies $company)
    {
        $this->companies->removeElement($company);
    }

    /**
     * Get companies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }
}
