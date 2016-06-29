<?php

namespace Gueststream\PMS\IQWare\API;

class CondoConfig
{

    /**
     * @var boolean $IsAllowOwnerBookOOS
     */
    protected $IsAllowOwnerBookOOS = null;

    /**
     * @var \DateTime $LoadTime
     */
    protected $LoadTime = null;

    /**
     * @var int $ID_Property
     */
    protected $ID_Property = null;

    /**
     * @var int $ID_SvcCharge
     */
    protected $ID_SvcCharge = null;

    /**
     * @var int $ID_MarketSegment
     */
    protected $ID_MarketSegment = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var int $WeightingMethod
     */
    protected $WeightingMethod = null;

    /**
     * @var int $ID_TrnOwnerRevenu
     */
    protected $ID_TrnOwnerRevenu = null;

    /**
     * @var boolean $IsIncomeTax
     */
    protected $IsIncomeTax = null;

    /**
     * @var float $IncomeTaxPct
     */
    protected $IncomeTaxPct = null;

    /**
     * @var int $ID_TrnIncomeTax
     */
    protected $ID_TrnIncomeTax = null;

    /**
     * @var boolean $IsTAChargedBack
     */
    protected $IsTAChargedBack = null;

    /**
     * @var int $ID_TrnTAChargedBack
     */
    protected $ID_TrnTAChargedBack = null;

    /**
     * @var int $ID_TrnOwnerCheck
     */
    protected $ID_TrnOwnerCheck = null;

    /**
     * @var boolean $IsTaxNo1Owner
     */
    protected $IsTaxNo1Owner = null;

    /**
     * @var int $ID_TrnTax1
     */
    protected $ID_TrnTax1 = null;

    /**
     * @var int $ID_TrnTax1Owner
     */
    protected $ID_TrnTax1Owner = null;

    /**
     * @var boolean $IsTaxNo2Owner
     */
    protected $IsTaxNo2Owner = null;

    /**
     * @var int $ID_TrnTax2
     */
    protected $ID_TrnTax2 = null;

    /**
     * @var int $ID_TrnTax2Owner
     */
    protected $ID_TrnTax2Owner = null;

    /**
     * @var int $MinDayPromo
     */
    protected $MinDayPromo = null;

    /**
     * @var boolean $IsActiveBookingNotice
     */
    protected $IsActiveBookingNotice = null;

    /**
     * @var int $NbrDaysResident
     */
    protected $NbrDaysResident = null;

    /**
     * @var int $NbrDaysNonResident
     */
    protected $NbrDaysNonResident = null;

    /**
     * @var float $PenaltyPct
     */
    protected $PenaltyPct = null;

    /**
     * @var boolean $IsAutoEOMClosing
     */
    protected $IsAutoEOMClosing = null;

    /**
     * @var \DateTime $EOMClosingDate
     */
    protected $EOMClosingDate = null;

    /**
     * @var int $ID_Commision
     */
    protected $ID_Commision = null;

    /**
     * @var int $ID_GrossRev
     */
    protected $ID_GrossRev = null;

    /**
     * @var int $ID_MgtFee
     */
    protected $ID_MgtFee = null;

    /**
     * @var int $GrossFormulaType
     */
    protected $GrossFormulaType = null;

    /**
     * @var int $ID_TrnAdminAdjust
     */
    protected $ID_TrnAdminAdjust = null;

    /**
     * @var int $ID_TrnGuestAdjust
     */
    protected $ID_TrnGuestAdjust = null;

    /**
     * @var int $ID_Admin
     */
    protected $ID_Admin = null;

    /**
     * @var boolean $IsManagedByBo
     */
    protected $IsManagedByBo = null;

    /**
     * @var int $BeginDay
     */
    protected $BeginDay = null;

    /**
     * @var int $BeginMonth
     */
    protected $BeginMonth = null;

    /**
     * @var int $EndDay
     */
    protected $EndDay = null;

    /**
     * @var int $EndMonth
     */
    protected $EndMonth = null;

    /**
     * @var boolean $IsPoolMethodActif
     */
    protected $IsPoolMethodActif = null;

    /**
     * @var boolean $IsIndMethodActif
     */
    protected $IsIndMethodActif = null;

    /**
     * @var boolean $IsRevInput
     */
    protected $IsRevInput = null;

    /**
     * @var int $ID_RateCodeRack
     */
    protected $ID_RateCodeRack = null;

    /**
     * @var int $NbrPersonRack
     */
    protected $NbrPersonRack = null;

    /**
     * @var int $ID_TrnDistRevenu
     */
    protected $ID_TrnDistRevenu = null;

    /**
     * @var float $TotalAmountPoolRev
     */
    protected $TotalAmountPoolRev = null;

    /**
     * @var float $MinCheckOwner
     */
    protected $MinCheckOwner = null;

    /**
     * @var boolean $IsRefusal
     */
    protected $IsRefusal = null;

    /**
     * @var boolean $IsTACommIncomeTaxDetectible
     */
    protected $IsTACommIncomeTaxDetectible = null;

    /**
     * @var boolean $IsSalesTaxReturn100Pct
     */
    protected $IsSalesTaxReturn100Pct = null;

    /**
     * @var float $PctBuildPool
     */
    protected $PctBuildPool = null;

    /**
     * @var boolean $IsRanking_Weight
     */
    protected $IsRanking_Weight = null;

    /**
     * @var boolean $IsReadyClosed
     */
    protected $IsReadyClosed = null;

    /**
     * @var boolean $IsAdjustToPostingTrn
     */
    protected $IsAdjustToPostingTrn = null;

    /**
     * @var boolean $IsTrnZerroToPost
     */
    protected $IsTrnZerroToPost = null;

    /**
     * @var boolean $IsDailyDistrib
     */
    protected $IsDailyDistrib = null;

    /**
     * @var float $MarketSegDefaultPct
     */
    protected $MarketSegDefaultPct = null;

    /**
     * @var boolean $IsCCChargedBack
     */
    protected $IsCCChargedBack = null;

    /**
     * @var int $ID_TrnCCChargedBack
     */
    protected $ID_TrnCCChargedBack = null;

    /**
     * @var boolean $IsReferal
     */
    protected $IsReferal = null;

    /**
     * @var int $ID_TrnReferal
     */
    protected $ID_TrnReferal = null;

    /**
     * @var int $ID_TrnTax3
     */
    protected $ID_TrnTax3 = null;

    /**
     * @var boolean $IsTaxNo3Owner
     */
    protected $IsTaxNo3Owner = null;

    /**
     * @var boolean $IsOtherChargedBack
     */
    protected $IsOtherChargedBack = null;

    /**
     * @var int $ID_TrnOtherChargedBack
     */
    protected $ID_TrnOtherChargedBack = null;

    /**
     * @var int $ID_TrnOtherChargedBackOwner
     */
    protected $ID_TrnOtherChargedBackOwner = null;

    /**
     * @var string $Name_OtherChargedBack
     */
    protected $Name_OtherChargedBack = null;

