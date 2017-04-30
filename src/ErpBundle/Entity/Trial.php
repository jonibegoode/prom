<?php

namespace ErpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trial
 *
 * @ORM\Table(name="trial")
 * @ORM\Entity(repositoryClass="ErpBundle\Repository\TrialRepository")
 */
class Trial
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
     * @ORM\Column(name="g_project_manager", type="string", length=255, nullable=true)
     */
    private $gProjectManager;

    /**
     * @var int
     *
     * @ORM\Column(name="g_departement", type="smallint", nullable=true)
     */
    private $gDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="g_country", type="string", length=255, nullable=true)
     */
    private $gCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="g_technician", type="string", length=255, nullable=true)
     */
    private $gTechnician;

    /**
     * @var string
     *
     * @ORM\Column(name="g_cofrac_code", type="string", length=255, nullable=true)
     */
    private $gCofracCode;

    /**
     * @var int
     *
     * @ORM\Column(name="g_year", type="smallint", nullable=true)
     */
    private $gYear;

    /**
     * @var string
     *
     * @ORM\Column(name="g_efip", type="string", length=1, nullable=true)
     */
    private $gEfip;

    /**
     * @var string
     *
     * @ORM\Column(name="g_hfieds", type="string", length=1, nullable=true)
     */
    private $gHfieds;

    /**
     * @var string
     *
     * @ORM\Column(name="g_crop_code", type="string", length=2, nullable=true)
     */
    private $gCropCode;

    /**
     * @var string
     *
     * @ORM\Column(name="g_sponsor", type="string", length=255, nullable=true)
     */
    private $gSponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="g_bps", type="string", length=1, nullable=true)
     */
    private $gBps;

    /**
     * @var int
     *
     * @ORM\Column(name="g_protocol_number", type="smallint", nullable=true)
     */
    private $gProtocolNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="g_trial_number", type="string", length=255, nullable=true)
     */
    private $gTrialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="g_sponsor_contact", type="string", length=255, nullable=true)
     */
    private $gSponsorContact;

    /**
     * @var string
     *
     * @ORM\Column(name="g_sponsor_protocol_number", type="string", length=255, nullable=true)
     */
    private $gSponsorProtocolNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="g_sponsor_trial_number", type="string", length=255, nullable=true)
     */
    private $gSponsorTrialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="g_declaration_number", type="string", length=255, nullable=true)
     */
    private $gDeclarationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="g_theme", type="string", length=255, nullable=true)
     */
    private $gTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="g_crop", type="string", length=255, nullable=true)
     */
    private $gCrop;

    /**
     * @var string
     *
     * @ORM\Column(name="g_pathogen", type="string", length=255, nullable=true)
     */
    private $gPathogen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="p_cl_received_date", type="datetime", nullable=true)
     */
    private $pClReceivedDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="p_cl_arm_received", type="boolean", nullable=true)
     */
    private $pClArmReceived;

    /**
     * @var bool
     *
     * @ORM\Column(name="p_pv_arm_contract_info", type="boolean", nullable=true)
     */
    private $pPvArmContractInfo;

    /**
     * @var bool
     *
     * @ORM\Column(name="p_permit_derogation_cl", type="boolean", nullable=true)
     */
    private $pPermitDerogationCl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="p_derogation_pv_date", type="datetime", nullable=true)
     */
    private $pDerogationPvDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="p_official_declaration_date", type="datetime", nullable=true)
     */
    private $pOfficialDeclarationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="p_pv_version_sent", type="string", length=2, nullable=true)
     */
    private $pPvVersionSent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="p_pv_version_sent_date", type="datetime", nullable=true)
     */
    private $pPvVersionSentDate;

    /**
     * @var array
     *
     * @ORM\Column(name="p_tech_sent_date", type="array", nullable=true)
     */
    private $pTechSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="c_product_order_date", type="datetime", nullable=true)
     */
    private $cProductOrderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="c_product_ordered_by", type="string", length=255, nullable=true)
     */
    private $cProductOrderedBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="c_ref_provided_by_cl", type="boolean", nullable=true)
     */
    private $cRefProvidedByCl;

    /**
     * @var bool
     *
     * @ORM\Column(name="c_received_by_region", type="boolean", nullable=true)
     */
    private $cReceivedByRegion;

    /**
     * @var int
     *
     * @ORM\Column(name="t_trial_postal_code_location", type="smallint", nullable=true)
     */
    private $tTrialPostalCodeLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="t_trial_city_location", type="string", length=255, nullable=true)
     */
    private $tTrialCityLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="t_advancement_code", type="smallint", nullable=true)
     */
    private $tAdvancementCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_planned_setting_up_date", type="datetime", nullable=true)
     */
    private $tPlannedSettingUpDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_effective_setting_up_date", type="datetime", nullable=true)
     */
    private $tEffectiveSettingUpDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_cl_info_date", type="datetime", nullable=true)
     */
    private $tClInfoDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="t_conta_artif", type="boolean", nullable=true)
     */
    private $tContaArtif;

    /**
     * @var bool
     *
     * @ORM\Column(name="t_asked_visit", type="boolean", nullable=true)
     */
    private $tAskedVisit;

    /**
     * @var bool
     *
     * @ORM\Column(name="t_harvest", type="boolean", nullable=true)
     */
    private $tHarvest;

    /**
     * @var int
     *
     * @ORM\Column(name="t_number_of_harvest_to_destruct", type="smallint", nullable=true)
     */
    private $tNumberOfHarvestToDestruct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_harvest_destruction_planned_date", type="datetime", nullable=true)
     */
    private $tHarvestDestructionPlannedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_harvest_destruction_effective_date", type="datetime", nullable=true)
     */
    private $tHarvestDestructionEffectiveDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_planned_end_date", type="datetime", nullable=true)
     */
    private $tPlannedEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_effective_end_date", type="datetime", nullable=true)
     */
    private $tEffectiveEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_cl_info_2_date", type="datetime", nullable=true)
     */
    private $tClInfo2Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_cl_requested_date", type="datetime", nullable=true)
     */
    private $sClRequestedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_last_data_received_by_technician_date", type="datetime", nullable=true)
     */
    private $sLastDataReceivedByTechnicianDate;

    /**
     * @var int
     *
     * @ORM\Column(name="s_number_of_received_data", type="smallint", nullable=true)
     */
    private $sNumberOfReceivedData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_last_data_sent_to_cl_date", type="datetime", nullable=true)
     */
    private $sLastDataSentToClDate;

    /**
     * @var int
     *
     * @ORM\Column(name="s_number_of_sent_data", type="smallint", nullable=true)
     */
    private $sNumberOfSentData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_all_data_sent_date", type="datetime", nullable=true)
     */
    private $sAllDataSentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="s_commentary_on_data", type="string", length=255, nullable=true)
     */
    private $sCommentaryOnData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r_arm_asked_date", type="datetime", nullable=true)
     */
    private $rArmAskedDate;

    /**
     * @var int
     *
     * @ORM\Column(name="r_arm_asked_for_week", type="smallint", nullable=true)
     */
    private $rArmAskedForWeek;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r_final_tech_arm_received_date", type="datetime", nullable=true)
     */
    private $rFinalTechArmReceivedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="r_arm_commentary", type="string", length=255, nullable=true)
     */
    private $rArmCommentary;

    /**
     * @var int
     *
     * @ORM\Column(name="r_planned_report_for_week", type="smallint", nullable=true)
     */
    private $rPlannedReportForWeek;

    /**
     * @var bool
     *
     * @ORM\Column(name="r_received_comment", type="boolean", nullable=true)
     */
    private $rReceivedComment;

    /**
     * @var bool
     *
     * @ORM\Column(name="r_done_weather_forecast", type="boolean", nullable=true)
     */
    private $rDoneWeatherForecast;

    /**
     * @var bool
     *
     * @ORM\Column(name="r_rando_conforme_plan", type="boolean", nullable=true)
     */
    private $rRandoConformePlan;

    /**
     * @var bool
     *
     * @ORM\Column(name="r_harvest_destruction_received", type="boolean", nullable=true)
     */
    private $rHarvestDestructionReceived;

    /**
     * @var bool
     *
     * @ORM\Column(name="r_fiche_application_recue", type="boolean", nullable=true)
     */
    private $rFicheApplicationRecue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r_draft_sent_date", type="datetime", nullable=true)
     */
    private $rDraftSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r_final_report_sent_date", type="datetime", nullable=true)
     */
    private $rFinalReportSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r_cl_requested_date_for_report", type="datetime", nullable=true)
     */
    private $rClRequestedDateForReport;

    /**
     * @var string
     *
     * @ORM\Column(name="r_various", type="string", length=255, nullable=true)
     */
    private $rVarious;

    /**
     * @var string
     *
     * @ORM\Column(name="w_rain_station", type="string", length=255, nullable=true)
     */
    private $wRainStation;

    /**
     * @var int
     *
     * @ORM\Column(name="w_rain_station_distance", type="smallint", nullable=true)
     */
    private $wRainStationDistance;

    /**
     * @var string
     *
     * @ORM\Column(name="w_temperature_station", type="string", length=255, nullable=true)
     */
    private $wTemperatureStation;

    /**
     * @var int
     *
     * @ORM\Column(name="w_temperature_station_distance", type="smallint", nullable=true)
     */
    private $wTemperatureStationDistance;

    /**
     * @var bool
     *
     * @ORM\Column(name="b_bpe", type="boolean", nullable=true)
     */
    private $bBpe;

    /**
     * @var string
     *
     * @ORM\Column(name="d_kind_of_application", type="string", length=255, nullable=true)
     */
    private $dKindOfApplication;


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
     * Set gProjectManager
     *
     * @param string $gProjectManager
     *
     * @return Trial
     */
    public function setGProjectManager($gProjectManager)
    {
        $this->gProjectManager = $gProjectManager;

        return $this;
    }

    /**
     * Get gProjectManager
     *
     * @return string
     */
    public function getGProjectManager()
    {
        return $this->gProjectManager;
    }

    /**
     * Set gDepartement
     *
     * @param integer $gDepartement
     *
     * @return Trial
     */
    public function setGDepartement($gDepartement)
    {
        $this->gDepartement = $gDepartement;

        return $this;
    }

    /**
     * Get gDepartement
     *
     * @return int
     */
    public function getGDepartement()
    {
        return $this->gDepartement;
    }

    /**
     * Set gCountry
     *
     * @param string $gCountry
     *
     * @return Trial
     */
    public function setGCountry($gCountry)
    {
        $this->gCountry = $gCountry;

        return $this;
    }

    /**
     * Get gCountry
     *
     * @return string
     */
    public function getGCountry()
    {
        return $this->gCountry;
    }

    /**
     * Set gTechnician
     *
     * @param string $gTechnician
     *
     * @return Trial
     */
    public function setGTechnician($gTechnician)
    {
        $this->gTechnician = $gTechnician;

        return $this;
    }

    /**
     * Get gTechnician
     *
     * @return string
     */
    public function getGTechnician()
    {
        return $this->gTechnician;
    }

    /**
     * Set gCofracCode
     *
     * @param string $gCofracCode
     *
     * @return Trial
     */
    public function setGCofracCode($gCofracCode)
    {
        $this->gCofracCode = $gCofracCode;

        return $this;
    }

    /**
     * Get gCofracCode
     *
     * @return string
     */
    public function getGCofracCode()
    {
        return $this->gCofracCode;
    }

    /**
     * Set gYear
     *
     * @param integer $gYear
     *
     * @return Trial
     */
    public function setGYear($gYear)
    {
        $this->gYear = $gYear;

        return $this;
    }

    /**
     * Get gYear
     *
     * @return int
     */
    public function getGYear()
    {
        return $this->gYear;
    }

    /**
     * Set gEfip
     *
     * @param string $gEfip
     *
     * @return Trial
     */
    public function setGEfip($gEfip)
    {
        $this->gEfip = $gEfip;

        return $this;
    }

    /**
     * Get gEfip
     *
     * @return string
     */
    public function getGEfip()
    {
        return $this->gEfip;
    }

    /**
     * Set gHfieds
     *
     * @param string $gHfieds
     *
     * @return Trial
     */
    public function setGHfieds($gHfieds)
    {
        $this->gHfieds = $gHfieds;

        return $this;
    }

    /**
     * Get gHfieds
     *
     * @return string
     */
    public function getGHfieds()
    {
        return $this->gHfieds;
    }

    /**
     * Set gCropCode
     *
     * @param string $gCropCode
     *
     * @return Trial
     */
    public function setGCropCode($gCropCode)
    {
        $this->gCropCode = $gCropCode;

        return $this;
    }

    /**
     * Get gCropCode
     *
     * @return string
     */
    public function getGCropCode()
    {
        return $this->gCropCode;
    }

    /**
     * Set gSponsor
     *
     * @param string $gSponsor
     *
     * @return Trial
     */
    public function setGSponsor($gSponsor)
    {
        $this->gSponsor = $gSponsor;

        return $this;
    }

    /**
     * Get gSponsor
     *
     * @return string
     */
    public function getGSponsor()
    {
        return $this->gSponsor;
    }

    /**
     * Set gBps
     *
     * @param string $gBps
     *
     * @return Trial
     */
    public function setGBps($gBps)
    {
        $this->gBps = $gBps;

        return $this;
    }

    /**
     * Get gBps
     *
     * @return string
     */
    public function getGBps()
    {
        return $this->gBps;
    }

    /**
     * Set gProtocolNumber
     *
     * @param integer $gProtocolNumber
     *
     * @return Trial
     */
    public function setGProtocolNumber($gProtocolNumber)
    {
        $this->gProtocolNumber = $gProtocolNumber;

        return $this;
    }

    /**
     * Get gProtocolNumber
     *
     * @return int
     */
    public function getGProtocolNumber()
    {
        return $this->gProtocolNumber;
    }

    /**
     * Set gTrialNumber
     *
     * @param string $gTrialNumber
     *
     * @return Trial
     */
    public function setGTrialNumber($gTrialNumber)
    {
        $this->gTrialNumber = $gTrialNumber;

        return $this;
    }

    /**
     * Get gTrialNumber
     *
     * @return string
     */
    public function getGTrialNumber()
    {
        return $this->gTrialNumber;
    }

    /**
     * Set gSponsorContact
     *
     * @param string $gSponsorContact
     *
     * @return Trial
     */
    public function setGSponsorContact($gSponsorContact)
    {
        $this->gSponsorContact = $gSponsorContact;

        return $this;
    }

    /**
     * Get gSponsorContact
     *
     * @return string
     */
    public function getGSponsorContact()
    {
        return $this->gSponsorContact;
    }

    /**
     * Set gSponsorProtocolNumber
     *
     * @param string $gSponsorProtocolNumber
     *
     * @return Trial
     */
    public function setGSponsorProtocolNumber($gSponsorProtocolNumber)
    {
        $this->gSponsorProtocolNumber = $gSponsorProtocolNumber;

        return $this;
    }

    /**
     * Get gSponsorProtocolNumber
     *
     * @return string
     */
    public function getGSponsorProtocolNumber()
    {
        return $this->gSponsorProtocolNumber;
    }

    /**
     * Set gSponsorTrialNumber
     *
     * @param string $gSponsorTrialNumber
     *
     * @return Trial
     */
    public function setGSponsorTrialNumber($gSponsorTrialNumber)
    {
        $this->gSponsorTrialNumber = $gSponsorTrialNumber;

        return $this;
    }

    /**
     * Get gSponsorTrialNumber
     *
     * @return string
     */
    public function getGSponsorTrialNumber()
    {
        return $this->gSponsorTrialNumber;
    }

    /**
     * Set gDeclarationNumber
     *
     * @param string $gDeclarationNumber
     *
     * @return Trial
     */
    public function setGDeclarationNumber($gDeclarationNumber)
    {
        $this->gDeclarationNumber = $gDeclarationNumber;

        return $this;
    }

    /**
     * Get gDeclarationNumber
     *
     * @return string
     */
    public function getGDeclarationNumber()
    {
        return $this->gDeclarationNumber;
    }

    /**
     * Set gTheme
     *
     * @param string $gTheme
     *
     * @return Trial
     */
    public function setGTheme($gTheme)
    {
        $this->gTheme = $gTheme;

        return $this;
    }

    /**
     * Get gTheme
     *
     * @return string
     */
    public function getGTheme()
    {
        return $this->gTheme;
    }

    /**
     * Set gCrop
     *
     * @param string $gCrop
     *
     * @return Trial
     */
    public function setGCrop($gCrop)
    {
        $this->gCrop = $gCrop;

        return $this;
    }

    /**
     * Get gCrop
     *
     * @return string
     */
    public function getGCrop()
    {
        return $this->gCrop;
    }

    /**
     * Set gPathogen
     *
     * @param string $gPathogen
     *
     * @return Trial
     */
    public function setGPathogen($gPathogen)
    {
        $this->gPathogen = $gPathogen;

        return $this;
    }

    /**
     * Get gPathogen
     *
     * @return string
     */
    public function getGPathogen()
    {
        return $this->gPathogen;
    }

    /**
     * Set pClReceivedDate
     *
     * @param \DateTime $pClReceivedDate
     *
     * @return Trial
     */
    public function setPClReceivedDate($pClReceivedDate)
    {
        $this->pClReceivedDate = $pClReceivedDate;

        return $this;
    }

    /**
     * Get pClReceivedDate
     *
     * @return \DateTime
     */
    public function getPClReceivedDate()
    {
        return $this->pClReceivedDate;
    }

    /**
     * Set pClArmReceived
     *
     * @param boolean $pClArmReceived
     *
     * @return Trial
     */
    public function setPClArmReceived($pClArmReceived)
    {
        $this->pClArmReceived = $pClArmReceived;

        return $this;
    }

    /**
     * Get pClArmReceived
     *
     * @return bool
     */
    public function getPClArmReceived()
    {
        return $this->pClArmReceived;
    }

    /**
     * Set pPvArmContractInfo
     *
     * @param boolean $pPvArmContractInfo
     *
     * @return Trial
     */
    public function setPPvArmContractInfo($pPvArmContractInfo)
    {
        $this->pPvArmContractInfo = $pPvArmContractInfo;

        return $this;
    }

    /**
     * Get pPvArmContractInfo
     *
     * @return bool
     */
    public function getPPvArmContractInfo()
    {
        return $this->pPvArmContractInfo;
    }

    /**
     * Set pPermitDerogationCl
     *
     * @param boolean $pPermitDerogationCl
     *
     * @return Trial
     */
    public function setPPermitDerogationCl($pPermitDerogationCl)
    {
        $this->pPermitDerogationCl = $pPermitDerogationCl;

        return $this;
    }

    /**
     * Get pPermitDerogationCl
     *
     * @return bool
     */
    public function getPPermitDerogationCl()
    {
        return $this->pPermitDerogationCl;
    }

    /**
     * Set pDerogationPvDate
     *
     * @param \DateTime $pDerogationPvDate
     *
     * @return Trial
     */
    public function setPDerogationPvDate($pDerogationPvDate)
    {
        $this->pDerogationPvDate = $pDerogationPvDate;

        return $this;
    }

    /**
     * Get pDerogationPvDate
     *
     * @return \DateTime
     */
    public function getPDerogationPvDate()
    {
        return $this->pDerogationPvDate;
    }

    /**
     * Set pOfficialDeclarationDate
     *
     * @param \DateTime $pOfficialDeclarationDate
     *
     * @return Trial
     */
    public function setPOfficialDeclarationDate($pOfficialDeclarationDate)
    {
        $this->pOfficialDeclarationDate = $pOfficialDeclarationDate;

        return $this;
    }

    /**
     * Get pOfficialDeclarationDate
     *
     * @return \DateTime
     */
    public function getPOfficialDeclarationDate()
    {
        return $this->pOfficialDeclarationDate;
    }

    /**
     * Set pPvVersionSent
     *
     * @param string $pPvVersionSent
     *
     * @return Trial
     */
    public function setPPvVersionSent($pPvVersionSent)
    {
        $this->pPvVersionSent = $pPvVersionSent;

        return $this;
    }

    /**
     * Get pPvVersionSent
     *
     * @return string
     */
    public function getPPvVersionSent()
    {
        return $this->pPvVersionSent;
    }

    /**
     * Set pPvVersionSentDate
     *
     * @param \DateTime $pPvVersionSentDate
     *
     * @return Trial
     */
    public function setPPvVersionSentDate($pPvVersionSentDate)
    {
        $this->pPvVersionSentDate = $pPvVersionSentDate;

        return $this;
    }

    /**
     * Get pPvVersionSentDate
     *
     * @return \DateTime
     */
    public function getPPvVersionSentDate()
    {
        return $this->pPvVersionSentDate;
    }

    /**
     * Set pTechSentDate
     *
     * @param array $pTechSentDate
     *
     * @return Trial
     */
    public function setPTechSentDate($pTechSentDate)
    {
        $this->pTechSentDate = $pTechSentDate;

        return $this;
    }

    /**
     * Get pTechSentDate
     *
     * @return array
     */
    public function getPTechSentDate()
    {
        return $this->pTechSentDate;
    }

    /**
     * Set cProductOrderDate
     *
     * @param \DateTime $cProductOrderDate
     *
     * @return Trial
     */
    public function setCProductOrderDate($cProductOrderDate)
    {
        $this->cProductOrderDate = $cProductOrderDate;

        return $this;
    }

    /**
     * Get cProductOrderDate
     *
     * @return \DateTime
     */
    public function getCProductOrderDate()
    {
        return $this->cProductOrderDate;
    }

    /**
     * Set cProductOrderedBy
     *
     * @param string $cProductOrderedBy
     *
     * @return Trial
     */
    public function setCProductOrderedBy($cProductOrderedBy)
    {
        $this->cProductOrderedBy = $cProductOrderedBy;

        return $this;
    }

    /**
     * Get cProductOrderedBy
     *
     * @return string
     */
    public function getCProductOrderedBy()
    {
        return $this->cProductOrderedBy;
    }

    /**
     * Set cRefProvidedByCl
     *
     * @param boolean $cRefProvidedByCl
     *
     * @return Trial
     */
    public function setCRefProvidedByCl($cRefProvidedByCl)
    {
        $this->cRefProvidedByCl = $cRefProvidedByCl;

        return $this;
    }

    /**
     * Get cRefProvidedByCl
     *
     * @return bool
     */
    public function getCRefProvidedByCl()
    {
        return $this->cRefProvidedByCl;
    }

    /**
     * Set cReceivedByRegion
     *
     * @param boolean $cReceivedByRegion
     *
     * @return Trial
     */
    public function setCReceivedByRegion($cReceivedByRegion)
    {
        $this->cReceivedByRegion = $cReceivedByRegion;

        return $this;
    }

    /**
     * Get cReceivedByRegion
     *
     * @return bool
     */
    public function getCReceivedByRegion()
    {
        return $this->cReceivedByRegion;
    }

    /**
     * Set tTrialPostalCodeLocation
     *
     * @param integer $tTrialPostalCodeLocation
     *
     * @return Trial
     */
    public function setTTrialPostalCodeLocation($tTrialPostalCodeLocation)
    {
        $this->tTrialPostalCodeLocation = $tTrialPostalCodeLocation;

        return $this;
    }

    /**
     * Get tTrialPostalCodeLocation
     *
     * @return int
     */
    public function getTTrialPostalCodeLocation()
    {
        return $this->tTrialPostalCodeLocation;
    }

    /**
     * Set tTrialCityLocation
     *
     * @param string $tTrialCityLocation
     *
     * @return Trial
     */
    public function setTTrialCityLocation($tTrialCityLocation)
    {
        $this->tTrialCityLocation = $tTrialCityLocation;

        return $this;
    }

    /**
     * Get tTrialCityLocation
     *
     * @return string
     */
    public function getTTrialCityLocation()
    {
        return $this->tTrialCityLocation;
    }

    /**
     * Set tAdvancementCode
     *
     * @param integer $tAdvancementCode
     *
     * @return Trial
     */
    public function setTAdvancementCode($tAdvancementCode)
    {
        $this->tAdvancementCode = $tAdvancementCode;

        return $this;
    }

    /**
     * Get tAdvancementCode
     *
     * @return int
     */
    public function getTAdvancementCode()
    {
        return $this->tAdvancementCode;
    }

    /**
     * Set tPlannedSettingUpDate
     *
     * @param \DateTime $tPlannedSettingUpDate
     *
     * @return Trial
     */
    public function setTPlannedSettingUpDate($tPlannedSettingUpDate)
    {
        $this->tPlannedSettingUpDate = $tPlannedSettingUpDate;

        return $this;
    }

    /**
     * Get tPlannedSettingUpDate
     *
     * @return \DateTime
     */
    public function getTPlannedSettingUpDate()
    {
        return $this->tPlannedSettingUpDate;
    }

    /**
     * Set tEffectiveSettingUpDate
     *
     * @param \DateTime $tEffectiveSettingUpDate
     *
     * @return Trial
     */
    public function setTEffectiveSettingUpDate($tEffectiveSettingUpDate)
    {
        $this->tEffectiveSettingUpDate = $tEffectiveSettingUpDate;

        return $this;
    }

    /**
     * Get tEffectiveSettingUpDate
     *
     * @return \DateTime
     */
    public function getTEffectiveSettingUpDate()
    {
        return $this->tEffectiveSettingUpDate;
    }

    /**
     * Set tClInfoDate
     *
     * @param \DateTime $tClInfoDate
     *
     * @return Trial
     */
    public function setTClInfoDate($tClInfoDate)
    {
        $this->tClInfoDate = $tClInfoDate;

        return $this;
    }

    /**
     * Get tClInfoDate
     *
     * @return \DateTime
     */
    public function getTClInfoDate()
    {
        return $this->tClInfoDate;
    }

    /**
     * Set tContaArtif
     *
     * @param boolean $tContaArtif
     *
     * @return Trial
     */
    public function setTContaArtif($tContaArtif)
    {
        $this->tContaArtif = $tContaArtif;

        return $this;
    }

    /**
     * Get tContaArtif
     *
     * @return bool
     */
    public function getTContaArtif()
    {
        return $this->tContaArtif;
    }

    /**
     * Set tAskedVisit
     *
     * @param boolean $tAskedVisit
     *
     * @return Trial
     */
    public function setTAskedVisit($tAskedVisit)
    {
        $this->tAskedVisit = $tAskedVisit;

        return $this;
    }

    /**
     * Get tAskedVisit
     *
     * @return bool
     */
    public function getTAskedVisit()
    {
        return $this->tAskedVisit;
    }

    /**
     * Set tHarvest
     *
     * @param boolean $tHarvest
     *
     * @return Trial
     */
    public function setTHarvest($tHarvest)
    {
        $this->tHarvest = $tHarvest;

        return $this;
    }

    /**
     * Get tHarvest
     *
     * @return bool
     */
    public function getTHarvest()
    {
        return $this->tHarvest;
    }

    /**
     * Set tNumberOfHarvestToDestruct
     *
     * @param integer $tNumberOfHarvestToDestruct
     *
     * @return Trial
     */
    public function setTNumberOfHarvestToDestruct($tNumberOfHarvestToDestruct)
    {
        $this->tNumberOfHarvestToDestruct = $tNumberOfHarvestToDestruct;

        return $this;
    }

    /**
     * Get tNumberOfHarvestToDestruct
     *
     * @return int
     */
    public function getTNumberOfHarvestToDestruct()
    {
        return $this->tNumberOfHarvestToDestruct;
    }

    /**
     * Set tHarvestDestructionPlannedDate
     *
     * @param \DateTime $tHarvestDestructionPlannedDate
     *
     * @return Trial
     */
    public function setTHarvestDestructionPlannedDate($tHarvestDestructionPlannedDate)
    {
        $this->tHarvestDestructionPlannedDate = $tHarvestDestructionPlannedDate;

        return $this;
    }

    /**
     * Get tHarvestDestructionPlannedDate
     *
     * @return \DateTime
     */
    public function getTHarvestDestructionPlannedDate()
    {
        return $this->tHarvestDestructionPlannedDate;
    }

    /**
     * Set tHarvestDestructionEffectiveDate
     *
     * @param \DateTime $tHarvestDestructionEffectiveDate
     *
     * @return Trial
     */
    public function setTHarvestDestructionEffectiveDate($tHarvestDestructionEffectiveDate)
    {
        $this->tHarvestDestructionEffectiveDate = $tHarvestDestructionEffectiveDate;

        return $this;
    }

    /**
     * Get tHarvestDestructionEffectiveDate
     *
     * @return \DateTime
     */
    public function getTHarvestDestructionEffectiveDate()
    {
        return $this->tHarvestDestructionEffectiveDate;
    }

    /**
     * Set tPlannedEndDate
     *
     * @param \DateTime $tPlannedEndDate
     *
     * @return Trial
     */
    public function setTPlannedEndDate($tPlannedEndDate)
    {
        $this->tPlannedEndDate = $tPlannedEndDate;

        return $this;
    }

    /**
     * Get tPlannedEndDate
     *
     * @return \DateTime
     */
    public function getTPlannedEndDate()
    {
        return $this->tPlannedEndDate;
    }

    /**
     * Set tEffectiveEndDate
     *
     * @param \DateTime $tEffectiveEndDate
     *
     * @return Trial
     */
    public function setTEffectiveEndDate($tEffectiveEndDate)
    {
        $this->tEffectiveEndDate = $tEffectiveEndDate;

        return $this;
    }

    /**
     * Get tEffectiveEndDate
     *
     * @return \DateTime
     */
    public function getTEffectiveEndDate()
    {
        return $this->tEffectiveEndDate;
    }

    /**
     * Set tClInfo2Date
     *
     * @param \DateTime $tClInfo2Date
     *
     * @return Trial
     */
    public function setTClInfo2Date($tClInfo2Date)
    {
        $this->tClInfo2Date = $tClInfo2Date;

        return $this;
    }

    /**
     * Get tClInfo2Date
     *
     * @return \DateTime
     */
    public function getTClInfo2Date()
    {
        return $this->tClInfo2Date;
    }

    /**
     * Set sClRequestedDate
     *
     * @param \DateTime $sClRequestedDate
     *
     * @return Trial
     */
    public function setSClRequestedDate($sClRequestedDate)
    {
        $this->sClRequestedDate = $sClRequestedDate;

        return $this;
    }

    /**
     * Get sClRequestedDate
     *
     * @return \DateTime
     */
    public function getSClRequestedDate()
    {
        return $this->sClRequestedDate;
    }

    /**
     * Set sLastDataReceivedByTechnicianDate
     *
     * @param \DateTime $sLastDataReceivedByTechnicianDate
     *
     * @return Trial
     */
    public function setSLastDataReceivedByTechnicianDate($sLastDataReceivedByTechnicianDate)
    {
        $this->sLastDataReceivedByTechnicianDate = $sLastDataReceivedByTechnicianDate;

        return $this;
    }

    /**
     * Get sLastDataReceivedByTechnicianDate
     *
     * @return \DateTime
     */
    public function getSLastDataReceivedByTechnicianDate()
    {
        return $this->sLastDataReceivedByTechnicianDate;
    }

    /**
     * Set sNumberOfReceivedData
     *
     * @param integer $sNumberOfReceivedData
     *
     * @return Trial
     */
    public function setSNumberOfReceivedData($sNumberOfReceivedData)
    {
        $this->sNumberOfReceivedData = $sNumberOfReceivedData;

        return $this;
    }

    /**
     * Get sNumberOfReceivedData
     *
     * @return int
     */
    public function getSNumberOfReceivedData()
    {
        return $this->sNumberOfReceivedData;
    }

    /**
     * Set sLastDataSentToClDate
     *
     * @param \DateTime $sLastDataSentToClDate
     *
     * @return Trial
     */
    public function setSLastDataSentToClDate($sLastDataSentToClDate)
    {
        $this->sLastDataSentToClDate = $sLastDataSentToClDate;

        return $this;
    }

    /**
     * Get sLastDataSentToClDate
     *
     * @return \DateTime
     */
    public function getSLastDataSentToClDate()
    {
        return $this->sLastDataSentToClDate;
    }

    /**
     * Set sNumberOfSentData
     *
     * @param integer $sNumberOfSentData
     *
     * @return Trial
     */
    public function setSNumberOfSentData($sNumberOfSentData)
    {
        $this->sNumberOfSentData = $sNumberOfSentData;

        return $this;
    }

    /**
     * Get sNumberOfSentData
     *
     * @return int
     */
    public function getSNumberOfSentData()
    {
        return $this->sNumberOfSentData;
    }

    /**
     * Set sAllDataSentDate
     *
     * @param \DateTime $sAllDataSentDate
     *
     * @return Trial
     */
    public function setSAllDataSentDate($sAllDataSentDate)
    {
        $this->sAllDataSentDate = $sAllDataSentDate;

        return $this;
    }

    /**
     * Get sAllDataSentDate
     *
     * @return \DateTime
     */
    public function getSAllDataSentDate()
    {
        return $this->sAllDataSentDate;
    }

    /**
     * Set sCommentaryOnData
     *
     * @param string $sCommentaryOnData
     *
     * @return Trial
     */
    public function setSCommentaryOnData($sCommentaryOnData)
    {
        $this->sCommentaryOnData = $sCommentaryOnData;

        return $this;
    }

    /**
     * Get sCommentaryOnData
     *
     * @return string
     */
    public function getSCommentaryOnData()
    {
        return $this->sCommentaryOnData;
    }

    /**
     * Set rArmAskedDate
     *
     * @param \DateTime $rArmAskedDate
     *
     * @return Trial
     */
    public function setRArmAskedDate($rArmAskedDate)
    {
        $this->rArmAskedDate = $rArmAskedDate;

        return $this;
    }

    /**
     * Get rArmAskedDate
     *
     * @return \DateTime
     */
    public function getRArmAskedDate()
    {
        return $this->rArmAskedDate;
    }

    /**
     * Set rArmAskedForWeek
     *
     * @param integer $rArmAskedForWeek
     *
     * @return Trial
     */
    public function setRArmAskedForWeek($rArmAskedForWeek)
    {
        $this->rArmAskedForWeek = $rArmAskedForWeek;

        return $this;
    }

    /**
     * Get rArmAskedForWeek
     *
     * @return int
     */
    public function getRArmAskedForWeek()
    {
        return $this->rArmAskedForWeek;
    }

    /**
     * Set rFinalTechArmReceivedDate
     *
     * @param \DateTime $rFinalTechArmReceivedDate
     *
     * @return Trial
     */
    public function setRFinalTechArmReceivedDate($rFinalTechArmReceivedDate)
    {
        $this->rFinalTechArmReceivedDate = $rFinalTechArmReceivedDate;

        return $this;
    }

    /**
     * Get rFinalTechArmReceivedDate
     *
     * @return \DateTime
     */
    public function getRFinalTechArmReceivedDate()
    {
        return $this->rFinalTechArmReceivedDate;
    }

    /**
     * Set rArmCommentary
     *
     * @param string $rArmCommentary
     *
     * @return Trial
     */
    public function setRArmCommentary($rArmCommentary)
    {
        $this->rArmCommentary = $rArmCommentary;

        return $this;
    }

    /**
     * Get rArmCommentary
     *
     * @return string
     */
    public function getRArmCommentary()
    {
        return $this->rArmCommentary;
    }

    /**
     * Set rPlannedReportForWeek
     *
     * @param integer $rPlannedReportForWeek
     *
     * @return Trial
     */
    public function setRPlannedReportForWeek($rPlannedReportForWeek)
    {
        $this->rPlannedReportForWeek = $rPlannedReportForWeek;

        return $this;
    }

    /**
     * Get rPlannedReportForWeek
     *
     * @return int
     */
    public function getRPlannedReportForWeek()
    {
        return $this->rPlannedReportForWeek;
    }

    /**
     * Set rReceivedComment
     *
     * @param boolean $rReceivedComment
     *
     * @return Trial
     */
    public function setRReceivedComment($rReceivedComment)
    {
        $this->rReceivedComment = $rReceivedComment;

        return $this;
    }

    /**
     * Get rReceivedComment
     *
     * @return bool
     */
    public function getRReceivedComment()
    {
        return $this->rReceivedComment;
    }

    /**
     * Set rDoneWeatherForecast
     *
     * @param boolean $rDoneWeatherForecast
     *
     * @return Trial
     */
    public function setRDoneWeatherForecast($rDoneWeatherForecast)
    {
        $this->rDoneWeatherForecast = $rDoneWeatherForecast;

        return $this;
    }

    /**
     * Get rDoneWeatherForecast
     *
     * @return bool
     */
    public function getRDoneWeatherForecast()
    {
        return $this->rDoneWeatherForecast;
    }

    /**
     * Set rRandoConformePlan
     *
     * @param boolean $rRandoConformePlan
     *
     * @return Trial
     */
    public function setRRandoConformePlan($rRandoConformePlan)
    {
        $this->rRandoConformePlan = $rRandoConformePlan;

        return $this;
    }

    /**
     * Get rRandoConformePlan
     *
     * @return bool
     */
    public function getRRandoConformePlan()
    {
        return $this->rRandoConformePlan;
    }

    /**
     * Set rHarvestDestructionReceived
     *
     * @param boolean $rHarvestDestructionReceived
     *
     * @return Trial
     */
    public function setRHarvestDestructionReceived($rHarvestDestructionReceived)
    {
        $this->rHarvestDestructionReceived = $rHarvestDestructionReceived;

        return $this;
    }

    /**
     * Get rHarvestDestructionReceived
     *
     * @return bool
     */
    public function getRHarvestDestructionReceived()
    {
        return $this->rHarvestDestructionReceived;
    }

    /**
     * Set rFicheApplicationRecue
     *
     * @param boolean $rFicheApplicationRecue
     *
     * @return Trial
     */
    public function setRFicheApplicationRecue($rFicheApplicationRecue)
    {
        $this->rFicheApplicationRecue = $rFicheApplicationRecue;

        return $this;
    }

    /**
     * Get rFicheApplicationRecue
     *
     * @return bool
     */
    public function getRFicheApplicationRecue()
    {
        return $this->rFicheApplicationRecue;
    }

    /**
     * Set rDraftSentDate
     *
     * @param \DateTime $rDraftSentDate
     *
     * @return Trial
     */
    public function setRDraftSentDate($rDraftSentDate)
    {
        $this->rDraftSentDate = $rDraftSentDate;

        return $this;
    }

    /**
     * Get rDraftSentDate
     *
     * @return \DateTime
     */
    public function getRDraftSentDate()
    {
        return $this->rDraftSentDate;
    }

    /**
     * Set rFinalReportSentDate
     *
     * @param \DateTime $rFinalReportSentDate
     *
     * @return Trial
     */
    public function setRFinalReportSentDate($rFinalReportSentDate)
    {
        $this->rFinalReportSentDate = $rFinalReportSentDate;

        return $this;
    }

    /**
     * Get rFinalReportSentDate
     *
     * @return \DateTime
     */
    public function getRFinalReportSentDate()
    {
        return $this->rFinalReportSentDate;
    }

    /**
     * Set rClRequestedDateForReport
     *
     * @param \DateTime $rClRequestedDateForReport
     *
     * @return Trial
     */
    public function setRClRequestedDateForReport($rClRequestedDateForReport)
    {
        $this->rClRequestedDateForReport = $rClRequestedDateForReport;

        return $this;
    }

    /**
     * Get rClRequestedDateForReport
     *
     * @return \DateTime
     */
    public function getRClRequestedDateForReport()
    {
        return $this->rClRequestedDateForReport;
    }

    /**
     * Set rVarious
     *
     * @param string $rVarious
     *
     * @return Trial
     */
    public function setRVarious($rVarious)
    {
        $this->rVarious = $rVarious;

        return $this;
    }

    /**
     * Get rVarious
     *
     * @return string
     */
    public function getRVarious()
    {
        return $this->rVarious;
    }

    /**
     * Set wRainStation
     *
     * @param string $wRainStation
     *
     * @return Trial
     */
    public function setWRainStation($wRainStation)
    {
        $this->wRainStation = $wRainStation;

        return $this;
    }

    /**
     * Get wRainStation
     *
     * @return string
     */
    public function getWRainStation()
    {
        return $this->wRainStation;
    }

    /**
     * Set wRainStationDistance
     *
     * @param integer $wRainStationDistance
     *
     * @return Trial
     */
    public function setWRainStationDistance($wRainStationDistance)
    {
        $this->wRainStationDistance = $wRainStationDistance;

        return $this;
    }

    /**
     * Get wRainStationDistance
     *
     * @return int
     */
    public function getWRainStationDistance()
    {
        return $this->wRainStationDistance;
    }

    /**
     * Set wTemperatureStation
     *
     * @param string $wTemperatureStation
     *
     * @return Trial
     */
    public function setWTemperatureStation($wTemperatureStation)
    {
        $this->wTemperatureStation = $wTemperatureStation;

        return $this;
    }

    /**
     * Get wTemperatureStation
     *
     * @return string
     */
    public function getWTemperatureStation()
    {
        return $this->wTemperatureStation;
    }

    /**
     * Set wTemperatureStationDistance
     *
     * @param integer $wTemperatureStationDistance
     *
     * @return Trial
     */
    public function setWTemperatureStationDistance($wTemperatureStationDistance)
    {
        $this->wTemperatureStationDistance = $wTemperatureStationDistance;

        return $this;
    }

    /**
     * Get wTemperatureStationDistance
     *
     * @return int
     */
    public function getWTemperatureStationDistance()
    {
        return $this->wTemperatureStationDistance;
    }

    /**
     * Set bBpe
     *
     * @param boolean $bBpe
     *
     * @return Trial
     */
    public function setBBpe($bBpe)
    {
        $this->bBpe = $bBpe;

        return $this;
    }

    /**
     * Get bBpe
     *
     * @return bool
     */
    public function getBBpe()
    {
        return $this->bBpe;
    }

    /**
     * Set dKindOfApplication
     *
     * @param string $dKindOfApplication
     *
     * @return Trial
     */
    public function setDKindOfApplication($dKindOfApplication)
    {
        $this->dKindOfApplication = $dKindOfApplication;

        return $this;
    }

    /**
     * Get dKindOfApplication
     *
     * @return string
     */
    public function getDKindOfApplication()
    {
        return $this->dKindOfApplication;
    }
}

