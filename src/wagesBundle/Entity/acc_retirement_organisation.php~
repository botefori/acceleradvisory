<?php

namespace wagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * acc_retirement_organisation
 *
 * @ORM\Table(name="acc_retirement_organisation")
 * @ORM\Entity(repositoryClass="wagesBundle\Repository\acc_retirement_organisationRepository")
 */
class acc_retirement_organisation
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
     *  @ORM\OneToMany(targetEntity="acc_companies", mappedBy="retirement")
     */
    protected $companies;

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
     * @return acc_retirement_organisation
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
     * @return acc_retirement_organisation
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