    /**
     * @var float $Referal1
     */
    protected $Referal1 = null;

    /**
     * @var float $Referal2
     */
    protected $Referal2 = null;

    /**
     * @var float $Referal3
     */
    protected $Referal3 = null;

    /**
     * @var int $ReferalType
     */
    protected $ReferalType = null;

    /**
     * @var int $ID_TrnReferalOwner
     */
    protected $ID_TrnReferalOwner = null;

    /**
     * @var boolean $IsReferalOwnerCB
     */
    protected $IsReferalOwnerCB = null;

    /**
     * @var float $PctTAChargedBack
     */
    protected $PctTAChargedBack = null;

    /**
     * @var int $FiscalDayAjustment
     */
    protected $FiscalDayAjustment = null;

    /**
     * @var boolean $IsOwnerDirectDeposit
     */
    protected $IsOwnerDirectDeposit = null;

    /**
     * @var int $ID_TrnOwnerDirectDeposit
     */
    protected $ID_TrnOwnerDirectDeposit = null;

    /**
     * @var int $ID_AdminDDCXL
     */
    protected $ID_AdminDDCXL = null;

    /**
     * @var boolean $IsUsedBankAllowed
     */
    protected $IsUsedBankAllowed = null;

    /**
     * @var int $ID_RateCodeUsedBank
     */
    protected $ID_RateCodeUsedBank = null;

    /**
     * @var boolean $IsActiveReserveMinimum
     */
    protected $IsActiveReserveMinimum = null;

    /**
     * @var float $AmountReserveMinimum
     */
    protected $AmountReserveMinimum = null;

    /**
     * @var int $SubFolioReserveMinimum
     */
    protected $SubFolioReserveMinimum = null;

    /**
     * @var int $ID_TrnReserveMinimum
     */
    protected $ID_TrnReserveMinimum = null;

    /**
     * @var boolean $IsTAReferalBefore
     */
    protected $IsTAReferalBefore = null;

    /**
     * @var boolean $IsCCReferalBefore
     */
    protected $IsCCReferalBefore = null;

    /**
     * @var boolean $IsIncomeTaxOwnerGross
     */
    protected $IsIncomeTaxOwnerGross = null;

    /**
     * @var int $NbreOfPlan
     */
    protected $NbreOfPlan = null;

    /**
     * @var boolean $IsActiveRanking
     */
    protected $IsActiveRanking = null;

    /**
     * @var int $ID_RateCodeRanking
     */
    protected $ID_RateCodeRanking = null;

    /**
     * @var boolean $IsJanuaryRankingReset
     */
    protected $IsJanuaryRankingReset = null;

    /**
     * @var boolean $IsFebruaryRankingReset
     */
    protected $IsFebruaryRankingReset = null;

    /**
     * @var boolean $IsMarchRankingReset
     */
    protected $IsMarchRankingReset = null;

    /**
     * @var boolean $IsAprilRankingReset
     */
    protected $IsAprilRankingReset = null;

    /**
     * @var boolean $IsMayRankingReset
     */
    protected $IsMayRankingReset = null;

    /**
     * @var boolean $IsJuneRankingReset
     */
    protected $IsJuneRankingReset = null;

    /**
     * @var boolean $IsJulyRankingReset
     */
    protected $IsJulyRankingReset = null;

    /**
     * @var boolean $IsAugustRankingReset
     */
    protected $IsAugustRankingReset = null;

    /**
     * @var boolean $IsSeptemberRankingReset
     */
    protected $IsSeptemberRankingReset = null;

    /**
     * @var boolean $IsOctoberRankingReset
     */
    protected $IsOctoberRankingReset = null;

    /**
     * @var boolean $IsNovemberRankingReset
     */
    protected $IsNovemberRankingReset = null;

    /**
     * @var boolean $IsDecemberRankingReset
     */
    protected $IsDecemberRankingReset = null;

    /**
     * @var int $NbreOfPlanOwnerBank
     */
    protected $NbreOfPlanOwnerBank = null;

    /**
     * @var boolean $IsTax1Recup
     */
    protected $IsTax1Recup = null;

    /**
     * @var boolean $IsTax2Recup
     */
    protected $IsTax2Recup = null;

    /**
     * @var boolean $IsToClearFolioA
     */
    protected $IsToClearFolioA = null;

    /**
     * @var boolean $IsCash
     */
    protected $IsCash = null;

    /**
     * @var int $ID_RateCodeBookingsFOO
     */
    protected $ID_RateCodeBookingsFOO = null;

    /**
     * @var int $ID_RateCodeBookingsOwner
     */
    protected $ID_RateCodeBookingsOwner = null;

