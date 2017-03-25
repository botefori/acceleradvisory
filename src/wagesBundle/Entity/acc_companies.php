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
     * @var string
     *
     * @ORM\Column(name="mutuellecontractnum", type="string", length=255)
     */
    private $mutuellecontractnum;

    /**
     * @var float
     *
     * @ORM\Column(name="mutuellemonthlybonusamount", type="float")
     */
    private $mutuelleMonthlyBonusAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="mutuellamountonemplayercharge", type="float")
     */
    private $mutuellAmountonEmplayerCharge;


    /**
     * @var string
     *
     * @ORM\Column(name="prevoyancecontractnum", type="string", length=255)
     */
    private $prevoyanceContractNum;

    /**
     * @var string
     *
     * @ORM\Column(name="retirementcontractnum", type="string", length=255)
     */
    private $retirementContractNum;

    /**
     * @var acc_retirement_organisation
     *
     * @ORM\ManyToOne(targetEntity="acc_retirement_organisation",inversedBy="companies")
     * @ORM\JoinColumn(name="retirement_id", referencedColumnName="id", nullable=false)
     */
    private  $retirement;

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

    /**
     * @var acc_mutuelle
     *
     * @ORM\ManyToOne(targetEntity="acc_mutuelle",inversedBy="companies")
     * @ORM\JoinColumn(name="mutuelle_id", referencedColumnName="id", nullable=false)
     */
    private  $mutuelle;

    /**
     * Set mutuelle
     *
     * @param \wagesBundle\Entity\acc_mutuelle $mutuelle
     *
     * @return acc_companies
     */
    public function setMutuelle(\wagesBundle\Entity\Customers $mutuelle)
    {
        $this->mutuelle = $mutuelle;

        return $this;
    }

    /**
     * Get mutuelle
     *
     * @return \wagesBundle\Entity\acc_mutuelle
     */
    public function getMutuelle()
    {
        return $this->mutuelle;
    }

    /**
     * @var acc_regime_prevoyance
     *
     * @ORM\ManyToOne(targetEntity="acc_regime_prevoyance",inversedBy="companies")
     * @ORM\JoinColumn(name="prevoyance_id", referencedColumnName="id", nullable=false)
     */
    private  $prevoyance;

    /**
     * Set prevoyance
     *
     * @param \wagesBundle\Entity\acc_regime_prevoyance $prevoyance
     *
     * @return acc_companies
     */
    public function setPrevoyance(\wagesBundle\Entity\acc_regime_prevoyance $prevoyance)
    {
        $this->prevoyance = $prevoyance;

        return $this;
    }

    /**
     * Get prevoyance
     *
     * @return \wagesBundle\Entity\acc_regime_prevoyance
     */
    public function getPrevoyance()
    {
        return $this->prevoyance;
    }


    /**
     * Set mutuellecontractnum
     *
     * @param string $mutuellecontractnum
     *
     * @return acc_companies
     */
    public function setMutuellecontractnum($mutuellecontractnum)
    {
        $this->mutuellecontractnum = $mutuellecontractnum;

        return $this;
    }

    /**
     * Get mutuellecontractnum
     *
     * @return string
     */
    public function getMutuellecontractnum()
    {
        return $this->mutuellecontractnum;
    }

    /**
     * Set mutuelleMonthlyBonusAmount
     *
     * @param float $mutuelleMonthlyBonusAmount
     *
     * @return acc_companies
     */
    public function setMutuelleMonthlyBonusAmount($mutuelleMonthlyBonusAmount)
    {
        $this->mutuelleMonthlyBonusAmount = $mutuelleMonthlyBonusAmount;

        return $this;
    }

    /**
     * Get mutuelleMonthlyBonusAmount
     *
     * @return float
     */
    public function getMutuelleMonthlyBonusAmount()
    {
        return $this->mutuelleMonthlyBonusAmount;
    }

    /**
     * Set mutuellAmountonEmplayerCharge
     *
     * @param float $mutuellAmountonEmplayerCharge
     *
     * @return acc_companies
     */
    public function setMutuellAmountonEmplayerCharge($mutuellAmountonEmplayerCharge)
    {
        $this->mutuellAmountonEmplayerCharge = $mutuellAmountonEmplayerCharge;

        return $this;
    }

    /**
     * Get mutuellAmountonEmplayerCharge
     *
     * @return float
     */
    public function getMutuellAmountonEmplayerCharge()
    {
        return $this->mutuellAmountonEmplayerCharge;
    }

    /**
     * Set prevoyanceContractNum
     *
     * @param string $prevoyanceContractNum
     *
     * @return acc_companies
     */
    public function setPrevoyanceContractNum($prevoyanceContractNum)
    {
        $this->prevoyanceContractNum = $prevoyanceContractNum;

        return $this;
    }

    /**
     * Get prevoyanceContractNum
     *
     * @return string
     */
    public function getPrevoyanceContractNum()
    {
        return $this->prevoyanceContractNum;
    }

    /**
     * Set retirementContractNum
     *
     * @param string $retirementContractNum
     *
     * @return acc_companies
     */
    public function setRetirementContractNum($retirementContractNum)
    {
        $this->retirementContractNum = $retirementContractNum;

        return $this;
    }

    /**
     * Get retirementContractNum
     *
     * @return string
     */
    public function getRetirementContractNum()
    {
        return $this->retirementContractNum;
    }

    /**
     * Set retirement
     *
     * @param \wagesBundle\Entity\acc_retirement_organisation $retirement
     *
     * @return acc_companies
     */
    public function setRetirement(\wagesBundle\Entity\acc_retirement_organisation $retirement)
    {
        $this->retirement = $retirement;

        return $this;
    }

    /**
     * Get retirement
     *
     * @return \wagesBundle\Entity\acc_retirement_organisation
     */
    public function getRetirement()
    {
        return $this->retirement;
    }
}
