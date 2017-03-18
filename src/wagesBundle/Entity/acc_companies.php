<?php

namespace wagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * acc_companies
 *
 * @ORM\Table(name="acc_companies")
 * @ORM\Entity(repositoryClass="wagesBundle\Repository\acc_companiesRepository")
 */
class acc_companies
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
     * @ORM\Column(name="socialrason", type="string", length=255)
     */
    private $socialrason;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="ccn", type="string", length=255)
     */
    private $ccn;

    /**
     * @var bool
     *
     * @ORM\Column(name="existsbefore", type="boolean")
     */
    private $existsbefore;

    /**
     * @var int
     *
     * @ORM\Column(name="existsbeforevalue", type="integer")
     */
    private $existsbeforevalue;

    /**
     * @var int
     *
     * @ORM\Column(name="employeesnumber", type="integer")
     */
    private $employeesnumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="declacadres", type="boolean")
     */
    private $declacadres;

    /**
     * @var int
     *
     * @ORM\Column(name="cadrenumber", type="integer")
     */
    private $cadrenumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="ccpyesno", type="boolean")
     */
    private $ccpyesno;

    /**
     * @var string
     *
     * @ORM\Column(name="ccp", type="string", length=255)
     */
    private $ccp;

    /**
     * @var string
     *
     * @ORM\Column(name="ssw", type="string", length=255)
     */
    private $ssw;

    /**
     * @var string
     *
     * @ORM\Column(name="rrcname", type="string", length=255)
     */
    private $rrcname;

    /**
     * @var string
     *
     * @ORM\Column(name="rrcnumcontract", type="string", length=255)
     */
    private $rrcnumcontract;


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
     * Set socialrason
     *
     * @param string $socialrason
     *
     * @return acc_companies
     */
    public function setSocialrason($socialrason)
    {
        $this->socialrason = $socialrason;

        return $this;
    }

    /**
     * Get socialrason
     *
     * @return string
     */
    public function getSocialrason()
    {
        return $this->socialrason;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return acc_companies
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return acc_companies
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set ccn
     *
     * @param string $ccn
     *
     * @return acc_companies
     */
    public function setCcn($ccn)
    {
        $this->ccn = $ccn;

        return $this;
    }

    /**
     * Get ccn
     *
     * @return string
     */
    public function getCcn()
    {
        return $this->ccn;
    }

    /**
     * Set existsbefore
     *
     * @param boolean $existsbefore
     *
     * @return acc_companies
     */
    public function setExistsbefore($existsbefore)
    {
        $this->existsbefore = $existsbefore;

        return $this;
    }

    /**
     * Get existsbefore
     *
     * @return bool
     */
    public function getExistsbefore()
    {
        return $this->existsbefore;
    }

    /**
     * Set existsbeforevalue
     *
     * @param integer $existsbeforevalue
     *
     * @return acc_companies
     */
    public function setExistsbeforevalue($existsbeforevalue)
    {
        $this->existsbeforevalue = $existsbeforevalue;

        return $this;
    }

    /**
     * Get existsbeforevalue
     *
     * @return int
     */
    public function getExistsbeforevalue()
    {
        return $this->existsbeforevalue;
    }

    /**
     * Set employeesnumber
     *
     * @param integer $employeesnumber
     *
     * @return acc_companies
     */
    public function setEmployeesnumber($employeesnumber)
    {
        $this->employeesnumber = $employeesnumber;

        return $this;
    }

    /**
     * Get employeesnumber
     *
     * @return int
     */
    public function getEmployeesnumber()
    {
        return $this->employeesnumber;
    }

    /**
     * Set declacadres
     *
     * @param boolean $declacadres
     *
     * @return acc_companies
     */
    public function setDeclacadres($declacadres)
    {
        $this->declacadres = $declacadres;

        return $this;
    }

    /**
     * Get declacadres
     *
     * @return bool
     */
    public function getDeclacadres()
    {
        return $this->declacadres;
    }

    /**
     * Set cadrenumber
     *
     * @param integer $cadrenumber
     *
     * @return acc_companies
     */
    public function setCadrenumber($cadrenumber)
    {
        $this->cadrenumber = $cadrenumber;

        return $this;
    }

    /**
     * Get cadrenumber
     *
     * @return int
     */
    public function getCadrenumber()
    {
        return $this->cadrenumber;
    }

    /**
     * Set ccpyesno
     *
     * @param boolean $ccpyesno
     *
     * @return acc_companies
     */
    public function setCcpyesno($ccpyesno)
    {
        $this->ccpyesno = $ccpyesno;

        return $this;
    }

    /**
     * Get ccpyesno
     *
     * @return bool
     */
    public function getCcpyesno()
    {
        return $this->ccpyesno;
    }

    /**
     * Set ccp
     *
     * @param string $ccp
     *
     * @return acc_companies
     */
    public function setCcp($ccp)
    {
        $this->ccp = $ccp;

        return $this;
    }

    /**
     * Get ccp
     *
     * @return string
     */
    public function getCcp()
    {
        return $this->ccp;
    }

    /**
     * Set ssw
     *
     * @param string $ssw
     *
     * @return acc_companies
     */
    public function setSsw($ssw)
    {
        $this->ssw = $ssw;

        return $this;
    }

    /**
     * Get ssw
     *
     * @return string
     */
    public function getSsw()
    {
        return $this->ssw;
    }

    /**
     * Set rrcname
     *
     * @param string $rrcname
     *
     * @return acc_companies
     */
    public function setRrcname($rrcname)
    {
        $this->rrcname = $rrcname;

        return $this;
    }

    /**
     * Get rrcname
     *
     * @return string
     */
    public function getRrcname()
    {
        return $this->rrcname;
    }

    /**
     * Set rrcnumcontract
     *
     * @param string $rrcnumcontract
     *
     * @return acc_companies
     */
    public function setRrcnumcontract($rrcnumcontract)
    {
        $this->rrcnumcontract = $rrcnumcontract;

        return $this;
    }

    /**
     * Get rrcnumcontract
     *
     * @return string
     */
    public function getRrcnumcontract()
    {
        return $this->rrcnumcontract;
    }
}