    /**
     * @param boolean $IsAllowOwnerBookOOS
     * @param \DateTime $LoadTime
     * @param int $ID_Property
     * @param int $ID_SvcCharge
     * @param int $ID_MarketSegment
     * @param boolean $IsActive
     * @param int $WeightingMethod
     * @param int $ID_TrnOwnerRevenu
     * @param boolean $IsIncomeTax
     * @param float $IncomeTaxPct
     * @param int $ID_TrnIncomeTax
     * @param boolean $IsTAChargedBack
     * @param int $ID_TrnTAChargedBack
     * @param int $ID_TrnOwnerCheck
     * @param boolean $IsTaxNo1Owner
     * @param int $ID_TrnTax1
     * @param int $ID_TrnTax1Owner
     * @param boolean $IsTaxNo2Owner
     * @param int $ID_TrnTax2
     * @param int $ID_TrnTax2Owner
     * @param int $MinDayPromo
     * @param boolean $IsActiveBookingNotice
     * @param int $NbrDaysResident
     * @param int $NbrDaysNonResident
     * @param float $PenaltyPct
     * @param boolean $IsAutoEOMClosing
     * @param \DateTime $EOMClosingDate
     * @param int $ID_Commision
     * @param int $ID_GrossRev
     * @param int $ID_MgtFee
     * @param int $GrossFormulaType
     * @param int $ID_TrnAdminAdjust
     * @param int $ID_TrnGuestAdjust
     * @param int $ID_Admin
     * @param boolean $IsManagedByBo
     * @param int $BeginDay
     * @param int $BeginMonth
     * @param int $EndDay
     * @param int $EndMonth
     * @param boolean $IsPoolMethodActif
     * @param boolean $IsIndMethodActif
     * @param boolean $IsRevInput
     * @param int $ID_RateCodeRack
     * @param int $NbrPersonRack
     * @param int $ID_TrnDistRevenu
     * @param float $TotalAmountPoolRev
     * @param float $MinCheckOwner
     * @param boolean $IsRefusal
     * @param boolean $IsTACommIncomeTaxDetectible
     * @param boolean $IsSalesTaxReturn100Pct
     * @param float $PctBuildPool
     * @param boolean $IsRanking_Weight
     * @param boolean $IsReadyClosed
     * @param boolean $IsAdjustToPostingTrn
     * @param boolean $IsTrnZerroToPost
     * @param boolean $IsDailyDistrib
     * @param float $MarketSegDefaultPct
     * @param boolean $IsCCChargedBack
     * @param int $ID_TrnCCChargedBack
     * @param boolean $IsReferal
     * @param int $ID_TrnReferal
     * @param int $ID_TrnTax3
     * @param boolean $IsTaxNo3Owner
     * @param boolean $IsOtherChargedBack
     * @param int $ID_TrnOtherChargedBack
     * @param int $ID_TrnOtherChargedBackOwner
     * @param float $Referal1
     * @param float $Referal2
     * @param float $Referal3
     * @param int $ReferalType
     * @param int $ID_TrnReferalOwner
     * @param boolean $IsReferalOwnerCB
     * @param float $PctTAChargedBack
     * @param int $FiscalDayAjustment
     * @param boolean $IsOwnerDirectDeposit
     * @param int $ID_TrnOwnerDirectDeposit
     * @param int $ID_AdminDDCXL
     * @param boolean $IsUsedBankAllowed
     * @param int $ID_RateCodeUsedBank
     * @param boolean $IsActiveReserveMinimum
     * @param float $AmountReserveMinimum
     * @param int $SubFolioReserveMinimum
     * @param int $ID_TrnReserveMinimum
     * @param boolean $IsTAReferalBefore
     * @param boolean $IsCCReferalBefore
     * @param boolean $IsIncomeTaxOwnerGross
     * @param int $NbreOfPlan
     * @param boolean $IsActiveRanking
     * @param int $ID_RateCodeRanking
     * @param boolean $IsJanuaryRankingReset
     * @param boolean $IsFebruaryRankingReset
     * @param boolean $IsMarchRankingReset
     * @param boolean $IsAprilRankingReset
     * @param boolean $IsMayRankingReset
     * @param boolean $IsJuneRankingReset
     * @param boolean $IsJulyRankingReset
     * @param boolean $IsAugustRankingReset
     * @param boolean $IsSeptemberRankingReset
     * @param boolean $IsOctoberRankingReset
     * @param boolean $IsNovemberRankingReset
     * @param boolean $IsDecemberRankingReset
     * @param int $NbreOfPlanOwnerBank
     * @param boolean $IsTax1Recup
     * @param boolean $IsTax2Recup
     * @param boolean $IsToClearFolioA
     * @param boolean $IsCash
     * @param int $ID_RateCodeBookingsFOO
     * @param int $ID_RateCodeBookingsOwner
     */
    public function __construct($IsAllowOwnerBookOOS, \DateTime $LoadTime, $ID_Property, $ID_SvcCharge, $ID_MarketSegment, $IsActive, $WeightingMethod, $ID_TrnOwnerRevenu, $IsIncomeTax, $IncomeTaxPct, $ID_TrnIncomeTax, $IsTAChargedBack, $ID_TrnTAChargedBack, $ID_TrnOwnerCheck, $IsTaxNo1Owner, $ID_TrnTax1, $ID_TrnTax1Owner, $IsTaxNo2Owner, $ID_TrnTax2, $ID_TrnTax2Owner, $MinDayPromo, $IsActiveBookingNotice, $NbrDaysResident, $NbrDaysNonResident, $PenaltyPct, $IsAutoEOMClosing, \DateTime $EOMClosingDate, $ID_Commision, $ID_GrossRev, $ID_MgtFee, $GrossFormulaType, $ID_TrnAdminAdjust, $ID_TrnGuestAdjust, $ID_Admin, $IsManagedByBo, $BeginDay, $BeginMonth, $EndDay, $EndMonth, $IsPoolMethodActif, $IsIndMethodActif, $IsRevInput, $ID_RateCodeRack, $NbrPersonRack, $ID_TrnDistRevenu, $TotalAmountPoolRev, $MinCheckOwner, $IsRefusal, $IsTACommIncomeTaxDetectible, $IsSalesTaxReturn100Pct, $PctBuildPool, $IsRanking_Weight, $IsReadyClosed, $IsAdjustToPostingTrn, $IsTrnZerroToPost, $IsDailyDistrib, $MarketSegDefaultPct, $IsCCChargedBack, $ID_TrnCCChargedBack, $IsReferal, $ID_TrnReferal, $ID_TrnTax3, $IsTaxNo3Owner, $IsOtherChargedBack, $ID_TrnOtherChargedBack, $ID_TrnOtherChargedBackOwner, $Referal1, $Referal2, $Referal3, $ReferalType, $ID_TrnReferalOwner, $IsReferalOwnerCB, $PctTAChargedBack, $FiscalDayAjustment, $IsOwnerDirectDeposit, $ID_TrnOwnerDirectDeposit, $ID_AdminDDCXL, $IsUsedBankAllowed, $ID_RateCodeUsedBank, $IsActiveReserveMinimum, $AmountReserveMinimum, $SubFolioReserveMinimum, $ID_TrnReserveMinimum, $IsTAReferalBefore, $IsCCReferalBefore, $IsIncomeTaxOwnerGross, $NbreOfPlan, $IsActiveRanking, $ID_RateCodeRanking, $IsJanuaryRankingReset, $IsFebruaryRankingReset, $IsMarchRankingReset, $IsAprilRankingReset, $IsMayRankingReset, $IsJuneRankingReset, $IsJulyRankingReset, $IsAugustRankingReset, $IsSeptemberRankingReset, $IsOctoberRankingReset, $IsNovemberRankingReset, $IsDecemberRankingReset, $NbreOfPlanOwnerBank, $IsTax1Recup, $IsTax2Recup, $IsToClearFolioA, $IsCash, $ID_RateCodeBookingsFOO, $ID_RateCodeBookingsOwner)
    {
        $this->IsAllowOwnerBookOOS = $IsAllowOwnerBookOOS;
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
        $this->ID_Property = $ID_Property;
        $this->ID_SvcCharge = $ID_SvcCharge;
        $this->ID_MarketSegment = $ID_MarketSegment;
        $this->IsActive = $IsActive;
        $this->WeightingMethod = $WeightingMethod;
        $this->ID_TrnOwnerRevenu = $ID_TrnOwnerRevenu;
        $this->IsIncomeTax = $IsIncomeTax;
        $this->IncomeTaxPct = $IncomeTaxPct;
        $this->ID_TrnIncomeTax = $ID_TrnIncomeTax;
        $this->IsTAChargedBack = $IsTAChargedBack;
        $this->ID_TrnTAChargedBack = $ID_TrnTAChargedBack;
        $this->ID_TrnOwnerCheck = $ID_TrnOwnerCheck;
        $this->IsTaxNo1Owner = $IsTaxNo1Owner;
        $this->ID_TrnTax1 = $ID_TrnTax1;
        $this->ID_TrnTax1Owner = $ID_TrnTax1Owner;
        $this->IsTaxNo2Owner = $IsTaxNo2Owner;
        $this->ID_TrnTax2 = $ID_TrnTax2;
        $this->ID_TrnTax2Owner = $ID_TrnTax2Owner;
        $this->MinDayPromo = $MinDayPromo;
        $this->IsActiveBookingNotice = $IsActiveBookingNotice;
        $this->NbrDaysResident = $NbrDaysResident;
        $this->NbrDaysNonResident = $NbrDaysNonResident;
        $this->PenaltyPct = $PenaltyPct;
        $this->IsAutoEOMClosing = $IsAutoEOMClosing;
        $this->EOMClosingDate = $EOMClosingDate->format(\DateTime::ATOM);
        $this->ID_Commision = $ID_Commision;
        $this->ID_GrossRev = $ID_GrossRev;
        $this->ID_MgtFee = $ID_MgtFee;
        $this->GrossFormulaType = $GrossFormulaType;
        $this->ID_TrnAdminAdjust = $ID_TrnAdminAdjust;
        $this->ID_TrnGuestAdjust = $ID_TrnGuestAdjust;
        $this->ID_Admin = $ID_Admin;
        $this->IsManagedByBo = $IsManagedByBo;
        $this->BeginDay = $BeginDay;
        $this->BeginMonth = $BeginMonth;
        $this->EndDay = $EndDay;
        $this->EndMonth = $EndMonth;
        $this->IsPoolMethodActif = $IsPoolMethodActif;
        $this->IsIndMethodActif = $IsIndMethodActif;
        $this->IsRevInput = $IsRevInput;
        $this->ID_RateCodeRack = $ID_RateCodeRack;
        $this->NbrPersonRack = $NbrPersonRack;
        $this->ID_TrnDistRevenu = $ID_TrnDistRevenu;
        $this->TotalAmountPoolRev = $TotalAmountPoolRev;
        $this->MinCheckOwner = $MinCheckOwner;
        $this->IsRefusal = $IsRefusal;
        $this->IsTACommIncomeTaxDetectible = $IsTACommIncomeTaxDetectible;
        $this->IsSalesTaxReturn100Pct = $IsSalesTaxReturn100Pct;
        $this->PctBuildPool = $PctBuildPool;
        $this->IsRanking_Weight = $IsRanking_Weight;
        $this->IsReadyClosed = $IsReadyClosed;
        $this->IsAdjustToPostingTrn = $IsAdjustToPostingTrn;
        $this->IsTrnZerroToPost = $IsTrnZerroToPost;
        $this->IsDailyDistrib = $IsDailyDistrib;
        $this->MarketSegDefaultPct = $MarketSegDefaultPct;
        $this->IsCCChargedBack = $IsCCChargedBack;
        $this->ID_TrnCCChargedBack = $ID_TrnCCChargedBack;
        $this->IsReferal = $IsReferal;
        $this->ID_TrnReferal = $ID_TrnReferal;
        $this->ID_TrnTax3 = $ID_TrnTax3;
        $this->IsTaxNo3Owner = $IsTaxNo3Owner;
        $this->IsOtherChargedBack = $IsOtherChargedBack;
        $this->ID_TrnOtherChargedBack = $ID_TrnOtherChargedBack;
        $this->ID_TrnOtherChargedBackOwner = $ID_TrnOtherChargedBackOwner;
        $this->Referal1 = $Referal1;
        $this->Referal2 = $Referal2;
        $this->Referal3 = $Referal3;
        $this->ReferalType = $ReferalType;
        $this->ID_TrnReferalOwner = $ID_TrnReferalOwner;
        $this->IsReferalOwnerCB = $IsReferalOwnerCB;
        $this->PctTAChargedBack = $PctTAChargedBack;
        $this->FiscalDayAjustment = $FiscalDayAjustment;
        $this->IsOwnerDirectDeposit = $IsOwnerDirectDeposit;
        $this->ID_TrnOwnerDirectDeposit = $ID_TrnOwnerDirectDeposit;
        $this->ID_AdminDDCXL = $ID_AdminDDCXL;
        $this->IsUsedBankAllowed = $IsUsedBankAllowed;
        $this->ID_RateCodeUsedBank = $ID_RateCodeUsedBank;
        $this->IsActiveReserveMinimum = $IsActiveReserveMinimum;
        $this->AmountReserveMinimum = $AmountReserveMinimum;
        $this->SubFolioReserveMinimum = $SubFolioReserveMinimum;
        $this->ID_TrnReserveMinimum = $ID_TrnReserveMinimum;
        $this->IsTAReferalBefore = $IsTAReferalBefore;
        $this->IsCCReferalBefore = $IsCCReferalBefore;
        $this->IsIncomeTaxOwnerGross = $IsIncomeTaxOwnerGross;
        $this->NbreOfPlan = $NbreOfPlan;
        $this->IsActiveRanking = $IsActiveRanking;
        $this->ID_RateCodeRanking = $ID_RateCodeRanking;
        $this->IsJanuaryRankingReset = $IsJanuaryRankingReset;
        $this->IsFebruaryRankingReset = $IsFebruaryRankingReset;
        $this->IsMarchRankingReset = $IsMarchRankingReset;
        $this->IsAprilRankingReset = $IsAprilRankingReset;
        $this->IsMayRankingReset = $IsMayRankingReset;
        $this->IsJuneRankingReset = $IsJuneRankingReset;
        $this->IsJulyRankingReset = $IsJulyRankingReset;
        $this->IsAugustRankingReset = $IsAugustRankingReset;
        $this->IsSeptemberRankingReset = $IsSeptemberRankingReset;
        $this->IsOctoberRankingReset = $IsOctoberRankingReset;
        $this->IsNovemberRankingReset = $IsNovemberRankingReset;
        $this->IsDecemberRankingReset = $IsDecemberRankingReset;
        $this->NbreOfPlanOwnerBank = $NbreOfPlanOwnerBank;
        $this->IsTax1Recup = $IsTax1Recup;
        $this->IsTax2Recup = $IsTax2Recup;
        $this->IsToClearFolioA = $IsToClearFolioA;
        $this->IsCash = $IsCash;
        $this->ID_RateCodeBookingsFOO = $ID_RateCodeBookingsFOO;
        $this->ID_RateCodeBookingsOwner = $ID_RateCodeBookingsOwner;
    }

