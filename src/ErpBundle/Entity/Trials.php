<?php

namespace ErpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trials
 *
 * @ORM\Table(name="trials")
 * @ORM\Entity(repositoryClass="ErpBundle\Repository\TrialsRepository")
 */
class Trials
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
     * @ORM\Column(name="protocole", type="string", length=255, nullable=true)
     */
    private $protocole;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="sponsor", type="string", length=255, nullable=true)
     */
    private $sponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="responsible", type="string", length=255, nullable=true)
     */
    private $responsible;

    /**
     * @var string
     *
     * @ORM\Column(name="technician", type="string", length=255, nullable=true)
     */
    private $technician;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="experimental_product", type="string", length=255, nullable=true)
     */
    private $experimentalProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="kind_of_trial", type="string", length=255, nullable=true)
     */
    private $kindOfTrial;

    /**
     * @var string
     *
     * @ORM\Column(name="kind_of_crop", type="string", length=255, nullable=true)
     */
    private $kindOfCrop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="setting_date", type="datetime", nullable=true)
     */
    private $settingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="country_of_trial", type="string", length=255, nullable=true)
     */
    private $countryOfTrial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="effective_date", type="datetime", nullable=true)
     */
    private $effectiveDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmed_quotation", type="boolean")
     */
    private $confirmedQuotation;

    /**
     * @var bool
     *
     * @ORM\Column(name="first_50_invoiced", type="boolean")
     */
    private $first50Invoiced;

    /**
     * @var int
     *
     * @ORM\Column(name="farmer_compensation", type="integer", nullable=true)
     */
    private $farmerCompensation;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255, nullable=true)
     */
    private $area;


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
     * Set protocole
     *
     * @param string $protocole
     *
     * @return Trials
     */
    public function setProtocole($protocole)
    {
        $this->protocole = $protocole;

        return $this;
    }

    /**
     * Get protocole
     *
     * @return string
     */
    public function getProtocole()
    {
        return $this->protocole;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Trials
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set sponsor
     *
     * @param string $sponsor
     *
     * @return Trials
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get sponsor
     *
     * @return string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Trials
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Trials
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set technician
     *
     * @param string $technician
     *
     * @return Trials
     */
    public function setTechnician($technician)
    {
        $this->technician = $technician;

        return $this;
    }

    /**
     * Get technician
     *
     * @return string
     */
    public function getTechnician()
    {
        return $this->technician;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Trials
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set experimentalProduct
     *
     * @param string $experimentalProduct
     *
     * @return Trials
     */
    public function setExperimentalProduct($experimentalProduct)
    {
        $this->experimentalProduct = $experimentalProduct;

        return $this;
    }

    /**
     * Get experimentalProduct
     *
     * @return string
     */
    public function getExperimentalProduct()
    {
        return $this->experimentalProduct;
    }

    /**
     * Set kindOfTrial
     *
     * @param string $kindOfTrial
     *
     * @return Trials
     */
    public function setKindOfTrial($kindOfTrial)
    {
        $this->kindOfTrial = $kindOfTrial;

        return $this;
    }

    /**
     * Get kindOfTrial
     *
     * @return string
     */
    public function getKindOfTrial()
    {
        return $this->kindOfTrial;
    }

    /**
     * Set kindOfCrop
     *
     * @param string $kindOfCrop
     *
     * @return Trials
     */
    public function setKindOfCrop($kindOfCrop)
    {
        $this->kindOfCrop = $kindOfCrop;

        return $this;
    }

    /**
     * Get kindOfCrop
     *
     * @return string
     */
    public function getKindOfCrop()
    {
        return $this->kindOfCrop;
    }

    /**
     * Set settingDate
     *
     * @param \DateTime $settingDate
     *
     * @return Trials
     */
    public function setSettingDate($settingDate)
    {
        $this->settingDate = $settingDate;

        return $this;
    }

    /**
     * Get settingDate
     *
     * @return \DateTime
     */
    public function getSettingDate()
    {
        return $this->settingDate;
    }

    /**
     * Set countryOfTrial
     *
     * @param string $countryOfTrial
     *
     * @return Trials
     */
    public function setCountryOfTrial($countryOfTrial)
    {
        $this->countryOfTrial = $countryOfTrial;

        return $this;
    }

    /**
     * Get countryOfTrial
     *
     * @return string
     */
    public function getCountryOfTrial()
    {
        return $this->countryOfTrial;
    }

    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     *
     * @return Trials
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Set confirmedQuotation
     *
     * @param boolean $confirmedQuotation
     *
     * @return Trials
     */
    public function setConfirmedQuotation($confirmedQuotation)
    {
        $this->confirmedQuotation = $confirmedQuotation;

        return $this;
    }

    /**
     * Get confirmedQuotation
     *
     * @return bool
     */
    public function getConfirmedQuotation()
    {
        return $this->confirmedQuotation;
    }

    /**
     * Set first50Invoiced
     *
     * @param boolean $first50Invoiced
     *
     * @return Trials
     */
    public function setFirst50Invoiced($first50Invoiced)
    {
        $this->first50Invoiced = $first50Invoiced;

        return $this;
    }

    /**
     * Get first50Invoiced
     *
     * @return bool
     */
    public function getFirst50Invoiced()
    {
        return $this->first50Invoiced;
    }

    /**
     * Set farmerCompensation
     *
     * @param integer $farmerCompensation
     *
     * @return Trials
     */
    public function setFarmerCompensation($farmerCompensation)
    {
        $this->farmerCompensation = $farmerCompensation;

        return $this;
    }

    /**
     * Get farmerCompensation
     *
     * @return int
     */
    public function getFarmerCompensation()
    {
        return $this->farmerCompensation;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Trials
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }
}