    /**
     * @return boolean
     */
    public function getIsAllowOwnerBookOOS()
    {
        return $this->IsAllowOwnerBookOOS;
    }

    /**
     * @param boolean $IsAllowOwnerBookOOS
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsAllowOwnerBookOOS($IsAllowOwnerBookOOS)
    {
        $this->IsAllowOwnerBookOOS = $IsAllowOwnerBookOOS;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLoadTime()
    {
        if ($this->LoadTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LoadTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LoadTime
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setLoadTime(\DateTime $LoadTime)
    {
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Property()
    {
        return $this->ID_Property;
    }

    /**
     * @param int $ID_Property
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_Property($ID_Property)
    {
        $this->ID_Property = $ID_Property;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SvcCharge()
    {
        return $this->ID_SvcCharge;
    }

    /**
     * @param int $ID_SvcCharge
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_SvcCharge($ID_SvcCharge)
    {
        $this->ID_SvcCharge = $ID_SvcCharge;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MarketSegment()
    {
        return $this->ID_MarketSegment;
    }

    /**
     * @param int $ID_MarketSegment
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_MarketSegment($ID_MarketSegment)
    {
        $this->ID_MarketSegment = $ID_MarketSegment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeightingMethod()
    {
        return $this->WeightingMethod;
    }

    /**
     * @param int $WeightingMethod
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setWeightingMethod($WeightingMethod)
    {
        $this->WeightingMethod = $WeightingMethod;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnOwnerRevenu()
    {
        return $this->ID_TrnOwnerRevenu;
    }

    /**
     * @param int $ID_TrnOwnerRevenu
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnOwnerRevenu($ID_TrnOwnerRevenu)
    {
        $this->ID_TrnOwnerRevenu = $ID_TrnOwnerRevenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncomeTax()
    {
        return $this->IsIncomeTax;
    }

    /**
     * @param boolean $IsIncomeTax
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsIncomeTax($IsIncomeTax)
    {
        $this->IsIncomeTax = $IsIncomeTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getIncomeTaxPct()
    {
        return $this->IncomeTaxPct;
    }

    /**
     * @param float $IncomeTaxPct
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIncomeTaxPct($IncomeTaxPct)
    {
        $this->IncomeTaxPct = $IncomeTaxPct;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnIncomeTax()
    {
        return $this->ID_TrnIncomeTax;
    }

    /**
     * @param int $ID_TrnIncomeTax
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnIncomeTax($ID_TrnIncomeTax)
    {
        $this->ID_TrnIncomeTax = $ID_TrnIncomeTax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTAChargedBack()
    {
        return $this->IsTAChargedBack;
    }

    /**
     * @param boolean $IsTAChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTAChargedBack($IsTAChargedBack)
    {
        $this->IsTAChargedBack = $IsTAChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTAChargedBack()
    {
        return $this->ID_TrnTAChargedBack;
    }

    /**
     * @param int $ID_TrnTAChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTAChargedBack($ID_TrnTAChargedBack)
    {
        $this->ID_TrnTAChargedBack = $ID_TrnTAChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnOwnerCheck()
    {
        return $this->ID_TrnOwnerCheck;
    }

    /**
     * @param int $ID_TrnOwnerCheck
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnOwnerCheck($ID_TrnOwnerCheck)
    {
        $this->ID_TrnOwnerCheck = $ID_TrnOwnerCheck;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxNo1Owner()
    {
        return $this->IsTaxNo1Owner;
    }

    /**
     * @param boolean $IsTaxNo1Owner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTaxNo1Owner($IsTaxNo1Owner)
    {
        $this->IsTaxNo1Owner = $IsTaxNo1Owner;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTax1()
    {
        return $this->ID_TrnTax1;
    }

    /**
     * @param int $ID_TrnTax1
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTax1($ID_TrnTax1)
    {
        $this->ID_TrnTax1 = $ID_TrnTax1;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTax1Owner()
    {
        return $this->ID_TrnTax1Owner;
    }

    /**
     * @param int $ID_TrnTax1Owner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTax1Owner($ID_TrnTax1Owner)
    {
        $this->ID_TrnTax1Owner = $ID_TrnTax1Owner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxNo2Owner()
    {
        return $this->IsTaxNo2Owner;
    }

    /**
     * @param boolean $IsTaxNo2Owner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTaxNo2Owner($IsTaxNo2Owner)
    {
        $this->IsTaxNo2Owner = $IsTaxNo2Owner;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTax2()
    {
        return $this->ID_TrnTax2;
    }

    /**
     * @param int $ID_TrnTax2
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTax2($ID_TrnTax2)
    {
        $this->ID_TrnTax2 = $ID_TrnTax2;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTax2Owner()
    {
        return $this->ID_TrnTax2Owner;
    }

    /**
     * @param int $ID_TrnTax2Owner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTax2Owner($ID_TrnTax2Owner)
    {
        $this->ID_TrnTax2Owner = $ID_TrnTax2Owner;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinDayPromo()
    {
        return $this->MinDayPromo;
    }

    /**
     * @param int $MinDayPromo
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setMinDayPromo($MinDayPromo)
    {
        $this->MinDayPromo = $MinDayPromo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActiveBookingNotice()
    {
        return $this->IsActiveBookingNotice;
    }

    /**
     * @param boolean $IsActiveBookingNotice
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsActiveBookingNotice($IsActiveBookingNotice)
    {
        $this->IsActiveBookingNotice = $IsActiveBookingNotice;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrDaysResident()
    {
        return $this->NbrDaysResident;
    }

    /**
     * @param int $NbrDaysResident
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setNbrDaysResident($NbrDaysResident)
    {
        $this->NbrDaysResident = $NbrDaysResident;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrDaysNonResident()
    {
        return $this->NbrDaysNonResident;
    }

    /**
     * @param int $NbrDaysNonResident
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setNbrDaysNonResident($NbrDaysNonResident)
    {
        $this->NbrDaysNonResident = $NbrDaysNonResident;
        return $this;
    }

    /**
     * @return float
     */
    public function getPenaltyPct()
    {
        return $this->PenaltyPct;
    }

    /**
     * @param float $PenaltyPct
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setPenaltyPct($PenaltyPct)
    {
        $this->PenaltyPct = $PenaltyPct;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAutoEOMClosing()
    {
        return $this->IsAutoEOMClosing;
    }

    /**
     * @param boolean $IsAutoEOMClosing
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsAutoEOMClosing($IsAutoEOMClosing)
    {
        $this->IsAutoEOMClosing = $IsAutoEOMClosing;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEOMClosingDate()
    {
        if ($this->EOMClosingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EOMClosingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EOMClosingDate
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setEOMClosingDate(\DateTime $EOMClosingDate)
    {
        $this->EOMClosingDate = $EOMClosingDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Commision()
    {
        return $this->ID_Commision;
    }

    /**
     * @param int $ID_Commision
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_Commision($ID_Commision)
    {
        $this->ID_Commision = $ID_Commision;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GrossRev()
    {
        return $this->ID_GrossRev;
    }

    /**
     * @param int $ID_GrossRev
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_GrossRev($ID_GrossRev)
    {
        $this->ID_GrossRev = $ID_GrossRev;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MgtFee()
    {
        return $this->ID_MgtFee;
    }

    /**
     * @param int $ID_MgtFee
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_MgtFee($ID_MgtFee)
    {
        $this->ID_MgtFee = $ID_MgtFee;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrossFormulaType()
    {
        return $this->GrossFormulaType;
    }

    /**
     * @param int $GrossFormulaType
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setGrossFormulaType($GrossFormulaType)
    {
        $this->GrossFormulaType = $GrossFormulaType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnAdminAdjust()
    {
        return $this->ID_TrnAdminAdjust;
    }

    /**
     * @param int $ID_TrnAdminAdjust
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnAdminAdjust($ID_TrnAdminAdjust)
    {
        $this->ID_TrnAdminAdjust = $ID_TrnAdminAdjust;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnGuestAdjust()
    {
        return $this->ID_TrnGuestAdjust;
    }

    /**
     * @param int $ID_TrnGuestAdjust
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnGuestAdjust($ID_TrnGuestAdjust)
    {
        $this->ID_TrnGuestAdjust = $ID_TrnGuestAdjust;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Admin()
    {
        return $this->ID_Admin;
    }

    /**
     * @param int $ID_Admin
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_Admin($ID_Admin)
    {
        $this->ID_Admin = $ID_Admin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsManagedByBo()
    {
        return $this->IsManagedByBo;
    }

    /**
     * @param boolean $IsManagedByBo
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsManagedByBo($IsManagedByBo)
    {
        $this->IsManagedByBo = $IsManagedByBo;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeginDay()
    {
        return $this->BeginDay;
    }

    /**
     * @param int $BeginDay
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setBeginDay($BeginDay)
    {
        $this->BeginDay = $BeginDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeginMonth()
    {
        return $this->BeginMonth;
    }

    /**
     * @param int $BeginMonth
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setBeginMonth($BeginMonth)
    {
        $this->BeginMonth = $BeginMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndDay()
    {
        return $this->EndDay;
    }

    /**
     * @param int $EndDay
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setEndDay($EndDay)
    {
        $this->EndDay = $EndDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndMonth()
    {
        return $this->EndMonth;
    }

    /**
     * @param int $EndMonth
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setEndMonth($EndMonth)
    {
        $this->EndMonth = $EndMonth;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPoolMethodActif()
    {
        return $this->IsPoolMethodActif;
    }

    /**
     * @param boolean $IsPoolMethodActif
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsPoolMethodActif($IsPoolMethodActif)
    {
        $this->IsPoolMethodActif = $IsPoolMethodActif;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIndMethodActif()
    {
        return $this->IsIndMethodActif;
    }

    /**
     * @param boolean $IsIndMethodActif
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsIndMethodActif($IsIndMethodActif)
    {
        $this->IsIndMethodActif = $IsIndMethodActif;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRevInput()
    {
        return $this->IsRevInput;
    }

    /**
     * @param boolean $IsRevInput
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsRevInput($IsRevInput)
    {
        $this->IsRevInput = $IsRevInput;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeRack()
    {
        return $this->ID_RateCodeRack;
    }

    /**
     * @param int $ID_RateCodeRack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_RateCodeRack($ID_RateCodeRack)
    {
        $this->ID_RateCodeRack = $ID_RateCodeRack;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrPersonRack()
    {
        return $this->NbrPersonRack;
    }

    /**
     * @param int $NbrPersonRack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setNbrPersonRack($NbrPersonRack)
    {
        $this->NbrPersonRack = $NbrPersonRack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnDistRevenu()
    {
        return $this->ID_TrnDistRevenu;
    }

    /**
     * @param int $ID_TrnDistRevenu
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnDistRevenu($ID_TrnDistRevenu)
    {
        $this->ID_TrnDistRevenu = $ID_TrnDistRevenu;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmountPoolRev()
    {
        return $this->TotalAmountPoolRev;
    }

    /**
     * @param float $TotalAmountPoolRev
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setTotalAmountPoolRev($TotalAmountPoolRev)
    {
        $this->TotalAmountPoolRev = $TotalAmountPoolRev;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinCheckOwner()
    {
        return $this->MinCheckOwner;
    }

    /**
     * @param float $MinCheckOwner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setMinCheckOwner($MinCheckOwner)
    {
        $this->MinCheckOwner = $MinCheckOwner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRefusal()
    {
        return $this->IsRefusal;
    }

    /**
     * @param boolean $IsRefusal
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsRefusal($IsRefusal)
    {
        $this->IsRefusal = $IsRefusal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTACommIncomeTaxDetectible()
    {
        return $this->IsTACommIncomeTaxDetectible;
    }

    /**
     * @param boolean $IsTACommIncomeTaxDetectible
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTACommIncomeTaxDetectible($IsTACommIncomeTaxDetectible)
    {
        $this->IsTACommIncomeTaxDetectible = $IsTACommIncomeTaxDetectible;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSalesTaxReturn100Pct()
    {
        return $this->IsSalesTaxReturn100Pct;
    }

    /**
     * @param boolean $IsSalesTaxReturn100Pct
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsSalesTaxReturn100Pct($IsSalesTaxReturn100Pct)
    {
        $this->IsSalesTaxReturn100Pct = $IsSalesTaxReturn100Pct;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctBuildPool()
    {
        return $this->PctBuildPool;
    }

    /**
     * @param float $PctBuildPool
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setPctBuildPool($PctBuildPool)
    {
        $this->PctBuildPool = $PctBuildPool;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRanking_Weight()
    {
        return $this->IsRanking_Weight;
    }

    /**
     * @param boolean $IsRanking_Weight
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsRanking_Weight($IsRanking_Weight)
    {
        $this->IsRanking_Weight = $IsRanking_Weight;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReadyClosed()
    {
        return $this->IsReadyClosed;
    }

    /**
     * @param boolean $IsReadyClosed
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsReadyClosed($IsReadyClosed)
    {
        $this->IsReadyClosed = $IsReadyClosed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdjustToPostingTrn()
    {
        return $this->IsAdjustToPostingTrn;
    }

    /**
     * @param boolean $IsAdjustToPostingTrn
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsAdjustToPostingTrn($IsAdjustToPostingTrn)
    {
        $this->IsAdjustToPostingTrn = $IsAdjustToPostingTrn;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrnZerroToPost()
    {
        return $this->IsTrnZerroToPost;
    }

    /**
     * @param boolean $IsTrnZerroToPost
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTrnZerroToPost($IsTrnZerroToPost)
    {
        $this->IsTrnZerroToPost = $IsTrnZerroToPost;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDailyDistrib()
    {
        return $this->IsDailyDistrib;
    }

    /**
     * @param boolean $IsDailyDistrib
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsDailyDistrib($IsDailyDistrib)
    {
        $this->IsDailyDistrib = $IsDailyDistrib;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarketSegDefaultPct()
    {
        return $this->MarketSegDefaultPct;
    }

    /**
     * @param float $MarketSegDefaultPct
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setMarketSegDefaultPct($MarketSegDefaultPct)
    {
        $this->MarketSegDefaultPct = $MarketSegDefaultPct;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCCChargedBack()
    {
        return $this->IsCCChargedBack;
    }

    /**
     * @param boolean $IsCCChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsCCChargedBack($IsCCChargedBack)
    {
        $this->IsCCChargedBack = $IsCCChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnCCChargedBack()
    {
        return $this->ID_TrnCCChargedBack;
    }

    /**
     * @param int $ID_TrnCCChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnCCChargedBack($ID_TrnCCChargedBack)
    {
        $this->ID_TrnCCChargedBack = $ID_TrnCCChargedBack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReferal()
    {
        return $this->IsReferal;
    }

    /**
     * @param boolean $IsReferal
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsReferal($IsReferal)
    {
        $this->IsReferal = $IsReferal;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnReferal()
    {
        return $this->ID_TrnReferal;
    }

    /**
     * @param int $ID_TrnReferal
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnReferal($ID_TrnReferal)
    {
        $this->ID_TrnReferal = $ID_TrnReferal;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnTax3()
    {
        return $this->ID_TrnTax3;
    }

    /**
     * @param int $ID_TrnTax3
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnTax3($ID_TrnTax3)
    {
        $this->ID_TrnTax3 = $ID_TrnTax3;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxNo3Owner()
    {
        return $this->IsTaxNo3Owner;
    }

    /**
     * @param boolean $IsTaxNo3Owner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTaxNo3Owner($IsTaxNo3Owner)
    {
        $this->IsTaxNo3Owner = $IsTaxNo3Owner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOtherChargedBack()
    {
        return $this->IsOtherChargedBack;
    }

    /**
     * @param boolean $IsOtherChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsOtherChargedBack($IsOtherChargedBack)
    {
        $this->IsOtherChargedBack = $IsOtherChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnOtherChargedBack()
    {
        return $this->ID_TrnOtherChargedBack;
    }

    /**
     * @param int $ID_TrnOtherChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnOtherChargedBack($ID_TrnOtherChargedBack)
    {
        $this->ID_TrnOtherChargedBack = $ID_TrnOtherChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnOtherChargedBackOwner()
    {
        return $this->ID_TrnOtherChargedBackOwner;
    }

    /**
     * @param int $ID_TrnOtherChargedBackOwner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnOtherChargedBackOwner($ID_TrnOtherChargedBackOwner)
    {
        $this->ID_TrnOtherChargedBackOwner = $ID_TrnOtherChargedBackOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getName_OtherChargedBack()
    {
        return $this->Name_OtherChargedBack;
    }

    /**
     * @param string $Name_OtherChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setName_OtherChargedBack($Name_OtherChargedBack)
    {
        $this->Name_OtherChargedBack = $Name_OtherChargedBack;
        return $this;
    }

    /**
     * @return float
     */
    public function getReferal1()
    {
        return $this->Referal1;
    }

    /**
     * @param float $Referal1
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setReferal1($Referal1)
    {
        $this->Referal1 = $Referal1;
        return $this;
    }

    /**
     * @return float
     */
    public function getReferal2()
    {
        return $this->Referal2;
    }

    /**
     * @param float $Referal2
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setReferal2($Referal2)
    {
        $this->Referal2 = $Referal2;
        return $this;
    }

    /**
     * @return float
     */
    public function getReferal3()
    {
        return $this->Referal3;
    }

    /**
     * @param float $Referal3
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setReferal3($Referal3)
    {
        $this->Referal3 = $Referal3;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferalType()
    {
        return $this->ReferalType;
    }

    /**
     * @param int $ReferalType
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setReferalType($ReferalType)
    {
        $this->ReferalType = $ReferalType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnReferalOwner()
    {
        return $this->ID_TrnReferalOwner;
    }

    /**
     * @param int $ID_TrnReferalOwner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnReferalOwner($ID_TrnReferalOwner)
    {
        $this->ID_TrnReferalOwner = $ID_TrnReferalOwner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReferalOwnerCB()
    {
        return $this->IsReferalOwnerCB;
    }

    /**
     * @param boolean $IsReferalOwnerCB
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsReferalOwnerCB($IsReferalOwnerCB)
    {
        $this->IsReferalOwnerCB = $IsReferalOwnerCB;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctTAChargedBack()
    {
        return $this->PctTAChargedBack;
    }

    /**
     * @param float $PctTAChargedBack
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setPctTAChargedBack($PctTAChargedBack)
    {
        $this->PctTAChargedBack = $PctTAChargedBack;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiscalDayAjustment()
    {
        return $this->FiscalDayAjustment;
    }

    /**
     * @param int $FiscalDayAjustment
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setFiscalDayAjustment($FiscalDayAjustment)
    {
        $this->FiscalDayAjustment = $FiscalDayAjustment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOwnerDirectDeposit()
    {
        return $this->IsOwnerDirectDeposit;
    }

    /**
     * @param boolean $IsOwnerDirectDeposit
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsOwnerDirectDeposit($IsOwnerDirectDeposit)
    {
        $this->IsOwnerDirectDeposit = $IsOwnerDirectDeposit;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnOwnerDirectDeposit()
    {
        return $this->ID_TrnOwnerDirectDeposit;
    }

    /**
     * @param int $ID_TrnOwnerDirectDeposit
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnOwnerDirectDeposit($ID_TrnOwnerDirectDeposit)
    {
        $this->ID_TrnOwnerDirectDeposit = $ID_TrnOwnerDirectDeposit;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_AdminDDCXL()
    {
        return $this->ID_AdminDDCXL;
    }

    /**
     * @param int $ID_AdminDDCXL
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_AdminDDCXL($ID_AdminDDCXL)
    {
        $this->ID_AdminDDCXL = $ID_AdminDDCXL;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUsedBankAllowed()
    {
        return $this->IsUsedBankAllowed;
    }

    /**
     * @param boolean $IsUsedBankAllowed
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsUsedBankAllowed($IsUsedBankAllowed)
    {
        $this->IsUsedBankAllowed = $IsUsedBankAllowed;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeUsedBank()
    {
        return $this->ID_RateCodeUsedBank;
    }

    /**
     * @param int $ID_RateCodeUsedBank
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_RateCodeUsedBank($ID_RateCodeUsedBank)
    {
        $this->ID_RateCodeUsedBank = $ID_RateCodeUsedBank;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActiveReserveMinimum()
    {
        return $this->IsActiveReserveMinimum;
    }

    /**
     * @param boolean $IsActiveReserveMinimum
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsActiveReserveMinimum($IsActiveReserveMinimum)
    {
        $this->IsActiveReserveMinimum = $IsActiveReserveMinimum;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountReserveMinimum()
    {
        return $this->AmountReserveMinimum;
    }

    /**
     * @param float $AmountReserveMinimum
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setAmountReserveMinimum($AmountReserveMinimum)
    {
        $this->AmountReserveMinimum = $AmountReserveMinimum;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubFolioReserveMinimum()
    {
        return $this->SubFolioReserveMinimum;
    }

    /**
     * @param int $SubFolioReserveMinimum
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setSubFolioReserveMinimum($SubFolioReserveMinimum)
    {
        $this->SubFolioReserveMinimum = $SubFolioReserveMinimum;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnReserveMinimum()
    {
        return $this->ID_TrnReserveMinimum;
    }

    /**
     * @param int $ID_TrnReserveMinimum
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_TrnReserveMinimum($ID_TrnReserveMinimum)
    {
        $this->ID_TrnReserveMinimum = $ID_TrnReserveMinimum;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTAReferalBefore()
    {
        return $this->IsTAReferalBefore;
    }

    /**
     * @param boolean $IsTAReferalBefore
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTAReferalBefore($IsTAReferalBefore)
    {
        $this->IsTAReferalBefore = $IsTAReferalBefore;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCCReferalBefore()
    {
        return $this->IsCCReferalBefore;
    }

    /**
     * @param boolean $IsCCReferalBefore
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsCCReferalBefore($IsCCReferalBefore)
    {
        $this->IsCCReferalBefore = $IsCCReferalBefore;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncomeTaxOwnerGross()
    {
        return $this->IsIncomeTaxOwnerGross;
    }

    /**
     * @param boolean $IsIncomeTaxOwnerGross
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsIncomeTaxOwnerGross($IsIncomeTaxOwnerGross)
    {
        $this->IsIncomeTaxOwnerGross = $IsIncomeTaxOwnerGross;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbreOfPlan()
    {
        return $this->NbreOfPlan;
    }

    /**
     * @param int $NbreOfPlan
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setNbreOfPlan($NbreOfPlan)
    {
        $this->NbreOfPlan = $NbreOfPlan;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActiveRanking()
    {
        return $this->IsActiveRanking;
    }

    /**
     * @param boolean $IsActiveRanking
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsActiveRanking($IsActiveRanking)
    {
        $this->IsActiveRanking = $IsActiveRanking;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeRanking()
    {
        return $this->ID_RateCodeRanking;
    }

    /**
     * @param int $ID_RateCodeRanking
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_RateCodeRanking($ID_RateCodeRanking)
    {
        $this->ID_RateCodeRanking = $ID_RateCodeRanking;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJanuaryRankingReset()
    {
        return $this->IsJanuaryRankingReset;
    }

    /**
     * @param boolean $IsJanuaryRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsJanuaryRankingReset($IsJanuaryRankingReset)
    {
        $this->IsJanuaryRankingReset = $IsJanuaryRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFebruaryRankingReset()
    {
        return $this->IsFebruaryRankingReset;
    }

    /**
     * @param boolean $IsFebruaryRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsFebruaryRankingReset($IsFebruaryRankingReset)
    {
        $this->IsFebruaryRankingReset = $IsFebruaryRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMarchRankingReset()
    {
        return $this->IsMarchRankingReset;
    }

    /**
     * @param boolean $IsMarchRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsMarchRankingReset($IsMarchRankingReset)
    {
        $this->IsMarchRankingReset = $IsMarchRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAprilRankingReset()
    {
        return $this->IsAprilRankingReset;
    }

    /**
     * @param boolean $IsAprilRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsAprilRankingReset($IsAprilRankingReset)
    {
        $this->IsAprilRankingReset = $IsAprilRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMayRankingReset()
    {
        return $this->IsMayRankingReset;
    }

    /**
     * @param boolean $IsMayRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsMayRankingReset($IsMayRankingReset)
    {
        $this->IsMayRankingReset = $IsMayRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJuneRankingReset()
    {
        return $this->IsJuneRankingReset;
    }

    /**
     * @param boolean $IsJuneRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsJuneRankingReset($IsJuneRankingReset)
    {
        $this->IsJuneRankingReset = $IsJuneRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJulyRankingReset()
    {
        return $this->IsJulyRankingReset;
    }

    /**
     * @param boolean $IsJulyRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsJulyRankingReset($IsJulyRankingReset)
    {
        $this->IsJulyRankingReset = $IsJulyRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAugustRankingReset()
    {
        return $this->IsAugustRankingReset;
    }

    /**
     * @param boolean $IsAugustRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsAugustRankingReset($IsAugustRankingReset)
    {
        $this->IsAugustRankingReset = $IsAugustRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSeptemberRankingReset()
    {
        return $this->IsSeptemberRankingReset;
    }

    /**
     * @param boolean $IsSeptemberRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsSeptemberRankingReset($IsSeptemberRankingReset)
    {
        $this->IsSeptemberRankingReset = $IsSeptemberRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOctoberRankingReset()
    {
        return $this->IsOctoberRankingReset;
    }

    /**
     * @param boolean $IsOctoberRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsOctoberRankingReset($IsOctoberRankingReset)
    {
        $this->IsOctoberRankingReset = $IsOctoberRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNovemberRankingReset()
    {
        return $this->IsNovemberRankingReset;
    }

    /**
     * @param boolean $IsNovemberRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsNovemberRankingReset($IsNovemberRankingReset)
    {
        $this->IsNovemberRankingReset = $IsNovemberRankingReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDecemberRankingReset()
    {
        return $this->IsDecemberRankingReset;
    }

    /**
     * @param boolean $IsDecemberRankingReset
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsDecemberRankingReset($IsDecemberRankingReset)
    {
        $this->IsDecemberRankingReset = $IsDecemberRankingReset;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbreOfPlanOwnerBank()
    {
        return $this->NbreOfPlanOwnerBank;
    }

    /**
     * @param int $NbreOfPlanOwnerBank
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setNbreOfPlanOwnerBank($NbreOfPlanOwnerBank)
    {
        $this->NbreOfPlanOwnerBank = $NbreOfPlanOwnerBank;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTax1Recup()
    {
        return $this->IsTax1Recup;
    }

    /**
     * @param boolean $IsTax1Recup
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTax1Recup($IsTax1Recup)
    {
        $this->IsTax1Recup = $IsTax1Recup;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTax2Recup()
    {
        return $this->IsTax2Recup;
    }

    /**
     * @param boolean $IsTax2Recup
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsTax2Recup($IsTax2Recup)
    {
        $this->IsTax2Recup = $IsTax2Recup;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsToClearFolioA()
    {
        return $this->IsToClearFolioA;
    }

    /**
     * @param boolean $IsToClearFolioA
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsToClearFolioA($IsToClearFolioA)
    {
        $this->IsToClearFolioA = $IsToClearFolioA;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCash()
    {
        return $this->IsCash;
    }

    /**
     * @param boolean $IsCash
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setIsCash($IsCash)
    {
        $this->IsCash = $IsCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeBookingsFOO()
    {
        return $this->ID_RateCodeBookingsFOO;
    }

    /**
     * @param int $ID_RateCodeBookingsFOO
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_RateCodeBookingsFOO($ID_RateCodeBookingsFOO)
    {
        $this->ID_RateCodeBookingsFOO = $ID_RateCodeBookingsFOO;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeBookingsOwner()
    {
        return $this->ID_RateCodeBookingsOwner;
    }

    /**
     * @param int $ID_RateCodeBookingsOwner
     * @return \Gueststream\PMS\IQWare\API\CondoConfig
     */
    public function setID_RateCodeBookingsOwner($ID_RateCodeBookingsOwner)
    {
        $this->ID_RateCodeBookingsOwner = $ID_RateCodeBookingsOwner;
        return $this;
    }
}
