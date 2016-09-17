<?php

namespace Gueststream\PMS\IQWare\API;

class IQWareWebRes extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'DstCrsAvailability'                                      => 'Gueststream\\PMS\\IQWare\\API\\DstCrsAvailability',
        'dtAvailability'                                          => 'Gueststream\\PMS\\IQWare\\API\\dtAvailability',
        'DstCrsClubMemberList'                                    => 'Gueststream\\PMS\\IQWare\\API\\DstCrsClubMemberList',
        'dtClubMemberList'                                        => 'Gueststream\\PMS\\IQWare\\API\\dtClubMemberList',
        'DstCrsHoHotelsList'                                      => 'Gueststream\\PMS\\IQWare\\API\\DstCrsHoHotelsList',
        'dtHotelsLists'                                           => 'Gueststream\\PMS\\IQWare\\API\\dtHotelsLists',
        'DstCrsCompanyList'                                       => 'Gueststream\\PMS\\IQWare\\API\\DstCrsCompanyList',
        'dtCompanyList'                                           => 'Gueststream\\PMS\\IQWare\\API\\dtCompanyList',
        'DstCrsHotelInfos'                                        => 'Gueststream\\PMS\\IQWare\\API\\DstCrsHotelInfos',
        'dtHotelInfos'                                            => 'Gueststream\\PMS\\IQWare\\API\\dtHotelInfos',
        'DstCondoOwner'                                           => 'Gueststream\\PMS\\IQWare\\API\\DstCondoOwner',
        'OwnerReservations'                                       => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservations',
        'OwnerBalances'                                           => 'Gueststream\\PMS\\IQWare\\API\\OwnerBalances',
        'OwnerAddresses'                                          => 'Gueststream\\PMS\\IQWare\\API\\OwnerAddresses',
        'AddressTelephones'                                       => 'Gueststream\\PMS\\IQWare\\API\\AddressTelephones',
        'OwnerTemplates'                                          => 'Gueststream\\PMS\\IQWare\\API\\OwnerTemplates',
        'OwnerContracts'                                          => 'Gueststream\\PMS\\IQWare\\API\\OwnerContracts',
        'ContractBalances'                                        => 'Gueststream\\PMS\\IQWare\\API\\ContractBalances',
        'ContractExpenses'                                        => 'Gueststream\\PMS\\IQWare\\API\\ContractExpenses',
        'ContractsBank'                                           => 'Gueststream\\PMS\\IQWare\\API\\ContractsBank',
        'ContractSegments'                                        => 'Gueststream\\PMS\\IQWare\\API\\ContractSegments',
        'OwnerPoints'                                             => 'Gueststream\\PMS\\IQWare\\API\\OwnerPoints',
        'CondoOwner'                                              => 'Gueststream\\PMS\\IQWare\\API\\CondoOwner',
        'DstCondoOwnerNews'                                       => 'Gueststream\\PMS\\IQWare\\API\\DstCondoOwnerNews',
        'News'                                                    => 'Gueststream\\PMS\\IQWare\\API\\News',
        'DstCrsClubList'                                          => 'Gueststream\\PMS\\IQWare\\API\\DstCrsClubList',
        'dtClubList'                                              => 'Gueststream\\PMS\\IQWare\\API\\dtClubList',
        'DstCrsFitList'                                           => 'Gueststream\\PMS\\IQWare\\API\\DstCrsFitList',
        'dtFitList'                                               => 'Gueststream\\PMS\\IQWare\\API\\dtFitList',
        'DstCrsCodesList'                                         => 'Gueststream\\PMS\\IQWare\\API\\DstCrsCodesList',
        'dtCodesList'                                             => 'Gueststream\\PMS\\IQWare\\API\\dtCodesList',
        'DstGroup'                                                => 'Gueststream\\PMS\\IQWare\\API\\DstGroup',
        'GroupInfos'                                              => 'Gueststream\\PMS\\IQWare\\API\\GroupInfos',
        'GroupReservations'                                       => 'Gueststream\\PMS\\IQWare\\API\\GroupReservations',
        'GroupBalances'                                           => 'Gueststream\\PMS\\IQWare\\API\\GroupBalances',
        'GroupRates'                                              => 'Gueststream\\PMS\\IQWare\\API\\GroupRates',
        'DstTravelAgent'                                          => 'Gueststream\\PMS\\IQWare\\API\\DstTravelAgent',
        'TravelAgent'                                             => 'Gueststream\\PMS\\IQWare\\API\\TravelAgent',
        'Reservations'                                            => 'Gueststream\\PMS\\IQWare\\API\\Reservations',
        'Comissions'                                              => 'Gueststream\\PMS\\IQWare\\API\\Comissions',
        'Address'                                                 => 'Gueststream\\PMS\\IQWare\\API\\Address',
        'Balances'                                                => 'Gueststream\\PMS\\IQWare\\API\\Balances',
        'Telephones'                                              => 'Gueststream\\PMS\\IQWare\\API\\Telephones',
        'DstCrsFitMemberList'                                     => 'Gueststream\\PMS\\IQWare\\API\\DstCrsFitMemberList',
        'dtFitMemberList'                                         => 'Gueststream\\PMS\\IQWare\\API\\dtFitMemberList',
        'DstCrsTravelAgency'                                      => 'Gueststream\\PMS\\IQWare\\API\\DstCrsTravelAgency',
        'dtTravelAgency'                                          => 'Gueststream\\PMS\\IQWare\\API\\dtTravelAgency',
        'DstWorkOrder'                                            => 'Gueststream\\PMS\\IQWare\\API\\DstWorkOrder',
        'ContractWO'                                              => 'Gueststream\\PMS\\IQWare\\API\\ContractWO',
        'ContractWOBillDetail'                                    => 'Gueststream\\PMS\\IQWare\\API\\ContractWOBillDetail',
        'dsDailyManualRates'                                      => 'Gueststream\\PMS\\IQWare\\API\\dsDailyManualRates',
        'DailyManualRates'                                        => 'Gueststream\\PMS\\IQWare\\API\\DailyManualRates',
        'DstCondoOwnerMonthlyStats'                               => 'Gueststream\\PMS\\IQWare\\API\\DstCondoOwnerMonthlyStats',
        'ChequeDetail'                                            => 'Gueststream\\PMS\\IQWare\\API\\ChequeDetail',
        'ChequeTotal'                                             => 'Gueststream\\PMS\\IQWare\\API\\ChequeTotal',
        'DailyActivity'                                           => 'Gueststream\\PMS\\IQWare\\API\\DailyActivity',
        'DailyActivityAR'                                         => 'Gueststream\\PMS\\IQWare\\API\\DailyActivityAR',
        'GuestActivity'                                           => 'Gueststream\\PMS\\IQWare\\API\\GuestActivity',
        'PdfDocuments'                                            => 'Gueststream\\PMS\\IQWare\\API\\PdfDocuments',
        'DstCrsResaSearch'                                        => 'Gueststream\\PMS\\IQWare\\API\\DstCrsResaSearch',
        'dtReservations'                                          => 'Gueststream\\PMS\\IQWare\\API\\dtReservations',
        'DstCrsMemberList'                                        => 'Gueststream\\PMS\\IQWare\\API\\DstCrsMemberList',
        'dtMemberList'                                            => 'Gueststream\\PMS\\IQWare\\API\\dtMemberList',
        'DstNewTravelAgent'                                       => 'Gueststream\\PMS\\IQWare\\API\\DstNewTravelAgent',
        'NewTravelAgent'                                          => 'Gueststream\\PMS\\IQWare\\API\\NewTravelAgent',
        'WebRes_GetOwnerRoomAvailability'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerRoomAvailability',
        'WebRes_GetOwnerRoomAvailabilityResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerRoomAvailabilityResponse',
        'RoomAvailability'                                        => 'Gueststream\\PMS\\IQWare\\API\\RoomAvailability',
        'ArrayOfRoomDayAvailability'                              => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomDayAvailability',
        'RoomDayAvailability'                                     => 'Gueststream\\PMS\\IQWare\\API\\RoomDayAvailability',
        'WebRes_GetOwnerPdf'                                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerPdf',
        'WebRes_GetOwnerPdfResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerPdfResponse',
        'WebRes_GetCondoOwnerListOfInvoices'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerListOfInvoices',
        'WebRes_GetCondoOwnerListOfInvoicesResponse'              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerListOfInvoicesResponse',
        'ArrayOfOwnerInvoiceInfo'                                 => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfOwnerInvoiceInfo',
        'OwnerInvoiceInfo'                                        => 'Gueststream\\PMS\\IQWare\\API\\OwnerInvoiceInfo',
        'WebRes_GetCondoOwnerInvoiceByID'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerInvoiceByID',
        'WebRes_GetCondoOwnerInvoiceByIDResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerInvoiceByIDResponse',
        'OwnerInvoiceData'                                        => 'Gueststream\\PMS\\IQWare\\API\\OwnerInvoiceData',
        'WebRes_GetCondoMonthlyStats'                             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoMonthlyStats',
        'WebRes_GetCondoMonthlyStatsResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoMonthlyStatsResponse',
        'WebRes_GetCondoMonthlyStatsResult'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoMonthlyStatsResult',
        'WebRes_GetWebCondoConfig'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetWebCondoConfig',
        'WebRes_GetWebCondoConfigResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetWebCondoConfigResponse',
        'WebCondoConfig'                                          => 'Gueststream\\PMS\\IQWare\\API\\WebCondoConfig',
        'WebRes_GetCondoConfig'                                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoConfig',
        'WebRes_GetCondoConfigResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoConfigResponse',
        'CondoConfig'                                             => 'Gueststream\\PMS\\IQWare\\API\\CondoConfig',
        'WebRes_GetWebResConfig'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetWebResConfig',
        'WebRes_GetWebResConfigResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetWebResConfigResponse',
        'WebResConfig'                                            => 'Gueststream\\PMS\\IQWare\\API\\WebResConfig',
        'WebRes_ValidateOwnerReservation'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_ValidateOwnerReservation',
        'OwnerReservation'                                        => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservation',
        'ArrayOfShort'                                            => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfShort',
        'WebRes_ValidateOwnerReservationResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_ValidateOwnerReservationResponse',
        'OwnerReservationValidityResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservationValidityResponse',
        'OwnerReservationValue'                                   => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservationValue',
        'StayBreakDown'                                           => 'Gueststream\\PMS\\IQWare\\API\\StayBreakDown',
        'WebRes_ValidateOwnerReservationRBO'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_ValidateOwnerReservationRBO',
        'dsActivityUnits'                                         => 'Gueststream\\PMS\\IQWare\\API\\dsActivityUnits',
        'WebRes_ValidateOwnerReservationRBOResponse'              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_ValidateOwnerReservationRBOResponse',
        'OwnerReservationValidityRBOResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservationValidityRBOResponse',
        'ArrayOfSBDSummary'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSBDSummary',
        'SBDSummary'                                              => 'Gueststream\\PMS\\IQWare\\API\\SBDSummary',
        'RequiredDeposit'                                         => 'Gueststream\\PMS\\IQWare\\API\\RequiredDeposit',
        'ArrayOfBreakdownByDay'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfBreakdownByDay',
        'BreakdownByDay'                                          => 'Gueststream\\PMS\\IQWare\\API\\BreakdownByDay',
        'ArrayOfSummaryItem'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSummaryItem',
        'SummaryItem'                                             => 'Gueststream\\PMS\\IQWare\\API\\SummaryItem',
        'ArrayOfMarkupItem'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfMarkupItem',
        'MarkupItem'                                              => 'Gueststream\\PMS\\IQWare\\API\\MarkupItem',
        'ArrayOfApplicableSpecialOffersRBO'                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfApplicableSpecialOffersRBO',
        'ApplicableSpecialOffersRBO'                              => 'Gueststream\\PMS\\IQWare\\API\\ApplicableSpecialOffersRBO',
        'WebRes_GetRatesAndPricesOwnerGuest'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetRatesAndPricesOwnerGuest',
        'WebRes_GetRatesAndPricesOwnerGuestResponse'              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetRatesAndPricesOwnerGuestResponse',
        'WebRes_GetRatesAndPricesOwnerGuestResult'                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetRatesAndPricesOwnerGuestResult',
        'WebRes_GetResaStayValue'                                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValue',
        'dstElements'                                             => 'Gueststream\\PMS\\IQWare\\API\\dstElements',
        'WebRes_GetResaStayValueResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValueResponse',
        'WebRes_GetResaStayValueResult'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValueResult',
        'WebRes_UpdateTAAddress'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateTAAddress',
        'dsTA'                                                    => 'Gueststream\\PMS\\IQWare\\API\\dsTA',
        'WebRes_UpdateTAAddressResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateTAAddressResponse',
        'WebRes_GetTravelAgent'                                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetTravelAgent',
        'WebRes_GetTravelAgentResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetTravelAgentResponse',
        'WebRes_GetTravelAgentResult'                             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetTravelAgentResult',
        'WebRes_CreateTAAccount'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_CreateTAAccount',
        'dsNewTA'                                                 => 'Gueststream\\PMS\\IQWare\\API\\dsNewTA',
        'WebRes_CreateTAAccountResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_CreateTAAccountResponse',
        'WebRes_GetGroupInfosByGroupStringID'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfosByGroupStringID',
        'WebRes_GetGroupInfosByGroupStringIDResponse'             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfosByGroupStringIDResponse',
        'WebRes_GetGroupInfosByGroupStringIDResult'               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfosByGroupStringIDResult',
        'WebRes_GetGroupInfos'                                    => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfos',
        'WebRes_GetGroupInfosResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfosResponse',
        'WebRes_GetGroupInfosResult'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupInfosResult',
        'WebRes_IsGroupHasPrivatePricingGrid'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_IsGroupHasPrivatePricingGrid',
        'WebRes_IsGroupHasPrivatePricingGridResponse'             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_IsGroupHasPrivatePricingGridResponse',
        'WebRes_GetGroupBlocAvailability'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupBlocAvailability',
        'WebRes_GetGroupBlocAvailabilityResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupBlocAvailabilityResponse',
        'WebRes_GetGroupBlocAvailabilityResult'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupBlocAvailabilityResult',
        'WebRes_GetGroupAvailabilityAndPricing'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupAvailabilityAndPricing',
        'WebRes_GetGroupAvailabilityAndPricingResponse'           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupAvailabilityAndPricingResponse',
        'ArrayOfGroupValues'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfGroupValues',
        'GroupValues'                                             => 'Gueststream\\PMS\\IQWare\\API\\GroupValues',
        'InfoMessage'                                             => 'Gueststream\\PMS\\IQWare\\API\\InfoMessage',
        'ArrayOfSpecificDayOccupancyValue'                        => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSpecificDayOccupancyValue',
        'SpecificDayOccupancyValue'                               => 'Gueststream\\PMS\\IQWare\\API\\SpecificDayOccupancyValue',
        'ArrayOfRatesDetails'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRatesDetails',
        'RatesDetails'                                            => 'Gueststream\\PMS\\IQWare\\API\\RatesDetails',
        'ArrayOfDetails'                                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDetails',
        'Details'                                                 => 'Gueststream\\PMS\\IQWare\\API\\Details',
        'WebRes_GetResaStayValueWebRes'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValueWebRes',
        'WebRes_GetResaStayValueWebResResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValueWebResResponse',
        'WebRes_GetResaStayValueWebResResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetResaStayValueWebResResult',
        'WebRes_GetGroupRegularPricing'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupRegularPricing',
        'WebRes_GetGroupRegularPricingResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupRegularPricingResponse',
        'WebRes_GetGroupRegularPricingResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupRegularPricingResult',
        'WebRes_GetGroupPrivatePricing'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupPrivatePricing',
        'WebRes_GetGroupPrivatePricingResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupPrivatePricingResponse',
        'WebRes_GetGroupPrivatePricingResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetGroupPrivatePricingResult',
        'WebRes_GetHotelAvailabilityArray'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetHotelAvailabilityArray',
        'WebRes_GetHotelAvailabilityArrayResponse'                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetHotelAvailabilityArrayResponse',
        'WebRes_GetHotelAvailabilityArrayResult'                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetHotelAvailabilityArrayResult',
        'WebRes_getRateStayValueWebRes'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRateStayValueWebRes',
        'WebRes_getRateStayValueWebResResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRateStayValueWebResResponse',
        'WebRes_getRateStayValueWebResResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRateStayValueWebResResult',
        'WebRes_FillPrices'                                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_FillPrices',
        'dstRatesAndRooms'                                        => 'Gueststream\\PMS\\IQWare\\API\\dstRatesAndRooms',
        'WebRes_FillPricesResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_FillPricesResponse',
        'WebRes_getFormattedPrice'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getFormattedPrice',
        'WebRes_getFormattedPriceResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getFormattedPriceResponse',
        'GetAvailRatesAndRoomNumbersB2BAnywhere'                  => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersB2BAnywhere',
        'GetAvailRatesAndRoomNumbersB2BAnywhereResponse'          => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersB2BAnywhereResponse',
        'ArrayOfB2BAnywhere'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfB2BAnywhere',
        'B2BAnywhere'                                             => 'Gueststream\\PMS\\IQWare\\API\\B2BAnywhere',
        'ArrayOfEvaluationResult'                                 => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfEvaluationResult',
        'EvaluationResult'                                        => 'Gueststream\\PMS\\IQWare\\API\\EvaluationResult',
        'ArrayOfSpecialOfferByDay'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSpecialOfferByDay',
        'SpecialOfferByDay'                                       => 'Gueststream\\PMS\\IQWare\\API\\SpecialOfferByDay',
        'GetAvailRatesAndRoomNumbersB2BAnywhereNew'               => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersB2BAnywhereNew',
        'GetAvailRatesAndRoomNumbersB2BAnywhereNewResponse'       => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersB2BAnywhereNewResponse',
        'WebRes_GetSingleStayValue'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetSingleStayValue',
        'WebRes_GetSingleStayValueResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetSingleStayValueResponse',
        'dstDailyBreakdown'                                       => 'Gueststream\\PMS\\IQWare\\API\\dstDailyBreakdown',
        'WebRes_GetSbdItemsPricing'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetSbdItemsPricing',
        'WebRes_GetSbdItemsPricingResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetSbdItemsPricingResponse',
        'WebRes_GetSbdItemsPricingResult'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetSbdItemsPricingResult',
        'WebRes_getAccountAddresses'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountAddresses',
        'WebRes_getAccountAddressesResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountAddressesResponse',
        'WebRes_getAccountAddressesResult'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountAddressesResult',
        'WebRes_getCreditCardType'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getCreditCardType',
        'WebRes_getCreditCardTypeResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getCreditCardTypeResponse',
        'WebRes_UpdateOwnerAddresses'                             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateOwnerAddresses',
        'WebRes_UpdateOwnerAddressesResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateOwnerAddressesResponse',
        'GetSeasonalArrivalAndDepartureTime'                      => 'Gueststream\\PMS\\IQWare\\API\\GetSeasonalArrivalAndDepartureTime',
        'GetSeasonalArrivalAndDepartureTimeResponse'              => 'Gueststream\\PMS\\IQWare\\API\\GetSeasonalArrivalAndDepartureTimeResponse',
        'ArrivalAndDepartureTime'                                 => 'Gueststream\\PMS\\IQWare\\API\\ArrivalAndDepartureTime',
        'GetAllSeasonalArrivalAndDepartureTime'                   => 'Gueststream\\PMS\\IQWare\\API\\GetAllSeasonalArrivalAndDepartureTime',
        'GetAllSeasonalArrivalAndDepartureTimeResponse'           => 'Gueststream\\PMS\\IQWare\\API\\GetAllSeasonalArrivalAndDepartureTimeResponse',
        'ArrayOfArrivalAndDepartureTimeSeason'                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfArrivalAndDepartureTimeSeason',
        'ArrivalAndDepartureTimeSeason'                           => 'Gueststream\\PMS\\IQWare\\API\\ArrivalAndDepartureTimeSeason',
        'WebRes_getAccountBalances'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountBalances',
        'WebRes_getAccountBalancesResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountBalancesResponse',
        'WebRes_getAccountBalancesResult'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountBalancesResult',
        'WebRes_getResaList'                                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getResaList',
        'WebRes_getResaListResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getResaListResponse',
        'WebRes_getResaListResult'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getResaListResult',
        'WebRes_getAccountInfos'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountInfos',
        'WebRes_getAccountInfosResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountInfosResponse',
        'WebRes_getAccountInfosResult'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getAccountInfosResult',
        'WebRes_isAccPWValid'                                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_isAccPWValid',
        'WebRes_isAccPWValidResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_isAccPWValidResponse',
        'WebRes_updateAccountAddresses'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_updateAccountAddresses',
        'dstAddresses'                                            => 'Gueststream\\PMS\\IQWare\\API\\dstAddresses',
        'WebRes_updateAccountAddressesResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_updateAccountAddressesResponse',
        'WebRes_updateAccountInfos'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_updateAccountInfos',
        'dstAccInfos'                                             => 'Gueststream\\PMS\\IQWare\\API\\dstAccInfos',
        'WebRes_updateAccountInfosResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_updateAccountInfosResponse',
        'WebRes_getGHStats'                                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getGHStats',
        'WebRes_getGHStatsResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getGHStatsResponse',
        'WebRes_getGHStatsResult'                                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getGHStatsResult',
        'WebRes_getMemInfos'                                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getMemInfos',
        'WebRes_getMemInfosResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getMemInfosResponse',
        'WebRes_getMemInfosResult'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getMemInfosResult',
        'WebRes_getServicesCharges'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getServicesCharges',
        'WebRes_getServicesChargesResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getServicesChargesResponse',
        'WebRes_getServicesChargesResult'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getServicesChargesResult',
        'WebRes_SaveReservationBackToBack'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationBackToBack',
        'dstGolfPackageItems'                                     => 'Gueststream\\PMS\\IQWare\\API\\dstGolfPackageItems',
        'dstServicesChargesALaCarte'                              => 'Gueststream\\PMS\\IQWare\\API\\dstServicesChargesALaCarte',
        'WebRes_SaveReservationBackToBackResponse'                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationBackToBackResponse',
        'WebRes_SaveReservationBackToBackResult'                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationBackToBackResult',
        'WebRes_SaveReservation'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservation',
        'WebRes_SaveReservationResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationResponse',
        'WebRes_SaveReservationResult'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationResult',
        'WebRes_SaveReservationForRBO'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationForRBO',
        'WebRes_SaveReservationForRBOResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationForRBOResponse',
        'WebRes_SaveReservationForRBOResult'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_SaveReservationForRBOResult',
        'MemberModifyBasic'                                       => 'Gueststream\\PMS\\IQWare\\API\\MemberModifyBasic',
        'cMemberBasic'                                            => 'Gueststream\\PMS\\IQWare\\API\\cMemberBasic',
        'cAddresses'                                              => 'Gueststream\\PMS\\IQWare\\API\\cAddresses',
        'cAddress'                                                => 'Gueststream\\PMS\\IQWare\\API\\cAddress',
        'cAddressBase'                                            => 'Gueststream\\PMS\\IQWare\\API\\cAddressBase',
        'ArrayOfCTelephone'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCTelephone',
        'cTelephone'                                              => 'Gueststream\\PMS\\IQWare\\API\\cTelephone',
        'MemberModifyBasicResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\MemberModifyBasicResponse',
        'MemberGetReservations'                                   => 'Gueststream\\PMS\\IQWare\\API\\MemberGetReservations',
        'MemberGetReservationsResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\MemberGetReservationsResponse',
        'ArrayOfMemberReservation'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfMemberReservation',
        'MemberReservation'                                       => 'Gueststream\\PMS\\IQWare\\API\\MemberReservation',
        'MemberGet'                                               => 'Gueststream\\PMS\\IQWare\\API\\MemberGet',
        'MemberGetResponse'                                       => 'Gueststream\\PMS\\IQWare\\API\\MemberGetResponse',
        'cMember'                                                 => 'Gueststream\\PMS\\IQWare\\API\\cMember',
        'cMemberProfile'                                          => 'Gueststream\\PMS\\IQWare\\API\\cMemberProfile',
        'cMemberAccount'                                          => 'Gueststream\\PMS\\IQWare\\API\\cMemberAccount',
        'ArrayOfCFolioDist'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCFolioDist',
        'cFolioDist'                                              => 'Gueststream\\PMS\\IQWare\\API\\cFolioDist',
        'ArrayOfCTransfer'                                        => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCTransfer',
        'cTransfer'                                               => 'Gueststream\\PMS\\IQWare\\API\\cTransfer',
        'cInfoTmpl'                                               => 'Gueststream\\PMS\\IQWare\\API\\cInfoTmpl',
        'cTemplate'                                               => 'Gueststream\\PMS\\IQWare\\API\\cTemplate',
        'ArrayOfInt'                                              => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfInt',
        'cAccount'                                                => 'Gueststream\\PMS\\IQWare\\API\\cAccount',
        'ArrayOfCCreditCard'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCCreditCard',
        'cCreditCard'                                             => 'Gueststream\\PMS\\IQWare\\API\\cCreditCard',
        'cTmplProfile'                                            => 'Gueststream\\PMS\\IQWare\\API\\cTmplProfile',
        'cMemberLinks'                                            => 'Gueststream\\PMS\\IQWare\\API\\cMemberLinks',
        'MemberAdd'                                               => 'Gueststream\\PMS\\IQWare\\API\\MemberAdd',
        'MemberAddResponse'                                       => 'Gueststream\\PMS\\IQWare\\API\\MemberAddResponse',
        'MemberAddBasic'                                          => 'Gueststream\\PMS\\IQWare\\API\\MemberAddBasic',
        'MemberAddBasicResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\MemberAddBasicResponse',
        'MemberValidateLoginAndPassword'                          => 'Gueststream\\PMS\\IQWare\\API\\MemberValidateLoginAndPassword',
        'MemberValidateLoginAndPasswordResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\MemberValidateLoginAndPasswordResponse',
        'BeginChangePassword'                                     => 'Gueststream\\PMS\\IQWare\\API\\BeginChangePassword',
        'BeginChangePasswordResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\BeginChangePasswordResponse',
        'ChangePassword'                                          => 'Gueststream\\PMS\\IQWare\\API\\ChangePassword',
        'ChangePasswordResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\ChangePasswordResponse',
        'WSCRSHo_ClubMemberGetBlank'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberGetBlank',
        'WSCRSHo_ClubMemberGetBlankResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberGetBlankResponse',
        'cClubMember'                                             => 'Gueststream\\PMS\\IQWare\\API\\cClubMember',
        'WSCRSHo_ClubMemberSearch'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberSearch',
        'WSCRSHo_ClubMemberSearchResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberSearchResponse',
        'WSCRSHo_ClubMemberSearchResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberSearchResult',
        'WSCRSHo_ClubMemberGet'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberGet',
        'WSCRSHo_ClubMemberGetResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberGetResponse',
        'WSCRSHo_ClubMemberAdd'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberAdd',
        'WSCRSHo_ClubMemberAddResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberAddResponse',
        'WSCRSHo_ClubMemberModify'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberModify',
        'WSCRSHo_ClubMemberModifyResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberModifyResponse',
        'WSCRSHo_ClubMemberAdjustPoints'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberAdjustPoints',
        'WSCRSHo_ClubMemberAdjustPointsResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubMemberAdjustPointsResponse',
        'PMSResaGet'                                              => 'Gueststream\\PMS\\IQWare\\API\\PMSResaGet',
        'PMSResaGetResponse'                                      => 'Gueststream\\PMS\\IQWare\\API\\PMSResaGetResponse',
        'cReservation'                                            => 'Gueststream\\PMS\\IQWare\\API\\cReservation',
        'cProfil'                                                 => 'Gueststream\\PMS\\IQWare\\API\\cProfil',
        'cInfo'                                                   => 'Gueststream\\PMS\\IQWare\\API\\cInfo',
        'cReservationLinks'                                       => 'Gueststream\\PMS\\IQWare\\API\\cReservationLinks',
        'ArrayOfCElement'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCElement',
        'cElement'                                                => 'Gueststream\\PMS\\IQWare\\API\\cElement',
        'cStayValue'                                              => 'Gueststream\\PMS\\IQWare\\API\\cStayValue',
        'ArrayOfCRateDaily'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCRateDaily',
        'cRateDaily'                                              => 'Gueststream\\PMS\\IQWare\\API\\cRateDaily',
        'ArrayOfCManualRateDaily'                                 => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCManualRateDaily',
        'cManualRateDaily'                                        => 'Gueststream\\PMS\\IQWare\\API\\cManualRateDaily',
        'cReservationShare'                                       => 'Gueststream\\PMS\\IQWare\\API\\cReservationShare',
        'ArrayOfCPersonCountDaily'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCPersonCountDaily',
        'cPersonCountDaily'                                       => 'Gueststream\\PMS\\IQWare\\API\\cPersonCountDaily',
        'ArrayOfCServiceChargeALaCarte'                           => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCServiceChargeALaCarte',
        'cServiceChargeALaCarte'                                  => 'Gueststream\\PMS\\IQWare\\API\\cServiceChargeALaCarte',
        'ArrayOfCGolfItems'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCGolfItems',
        'cGolfItems'                                              => 'Gueststream\\PMS\\IQWare\\API\\cGolfItems',
        'ArrayOfCComments'                                        => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCComments',
        'cComments'                                               => 'Gueststream\\PMS\\IQWare\\API\\cComments',
        'PMSResaSearch'                                           => 'Gueststream\\PMS\\IQWare\\API\\PMSResaSearch',
        'PMSResaSearchResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\PMSResaSearchResponse',
        'PMSResaSearchResult'                                     => 'Gueststream\\PMS\\IQWare\\API\\PMSResaSearchResult',
        'PMSResaGetNew'                                           => 'Gueststream\\PMS\\IQWare\\API\\PMSResaGetNew',
        'PMSResaGetNewResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\PMSResaGetNewResponse',
        'PMSResaCancel'                                           => 'Gueststream\\PMS\\IQWare\\API\\PMSResaCancel',
        'PMSResaCancelResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\PMSResaCancelResponse',
        'PMSResaAdd'                                              => 'Gueststream\\PMS\\IQWare\\API\\PMSResaAdd',
        'PMSResaAddResponse'                                      => 'Gueststream\\PMS\\IQWare\\API\\PMSResaAddResponse',
        'PMSResaModify'                                           => 'Gueststream\\PMS\\IQWare\\API\\PMSResaModify',
        'PMSResaModifyResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\PMSResaModifyResponse',
        'WSCRSHo_ClubGetList'                                     => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubGetList',
        'WSCRSHo_ClubGetListResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubGetListResponse',
        'WSCRSHo_ClubGetListResult'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubGetListResult',
        'WSCRSHo_ClubGetNextCardNumber'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubGetNextCardNumber',
        'WSCRSHo_ClubGetNextCardNumberResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ClubGetNextCardNumberResponse',
        'getRateElements'                                         => 'Gueststream\\PMS\\IQWare\\API\\getRateElements',
        'getRateElementsResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\getRateElementsResponse',
        'getRateElementsResult'                                   => 'Gueststream\\PMS\\IQWare\\API\\getRateElementsResult',
        'getElementAgeCatDetail'                                  => 'Gueststream\\PMS\\IQWare\\API\\getElementAgeCatDetail',
        'getElementAgeCatDetailResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\getElementAgeCatDetailResponse',
        'getElementAgeCatDetailResult'                            => 'Gueststream\\PMS\\IQWare\\API\\getElementAgeCatDetailResult',
        'getElementsAgesCategories'                               => 'Gueststream\\PMS\\IQWare\\API\\getElementsAgesCategories',
        'getElementsAgesCategoriesResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\getElementsAgesCategoriesResponse',
        'getElementsAgesCategoriesResult'                         => 'Gueststream\\PMS\\IQWare\\API\\getElementsAgesCategoriesResult',
        'getAvailElementsForStay'                                 => 'Gueststream\\PMS\\IQWare\\API\\getAvailElementsForStay',
        'getAvailElementsForStayResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\getAvailElementsForStayResponse',
        'getAvailElementsForStayResult'                           => 'Gueststream\\PMS\\IQWare\\API\\getAvailElementsForStayResult',
        'GetAvailRatesAndRoomsConfig'                             => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomsConfig',
        'GetAvailRatesAndRoomsConfigResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomsConfigResponse',
        'ArrayOfRoomTypeBreakdown'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomTypeBreakdown',
        'RoomTypeBreakdown'                                       => 'Gueststream\\PMS\\IQWare\\API\\RoomTypeBreakdown',
        'ArrayOfAvailabilityOverview'                             => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfAvailabilityOverview',
        'AvailabilityOverview'                                    => 'Gueststream\\PMS\\IQWare\\API\\AvailabilityOverview',
        'GetAvailRatesAndRoomsConfigNoEval'                       => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomsConfigNoEval',
        'GetAvailRatesAndRoomsConfigNoEvalResponse'               => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomsConfigNoEvalResponse',
        'GetPropertyYieldConfig'                                  => 'Gueststream\\PMS\\IQWare\\API\\GetPropertyYieldConfig',
        'GetPropertyYieldConfigResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\GetPropertyYieldConfigResponse',
        'PropertyYieldConfig'                                     => 'Gueststream\\PMS\\IQWare\\API\\PropertyYieldConfig',
        'FormatPhoneNumber'                                       => 'Gueststream\\PMS\\IQWare\\API\\FormatPhoneNumber',
        'FormatPhoneNumberResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\FormatPhoneNumberResponse',
        'SaveIncentiveGiftCertificate'                            => 'Gueststream\\PMS\\IQWare\\API\\SaveIncentiveGiftCertificate',
        'dsGiftCertificateDetail'                                 => 'Gueststream\\PMS\\IQWare\\API\\dsGiftCertificateDetail',
        'SaveIncentiveGiftCertificateResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\SaveIncentiveGiftCertificateResponse',
        'SaveIncentiveGiftCertificateResult'                      => 'Gueststream\\PMS\\IQWare\\API\\SaveIncentiveGiftCertificateResult',
        'SaveGiftCertificate'                                     => 'Gueststream\\PMS\\IQWare\\API\\SaveGiftCertificate',
        'SaveGiftCertificateResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\SaveGiftCertificateResponse',
        'SaveGiftCertificateResult'                               => 'Gueststream\\PMS\\IQWare\\API\\SaveGiftCertificateResult',
        'SaveReservation'                                         => 'Gueststream\\PMS\\IQWare\\API\\SaveReservation',
        'SaveReservationResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationResponse',
        'SaveReservationResult'                                   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationResult',
        'SaveReservationFromGDS'                                  => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationFromGDS',
        'SaveReservationFromGDSResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationFromGDSResponse',
        'SaveReservationFromGDSResult'                            => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationFromGDSResult',
        'GetSingleUnitStayValueBackToBack'                        => 'Gueststream\\PMS\\IQWare\\API\\GetSingleUnitStayValueBackToBack',
        'XMLDailyManualRates'                                     => 'Gueststream\\PMS\\IQWare\\API\\XMLDailyManualRates',
        'GetSingleUnitStayValueBackToBackResponse'                => 'Gueststream\\PMS\\IQWare\\API\\GetSingleUnitStayValueBackToBackResponse',
        'SaveReservationWithManualRates'                          => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithManualRates',
        'SaveReservationWithManualRatesResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithManualRatesResponse',
        'SaveReservationWithManualRatesResult'                    => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithManualRatesResult',
        'UpdateReservation'                                       => 'Gueststream\\PMS\\IQWare\\API\\UpdateReservation',
        'UpdateReservationResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\UpdateReservationResponse',
        'UpdateReservationResult'                                 => 'Gueststream\\PMS\\IQWare\\API\\UpdateReservationResult',
        'SaveReservationBackToBack'                               => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationBackToBack',
        'SaveReservationBackToBackResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationBackToBackResponse',
        'SaveReservationBackToBackResult'                         => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationBackToBackResult',
        'GetRequiredDepositForAccountNo'                          => 'Gueststream\\PMS\\IQWare\\API\\GetRequiredDepositForAccountNo',
        'GetRequiredDepositForAccountNoResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\GetRequiredDepositForAccountNoResponse',
        'GetRequiredDepositForAccountNoResult'                    => 'Gueststream\\PMS\\IQWare\\API\\GetRequiredDepositForAccountNoResult',
        'SaveReservationWithCardProcessed'                        => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessed',
        'SaveReservationWithCardProcessedResponse'                => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedResponse',
        'SaveReservationWithCardProcessedResult'                  => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedResult',
        'SaveReservationWithECheckProcessed'                      => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessed',
        'SaveReservationWithECheckProcessedResponse'              => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedResponse',
        'SaveReservationWithECheckProcessedResult'                => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedResult',
        'SaveReservationWithCardProcessedRBO'                     => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBO',
        'SaveReservationWithCardProcessedRBOResponse'             => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBOResponse',
        'SaveReservationWithCardProcessedRBOResult'               => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBOResult',
        'SaveReservationWithECheckProcessedRBO'                   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBO',
        'SaveReservationWithECheckProcessedRBOResponse'           => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBOResponse',
        'SaveReservationWithECheckProcessedRBOResult'             => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBOResult',
        'SaveReservationWithCardProcessedBackToBack'              => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedBackToBack',
        'SaveReservationWithCardProcessedBackToBackResponse'      => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedBackToBackResponse',
        'SaveReservationWithCardProcessedBackToBackResult'        => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedBackToBackResult',
        'SaveReservationWithECheckProcessedBackToBack'            => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedBackToBack',
        'SaveReservationWithECheckProcessedBackToBackResponse'    => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedBackToBackResponse',
        'SaveReservationWithECheckProcessedBackToBackResult'      => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedBackToBackResult',
        'SaveReservationWithCardProcessedRBOBackToBack'           => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBOBackToBack',
        'SaveReservationWithCardProcessedRBOBackToBackResponse'   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBOBackToBackResponse',
        'SaveReservationWithCardProcessedRBOBackToBackResult'     => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithCardProcessedRBOBackToBackResult',
        'SaveReservationWithECheckProcessedRBOBackToBack'         => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBOBackToBack',
        'SaveReservationWithECheckProcessedRBOBackToBackResponse' => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBOBackToBackResponse',
        'SaveReservationWithECheckProcessedRBOBackToBackResult'   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithECheckProcessedRBOBackToBackResult',
        'SaveReservationWithPaypalProcessed'                      => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessed',
        'SaveReservationWithPaypalProcessedResponse'              => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedResponse',
        'SaveReservationWithPaypalProcessedResult'                => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedResult',
        'SaveReservationWithPaypalProcessedBackToBack'            => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedBackToBack',
        'SaveReservationWithPaypalProcessedBackToBackResponse'    => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedBackToBackResponse',
        'SaveReservationWithPaypalProcessedBackToBackResult'      => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedBackToBackResult',
        'SaveReservationWithPaypalProcessedRBO'                   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBO',
        'SaveReservationWithPaypalProcessedRBOResponse'           => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBOResponse',
        'SaveReservationWithPaypalProcessedRBOResult'             => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBOResult',
        'SaveReservationWithPaypalProcessedRBOBackToBack'         => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBOBackToBack',
        'SaveReservationWithPaypalProcessedRBOBackToBackResponse' => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBOBackToBackResponse',
        'SaveReservationWithPaypalProcessedRBOBackToBackResult'   => 'Gueststream\\PMS\\IQWare\\API\\SaveReservationWithPaypalProcessedRBOBackToBackResult',
        'WebRes_VHCheck'                                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_VHCheck',
        'WebRes_VHCheckResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_VHCheckResponse',
        'WebRes_getRequiredFields'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRequiredFields',
        'WebRes_getRequiredFieldsResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRequiredFieldsResponse',
        'WebRes_getRequiredFieldsResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getRequiredFieldsResult',
        'WebRes_translateActivities'                              => 'Gueststream\\PMS\\IQWare\\API\\WebRes_translateActivities',
        'WebRes_translateActivitiesResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\WebRes_translateActivitiesResponse',
        'WebRes_translateActivitiesResult'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_translateActivitiesResult',
        'WebRes_getActivityStructureString'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getActivityStructureString',
        'dsActivities'                                            => 'Gueststream\\PMS\\IQWare\\API\\dsActivities',
        'WebRes_getActivityStructureStringResponse'               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getActivityStructureStringResponse',
        'WebRes_getBookingPlaces'                                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getBookingPlaces',
        'WebRes_getBookingPlacesResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getBookingPlacesResponse',
        'WebRes_getBookingPlacesResult'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_getBookingPlacesResult',
        'WebRes_GetAllMembers'                                    => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetAllMembers',
        'WebRes_GetAllMembersResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetAllMembersResponse',
        'ArrayOfGlobalAccess'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfGlobalAccess',
        'GlobalAccess'                                            => 'Gueststream\\PMS\\IQWare\\API\\GlobalAccess',
        'WebRes_RetrieveForgottenPassword'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_RetrieveForgottenPassword',
        'WebRes_RetrieveForgottenPasswordResponse'                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_RetrieveForgottenPasswordResponse',
        'WebRes_GlobalAccessLogin'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GlobalAccessLogin',
        'WebRes_GlobalAccessLoginResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GlobalAccessLoginResponse',
        'WebRes_GetCondoOwnerBasicInfos'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerBasicInfos',
        'WebRes_GetCondoOwnerBasicInfosResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerBasicInfosResponse',
        'WebRes_GetCondoOwnerBasicInfosResult'                    => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerBasicInfosResult',
        'WebRes_GetCoOwnerDistributionPercentage'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCoOwnerDistributionPercentage',
        'WebRes_GetCoOwnerDistributionPercentageResponse'         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCoOwnerDistributionPercentageResponse',
        'WebRes_GetCondoOwnerAdminReservations'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerAdminReservations',
        'WebRes_GetCondoOwnerAdminReservationsResponse'           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerAdminReservationsResponse',
        'WebRes_GetCondoOwnerAdminReservationsResult'             => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerAdminReservationsResult',
        'WebRes_GetAllMemberReservations'                         => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetAllMemberReservations',
        'WebRes_GetAllMemberReservationsResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetAllMemberReservationsResponse',
        'ArrayOfDataSet'                                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDataSet',
        'DataSet'                                                 => 'Gueststream\\PMS\\IQWare\\API\\DataSet',
        'WebRes_GetCondoOwnerWorkOrder'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerWorkOrder',
        'WebRes_GetCondoOwnerWorkOrderResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerWorkOrderResponse',
        'WebRes_GetCondoOwnerWorkOrderResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerWorkOrderResult',
        'WebRes_GetCondoOwnerNews'                                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerNews',
        'WebRes_GetCondoOwnerNewsResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerNewsResponse',
        'WebRes_GetCondoOwnerNewsResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerNewsResult',
        'WebRes_GetCondoOwnerByReferal'                           => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerByReferal',
        'WebRes_GetCondoOwnerByReferalResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerByReferalResponse',
        'WebRes_GetCondoOwnerByReferalResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerByReferalResult',
        'WebRes_GetOwnerRoomAvailabilityByAdminID'                => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerRoomAvailabilityByAdminID',
        'WebRes_GetOwnerRoomAvailabilityByAdminIDResponse'        => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetOwnerRoomAvailabilityByAdminIDResponse',
        'GetUnfilteredRatesAndRoomsPricesClusters'                => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPricesClusters',
        'GetUnfilteredRatesAndRoomsPricesClustersResponse'        => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPricesClustersResponse',
        'ArrayOfStayValue3'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfStayValue3',
        'StayValue3'                                              => 'Gueststream\\PMS\\IQWare\\API\\StayValue3',
        'ArrayOfStayByNightValue'                                 => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfStayByNightValue',
        'StayByNightValue'                                        => 'Gueststream\\PMS\\IQWare\\API\\StayByNightValue',
        'ArrayOfAvailableSuite'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfAvailableSuite',
        'AvailableSuite'                                          => 'Gueststream\\PMS\\IQWare\\API\\AvailableSuite',
        'ArrayOfRefusal'                                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRefusal',
        'Refusal'                                                 => 'Gueststream\\PMS\\IQWare\\API\\Refusal',
        'ArrayOfAvailableRoom'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfAvailableRoom',
        'AvailableRoom'                                           => 'Gueststream\\PMS\\IQWare\\API\\AvailableRoom',
        'ArrayOfSpecialData'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSpecialData',
        'SpecialData'                                             => 'Gueststream\\PMS\\IQWare\\API\\SpecialData',
        'GetUnfilteredRatesAndRoomsPricesBackToBack'              => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPricesBackToBack',
        'GetUnfilteredRatesAndRoomsPricesBackToBackResponse'      => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPricesBackToBackResponse',
        'GetAvailRatesAndRoomNumbers'                             => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbers',
        'GetAvailRatesAndRoomNumbersResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersResponse',
        'GetAvailRatesAndRoomNumbersWithEvaluation'               => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersWithEvaluation',
        'GetAvailRatesAndRoomNumbersWithEvaluationResponse'       => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersWithEvaluationResponse',
        'GetAvailRatesAndRoomNumbersWithRefusals'                 => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersWithRefusals',
        'GetAvailRatesAndRoomNumbersWithRefusalsResponse'         => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesAndRoomNumbersWithRefusalsResponse',
        'getBeddings'                                             => 'Gueststream\\PMS\\IQWare\\API\\getBeddings',
        'getBeddingsResponse'                                     => 'Gueststream\\PMS\\IQWare\\API\\getBeddingsResponse',
        'ArrayOfBedding'                                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfBedding',
        'Bedding'                                                 => 'Gueststream\\PMS\\IQWare\\API\\Bedding',
        'GetSpecialOffers'                                        => 'Gueststream\\PMS\\IQWare\\API\\GetSpecialOffers',
        'GetSpecialOffersResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\GetSpecialOffersResponse',
        'ArrayOfSpecialOffers'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSpecialOffers',
        'SpecialOffers'                                           => 'Gueststream\\PMS\\IQWare\\API\\SpecialOffers',
        'ArrayOfRateCode'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRateCode',
        'RateCode'                                                => 'Gueststream\\PMS\\IQWare\\API\\RateCode',
        'ArrayOfRateSpecialValidPeriod'                           => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRateSpecialValidPeriod',
        'RateSpecialValidPeriod'                                  => 'Gueststream\\PMS\\IQWare\\API\\RateSpecialValidPeriod',
        'GetPromoCodes'                                           => 'Gueststream\\PMS\\IQWare\\API\\GetPromoCodes',
        'GetPromoCodesResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetPromoCodesResponse',
        'GetPromoCodesResult'                                     => 'Gueststream\\PMS\\IQWare\\API\\GetPromoCodesResult',
        'SetPushID'                                               => 'Gueststream\\PMS\\IQWare\\API\\SetPushID',
        'SetPushIDResponse'                                       => 'Gueststream\\PMS\\IQWare\\API\\SetPushIDResponse',
        'ImportRatesAndRoomTypesDetails'                          => 'Gueststream\\PMS\\IQWare\\API\\ImportRatesAndRoomTypesDetails',
        'ImportRatesAndRoomTypesDetailsResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\ImportRatesAndRoomTypesDetailsResponse',
        'ArrayOfExportedRate'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfExportedRate',
        'ExportedRate'                                            => 'Gueststream\\PMS\\IQWare\\API\\ExportedRate',
        'GetHousekeepingRoomStatus'                               => 'Gueststream\\PMS\\IQWare\\API\\GetHousekeepingRoomStatus',
        'GetHousekeepingRoomStatusResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\GetHousekeepingRoomStatusResponse',
        'GetHousekeepingRoomStatusResult'                         => 'Gueststream\\PMS\\IQWare\\API\\GetHousekeepingRoomStatusResult',
        'ProcessCard'                                             => 'Gueststream\\PMS\\IQWare\\API\\ProcessCard',
        'ProcessCardResponse'                                     => 'Gueststream\\PMS\\IQWare\\API\\ProcessCardResponse',
        'PostTransaction'                                         => 'Gueststream\\PMS\\IQWare\\API\\PostTransaction',
        'PostTransactionResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\PostTransactionResponse',
        'CancelReservationAndGetAmountToPay'                      => 'Gueststream\\PMS\\IQWare\\API\\CancelReservationAndGetAmountToPay',
        'CancelReservationAndGetAmountToPayResponse'              => 'Gueststream\\PMS\\IQWare\\API\\CancelReservationAndGetAmountToPayResponse',
        'CancelResponse'                                          => 'Gueststream\\PMS\\IQWare\\API\\CancelResponse',
        'Folios'                                                  => 'Gueststream\\PMS\\IQWare\\API\\Folios',
        'ProcessCancellation'                                     => 'Gueststream\\PMS\\IQWare\\API\\ProcessCancellation',
        'ProcessCancellationResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\ProcessCancellationResponse',
        'CancelReservation'                                       => 'Gueststream\\PMS\\IQWare\\API\\CancelReservation',
        'CancelReservationResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\CancelReservationResponse',
        'GetAllCancellationReasons'                               => 'Gueststream\\PMS\\IQWare\\API\\GetAllCancellationReasons',
        'GetAllCancellationReasonsResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\GetAllCancellationReasonsResponse',
        'ArrayOfCancellationReason'                               => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCancellationReason',
        'CancellationReason'                                      => 'Gueststream\\PMS\\IQWare\\API\\CancellationReason',
        'GetAllCancellationNew'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetAllCancellationNew',
        'GetAllCancellationNewResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\GetAllCancellationNewResponse',
        'GetAllCancellationNewResult'                             => 'Gueststream\\PMS\\IQWare\\API\\GetAllCancellationNewResult',
        'GetSuitesDescription'                                    => 'Gueststream\\PMS\\IQWare\\API\\GetSuitesDescription',
        'GetSuitesDescriptionResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\GetSuitesDescriptionResponse',
        'GetSuitesDescriptionResult'                              => 'Gueststream\\PMS\\IQWare\\API\\GetSuitesDescriptionResult',
        'GetCreditCardTypes'                                      => 'Gueststream\\PMS\\IQWare\\API\\GetCreditCardTypes',
        'GetCreditCardTypesResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\GetCreditCardTypesResponse',
        'ArrayOfCreditCardTypes'                                  => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCreditCardTypes',
        'CreditCardTypes'                                         => 'Gueststream\\PMS\\IQWare\\API\\CreditCardTypes',
        'GetCreditCardType'                                       => 'Gueststream\\PMS\\IQWare\\API\\GetCreditCardType',
        'GetCreditCardTypeResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\GetCreditCardTypeResponse',
        'GetSingleStayValueForUnitWithBuilding'                   => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueForUnitWithBuilding',
        'GetSingleStayValueForUnitWithBuildingResponse'           => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueForUnitWithBuildingResponse',
        'GetSingleStayValueForUnit'                               => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueForUnit',
        'GetSingleStayValueForUnitResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueForUnitResponse',
        'GetSingleStayValue'                                      => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValue',
        'GetSingleStayValueResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueResponse',
        'GetSingleStayValueBackToBack'                            => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueBackToBack',
        'GetSingleStayValueBackToBackResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueBackToBackResponse',
        'GetSingleStayValueRBO'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueRBO',
        'GetSingleStayValueRBOResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\GetSingleStayValueRBOResponse',
        'GetConfirmationFamily'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetConfirmationFamily',
        'GetConfirmationFamilyResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\GetConfirmationFamilyResponse',
        'GetRoomTypeAvailability'                                 => 'Gueststream\\PMS\\IQWare\\API\\GetRoomTypeAvailability',
        'GetRoomTypeAvailabilityResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\GetRoomTypeAvailabilityResponse',
        'ArrayOfRoomTypeAvailability'                             => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomTypeAvailability',
        'RoomTypeAvailability'                                    => 'Gueststream\\PMS\\IQWare\\API\\RoomTypeAvailability',
        'getAllRoomTypeBuilding'                                  => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomTypeBuilding',
        'getAllRoomTypeBuildingResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomTypeBuildingResponse',
        'getAllRoomTypeBuildingResult'                            => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomTypeBuildingResult',
        'WebRes_GetCondoOwnerRoomInfo'                            => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerRoomInfo',
        'WebRes_GetCondoOwnerRoomInfoResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\WebRes_GetCondoOwnerRoomInfoResponse',
        'cCondoOwnerRoom'                                         => 'Gueststream\\PMS\\IQWare\\API\\cCondoOwnerRoom',
        'ArrayOfOaccAddress'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfOaccAddress',
        'oaccAddress'                                             => 'Gueststream\\PMS\\IQWare\\API\\oaccAddress',
        'ArrayOfOaccTelephone'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfOaccTelephone',
        'oaccTelephone'                                           => 'Gueststream\\PMS\\IQWare\\API\\OaccTelephone',
        'ArrayOfRoomSpecification'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomSpecification',
        'RoomSpecification'                                       => 'Gueststream\\PMS\\IQWare\\API\\RoomSpecification',
        'ArrayOfSuitesSpecification'                              => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSuitesSpecification',
        'SuitesSpecification'                                     => 'Gueststream\\PMS\\IQWare\\API\\SuitesSpecification',
        'ArrayOfLanguage'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfLanguage',
        'Language'                                                => 'Gueststream\\PMS\\IQWare\\API\\Language',
        'ArrayOfSuiteItems'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSuiteItems',
        'SuiteItems'                                              => 'Gueststream\\PMS\\IQWare\\API\\SuiteItems',
        'getRoomSpecifications'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetRoomSpecifications',
        'getRoomSpecificationsResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\GetRoomSpecificationsResponse',
        'getAllRoomsSpecifications'                               => 'Gueststream\\PMS\\IQWare\\API\\GetAllRoomsSpecifications',
        'getAllRoomsSpecificationsResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\GetAllRoomsSpecificationsResponse',
        'getAllSuitesSpecifications'                              => 'Gueststream\\PMS\\IQWare\\API\\getAllSuitesSpecifications',
        'getAllSuitesSpecificationsResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\getAllSuitesSpecificationsResponse',
        'getUnitAvailabilityForCalendar'                          => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityForCalendar',
        'getUnitAvailabilityForCalendarResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityForCalendarResponse',
        'ArrayOfUnitAvailabilityCalendar'                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfUnitAvailabilityCalendar',
        'UnitAvailabilityCalendar'                                => 'Gueststream\\PMS\\IQWare\\API\\UnitAvailabilityCalendar',
        'getUnitAvailabilityCalendarBreakdown'                    => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityCalendarBreakdown',
        'getUnitAvailabilityCalendarBreakdownResponse'            => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityCalendarBreakdownResponse',
        'ArrayOfRoomCalendar'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomCalendar',
        'RoomCalendar'                                            => 'Gueststream\\PMS\\IQWare\\API\\RoomCalendar',
        'getUnitAvailabilityCalendar'                             => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityCalendar',
        'getUnitAvailabilityCalendarResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\getUnitAvailabilityCalendarResponse',
        'ArrayOfRoomCalendarBreakdown'                            => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomCalendarBreakdown',
        'RoomCalendarBreakdown'                                   => 'Gueststream\\PMS\\IQWare\\API\\RoomCalendarBreakdown',
        'IsUnitAvailableForStay'                                  => 'Gueststream\\PMS\\IQWare\\API\\IsUnitAvailableForStay',
        'IsUnitAvailableForStayResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\IsUnitAvailableForStayResponse',
        'IsRoomTypeAvailableForStay'                              => 'Gueststream\\PMS\\IQWare\\API\\IsRoomTypeAvailableForStay',
        'IsRoomTypeAvailableForStayResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\IsRoomTypeAvailableForStayResponse',
        'getAllRoomsAvailabilityCalendar'                         => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityCalendar',
        'getAllRoomsAvailabilityCalendarResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityCalendarResponse',
        'getAllRoomsAvailabilityForStay'                          => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStay',
        'getAllRoomsAvailabilityForStayResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStayResponse',
        'ArrayOfRoomAvailabilityForStay'                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomAvailabilityForStay',
        'RoomAvailabilityForStay'                                 => 'Gueststream\\PMS\\IQWare\\API\\RoomAvailabilityForStay',
        'GetUserDefinedFieldsForUnits'                            => 'Gueststream\\PMS\\IQWare\\API\\GetUserDefinedFieldsForUnits',
        'GetUserDefinedFieldsForUnitsResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\GetUserDefinedFieldsForUnitsResponse',
        'GetUserDefinedFieldsForUnitsResult'                      => 'Gueststream\\PMS\\IQWare\\API\\GetUserDefinedFieldsForUnitsResult',
        'getAllRoomsAvailabilityForStayBackToBack'                => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStayBackToBack',
        'getAllRoomsAvailabilityForStayBackToBackResponse'        => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStayBackToBackResponse',
        'getAllRoomsAvailabilityForStayFast'                      => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStayFast',
        'InventoryResponse'                                       => 'Gueststream\\PMS\\IQWare\\API\\InventoryResponse',
        'ArrayOfRoomInventory'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomInventory',
        'RoomInventory'                                           => 'Gueststream\\PMS\\IQWare\\API\\RoomInventory',
        'ArrayOfSuiteInventory'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfSuiteInventory',
        'SuiteInventory'                                          => 'Gueststream\\PMS\\IQWare\\API\\SuiteInventory',
        'getAllRoomsAvailabilityForStayFastResponse'              => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomsAvailabilityForStayFastResponse',
        'getAllRoomAttributsForGrouping'                          => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomAttributsForGrouping',
        'getAllRoomAttributsForGroupingResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomAttributsForGroupingResponse',
        'ArrayOfRoomAttributGrouping'                             => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomAttributGrouping',
        'RoomAttributGrouping'                                    => 'Gueststream\\PMS\\IQWare\\API\\RoomAttributGrouping',
        'getAllRoomLocationsForGrouping'                          => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomLocationsForGrouping',
        'getAllRoomLocationsForGroupingResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomLocationsForGroupingResponse',
        'ArrayOfRoomLocationGrouping'                             => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomLocationGrouping',
        'RoomLocationGrouping'                                    => 'Gueststream\\PMS\\IQWare\\API\\RoomLocationGrouping',
        'GetRateReasons'                                          => 'Gueststream\\PMS\\IQWare\\API\\GetRateReasons',
        'GetRateReasonsResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\GetRateReasonsResponse',
        'ArrayOfRateReason'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRateReason',
        'RateReason'                                              => 'Gueststream\\PMS\\IQWare\\API\\RateReason',
        'ValidateRoomRefusals'                                    => 'Gueststream\\PMS\\IQWare\\API\\ValidateRoomRefusals',
        'ValidateRoomRefusalsResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\ValidateRoomRefusalsResponse',
        'getAllRoomTypeClusters'                                  => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomTypeClusters',
        'getAllRoomTypeClustersResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomTypeClustersResponse',
        'ArrayOfRoomTypeClusterResult'                            => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomTypeClusterResult',
        'RoomTypeClusterResult'                                   => 'Gueststream\\PMS\\IQWare\\API\\RoomTypeClusterResult',
        'ArrayOfRoomTypeCluster'                                  => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomTypeCluster',
        'RoomTypeCluster'                                         => 'Gueststream\\PMS\\IQWare\\API\\RoomTypeCluster',
        'getAllRoomAttributes'                                    => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomAttributes',
        'getAllRoomAttributesResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomAttributesResponse',
        'ArrayOfRoomAttribute'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomAttribute',
        'RoomAttribute'                                           => 'Gueststream\\PMS\\IQWare\\API\\RoomAttribute',
        'getAllRoomLocations'                                     => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomLocations',
        'getAllRoomLocationsResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\getAllRoomLocationsResponse',
        'ArrayOfRoomLocation'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomLocation',
        'RoomLocation'                                            => 'Gueststream\\PMS\\IQWare\\API\\RoomLocation',
        'getDailyInHouseOccupancy'                                => 'Gueststream\\PMS\\IQWare\\API\\getDailyInHouseOccupancy',
        'getDailyInHouseOccupancyResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\getDailyInHouseOccupancyResponse',
        'ArrayOfDailyOccupancy'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDailyOccupancy',
        'DailyOccupancy'                                          => 'Gueststream\\PMS\\IQWare\\API\\DailyOccupancy',
        'GDS_GetRates'                                            => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRates',
        'GDS_GetRatesResponse'                                    => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRatesResponse',
        'GDS_GetRatesResult'                                      => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRatesResult',
        'GDS_GetInventory'                                        => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetInventory',
        'GDS_GetInventoryResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetInventoryResponse',
        'GDS_GetInventoryResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetInventoryResult',
        'GDS_GetRestrictions'                                     => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRestrictions',
        'GDS_GetRestrictionsResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRestrictionsResponse',
        'GDS_GetRestrictionsResult'                               => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetRestrictionsResult',
        'GDS_GetListingInfo'                                      => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetListingInfo',
        'GDS_GetListingInfoResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\GDS_GetListingInfoResponse',
        'ArrayOfGDSListing'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfGDSListing',
        'GDSListing'                                              => 'Gueststream\\PMS\\IQWare\\API\\GDSListing',
        'GetReservationsForBilling'                               => 'Gueststream\\PMS\\IQWare\\API\\GetReservationsForBilling',
        'GetReservationsForBillingResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\GetReservationsForBillingResponse',
        'ArrayOfInfosBilling'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfInfosBilling',
        'InfosBilling'                                            => 'Gueststream\\PMS\\IQWare\\API\\InfosBilling',
        'getAccomodations'                                        => 'Gueststream\\PMS\\IQWare\\API\\getAccomodations',
        'getAccomodationsResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\getAccomodationsResponse',
        'getAccomodationsResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\getAccomodationsResult',
        'GetAllBuilding'                                          => 'Gueststream\\PMS\\IQWare\\API\\GetAllBuilding',
        'GetAllBuildingResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\GetAllBuildingResponse',
        'GetAllBuildingResult'                                    => 'Gueststream\\PMS\\IQWare\\API\\GetAllBuildingResult',
        'getHotelListOfRates'                                     => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRates',
        'getHotelListOfRatesResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRatesResponse',
        'getHotelListOfRatesResult'                               => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRatesResult',
        'getHotelListOfRoomTypes'                                 => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRoomTypes',
        'getHotelListOfRoomTypesResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRoomTypesResponse',
        'getHotelListOfRoomTypesResult'                           => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRoomTypesResult',
        'getHotelListOfBusinessSources'                           => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfBusinessSources',
        'getHotelListOfBusinessSourcesResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfBusinessSourcesResponse',
        'getHotelListOfBusinessSourcesResult'                     => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfBusinessSourcesResult',
        'getHotelListOfRoomTypesWithBuildingsAndPLs'              => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRoomTypesWithBuildingsAndPLs',
        'getHotelListOfRoomTypesWithBuildingsAndPLsResponse'      => 'Gueststream\\PMS\\IQWare\\API\\getHotelListOfRoomTypesWithBuildingsAndPLsResponse',
        'ArrayOfRoomTypeBuildingsAndPL'                           => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomTypeBuildingsAndPL',
        'RoomTypeBuildingsAndPL'                                  => 'Gueststream\\PMS\\IQWare\\API\\RoomTypeBuildingsAndPL',
        'getHotelGuaranteeTypes'                                  => 'Gueststream\\PMS\\IQWare\\API\\getHotelGuaranteeTypes',
        'getHotelGuaranteeTypesResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\getHotelGuaranteeTypesResponse',
        'getHotelGuaranteeTypesResult'                            => 'Gueststream\\PMS\\IQWare\\API\\getHotelGuaranteeTypesResult',
        'getRoomAttributes'                                       => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributes',
        'getRoomAttributesResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributesResponse',
        'getRoomAttributesResult'                                 => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributesResult',
        'getRoomLocations'                                        => 'Gueststream\\PMS\\IQWare\\API\\getRoomLocations',
        'getRoomLocationsResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\getRoomLocationsResponse',
        'getRoomLocationsResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\getRoomLocationsResult',
        'getRoomAttributesAndLocations'                           => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributesAndLocations',
        'getRoomAttributesAndLocationsResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributesAndLocationsResponse',
        'getRoomAttributesAndLocationsResult'                     => 'Gueststream\\PMS\\IQWare\\API\\getRoomAttributesAndLocationsResult',
        'getHotelInfos'                                           => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfos',
        'getHotelInfosResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfosResponse',
        'getHotelInfosResult'                                     => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfosResult',
        'WebRes_UpdateAccountLogin'                               => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateAccountLogin',
        'WebRes_UpdateAccountLoginResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WebRes_UpdateAccountLoginResponse',
        'MemberLoyalty'                                           => 'Gueststream\\PMS\\IQWare\\API\\MemberLoyalty',
        'MemberLoyaltyResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\MemberLoyaltyResponse',
        'Loyalty'                                                 => 'Gueststream\\PMS\\IQWare\\API\\Loyalty',
        'GetNationalities'                                        => 'Gueststream\\PMS\\IQWare\\API\\GetNationalities',
        'GetNationalitiesResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\GetNationalitiesResponse',
        'ArrayOfNationality'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfNationality',
        'Nationality'                                             => 'Gueststream\\PMS\\IQWare\\API\\Nationality',
        'GetCreditLimits'                                         => 'Gueststream\\PMS\\IQWare\\API\\GetCreditLimits',
        'GetCreditLimitsResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\GetCreditLimitsResponse',
        'ArrayOfCreditLimit'                                      => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCreditLimit',
        'CreditLimit'                                             => 'Gueststream\\PMS\\IQWare\\API\\CreditLimit',
        'MemberModify'                                            => 'Gueststream\\PMS\\IQWare\\API\\MemberModify',
        'MemberModifyResponse'                                    => 'Gueststream\\PMS\\IQWare\\API\\MemberModifyResponse',
        'GetLanguageIDs'                                          => 'Gueststream\\PMS\\IQWare\\API\\GetLanguageIDs',
        'GetLanguageIDsResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\GetLanguageIDsResponse',
        'ArrayOfMemberLanguage'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfMemberLanguage',
        'MemberLanguage'                                          => 'Gueststream\\PMS\\IQWare\\API\\MemberLanguage',
        'GetIQImagesFiles'                                        => 'Gueststream\\PMS\\IQWare\\API\\GetIQImagesFiles',
        'GetIQImagesFilesResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\GetIQImagesFilesResponse',
        'ArrayOfIQImage'                                          => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfIQImage',
        'IQImage'                                                 => 'Gueststream\\PMS\\IQWare\\API\\IQImage',
        'GetIQImageFTPInfo'                                       => 'Gueststream\\PMS\\IQWare\\API\\GetIQImageFTPInfo',
        'GetIQImageFTPInfoResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\GetIQImageFTPInfoResponse',
        'IQImageFTPInfo'                                          => 'Gueststream\\PMS\\IQWare\\API\\IQImageFTPInfo',
        'AddCreditCardToAccount'                                  => 'Gueststream\\PMS\\IQWare\\API\\AddCreditCardToAccount',
        'AddCreditCardToAccountResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\AddCreditCardToAccountResponse',
        'Evaluate'                                                => 'Gueststream\\PMS\\IQWare\\API\\Evaluate',
        'EvaluateResponse'                                        => 'Gueststream\\PMS\\IQWare\\API\\EvaluateResponse',
        'EvaluateResult'                                          => 'Gueststream\\PMS\\IQWare\\API\\EvaluateResult',
        'GetUnitTypesEvaluations'                                 => 'Gueststream\\PMS\\IQWare\\API\\GetUnitTypesEvaluations',
        'GetUnitTypesEvaluationsResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\GetUnitTypesEvaluationsResponse',
        'ArrayOfEvaluation'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfEvaluation',
        'Evaluation'                                              => 'Gueststream\\PMS\\IQWare\\API\\Evaluation',
        'ArrayOfDailyEvaluation'                                  => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDailyEvaluation',
        'DailyEvaluation'                                         => 'Gueststream\\PMS\\IQWare\\API\\DailyEvaluation',
        'EvaluationThreaded'                                      => 'Gueststream\\PMS\\IQWare\\API\\EvaluationThreaded',
        'EvaluationThreadedResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\EvaluationThreadedResponse',
        'GetServiceCharges'                                       => 'Gueststream\\PMS\\IQWare\\API\\GetServiceCharges',
        'GetServiceChargesResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\GetServiceChargesResponse',
        'ArrayOfServiceCharge'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfServiceCharge',
        'ServiceCharge'                                           => 'Gueststream\\PMS\\IQWare\\API\\ServiceCharge',
        'ArrayOfRoomType'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfRoomType',
        'RoomType'                                                => 'Gueststream\\PMS\\IQWare\\API\\RoomType',
        'ArrayOfDetail'                                           => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDetail',
        'Detail'                                                  => 'Gueststream\\PMS\\IQWare\\API\\Detail',
        'GetGiftCertificateConfiguration'                         => 'Gueststream\\PMS\\IQWare\\API\\GetGiftCertificateConfiguration',
        'GetGiftCertificateConfigurationResponse'                 => 'Gueststream\\PMS\\IQWare\\API\\GetGiftCertificateConfigurationResponse',
        'cGiftCertificate'                                        => 'Gueststream\\PMS\\IQWare\\API\\cGiftCertificate',
        'ArrayOfCGiftCertificateIncentivePeriod'                  => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCGiftCertificateIncentivePeriod',
        'cGiftCertificateIncentivePeriod'                         => 'Gueststream\\PMS\\IQWare\\API\\cGiftCertificateIncentivePeriod',
        'AvailRatesAndRooms'                                      => 'Gueststream\\PMS\\IQWare\\API\\AvailRatesAndRooms',
        'AvailRatesAndRoomsResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\AvailRatesAndRoomsResponse',
        'GetBuildingsWithAtLeastOneUnitAvailable'                 => 'Gueststream\\PMS\\IQWare\\API\\GetBuildingsWithAtLeastOneUnitAvailable',
        'GetBuildingsWithAtLeastOneUnitAvailableResponse'         => 'Gueststream\\PMS\\IQWare\\API\\GetBuildingsWithAtLeastOneUnitAvailableResponse',
        'GetUnitAvailability'                                     => 'Gueststream\\PMS\\IQWare\\API\\GetUnitAvailability',
        'GetUnitAvailabilityResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\GetUnitAvailabilityResponse',
        'ArrayOfUnitAvailable'                                    => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfUnitAvailable',
        'UnitAvailable'                                           => 'Gueststream\\PMS\\IQWare\\API\\UnitAvailable',
        'GetUnitWithoutAvailability'                              => 'Gueststream\\PMS\\IQWare\\API\\GetUnitWithoutAvailability',
        'GetUnitWithoutAvailabilityResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\GetUnitWithoutAvailabilityResponse',
        'GetUnitsAvailability'                                    => 'Gueststream\\PMS\\IQWare\\API\\GetUnitsAvailability',
        'GetUnitsAvailabilityResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\GetUnitsAvailabilityResponse',
        'ArrayOfUnitDate'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfUnitDate',
        'UnitDate'                                                => 'Gueststream\\PMS\\IQWare\\API\\UnitDate',
        'getUnitsAvailabilityCalendar'                            => 'Gueststream\\PMS\\IQWare\\API\\getUnitsAvailabilityCalendar',
        'getUnitsAvailabilityCalendarResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\getUnitsAvailabilityCalendarResponse',
        'GetGooglePMSConfig'                                      => 'Gueststream\\PMS\\IQWare\\API\\GetGooglePMSConfig',
        'GetGooglePMSConfigResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\GetGooglePMSConfigResponse',
        'GoogleRates'                                             => 'Gueststream\\PMS\\IQWare\\API\\GoogleRates',
        'GoogleEval'                                              => 'Gueststream\\PMS\\IQWare\\API\\GoogleEval',
        'GoogleEvalResponse'                                      => 'Gueststream\\PMS\\IQWare\\API\\GoogleEvalResponse',
        'GetRoomsAndSuitesAvailability'                           => 'Gueststream\\PMS\\IQWare\\API\\GetRoomsAndSuitesAvailability',
        'GetRoomsAndSuitesAvailabilityResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\GetRoomsAndSuitesAvailabilityResponse',
        'InventoryResult'                                         => 'Gueststream\\PMS\\IQWare\\API\\InventoryResult',
        'LoadReservation'                                         => 'Gueststream\\PMS\\IQWare\\API\\LoadReservation',
        'LoadReservationResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\LoadReservationResponse',
        'ReservationRBO'                                          => 'Gueststream\\PMS\\IQWare\\API\\ReservationRBO',
        'Reservation'                                             => 'Gueststream\\PMS\\IQWare\\API\\Reservation',
        'ChildrenBreakDown'                                       => 'Gueststream\\PMS\\IQWare\\API\\ChildrenBreakDown',
        'Attributes'                                              => 'Gueststream\\PMS\\IQWare\\API\\Attributes',
        'Localizations'                                           => 'Gueststream\\PMS\\IQWare\\API\\Localizations',
        'ArrayOfDailyBreakdown'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDailyBreakdown',
        'DailyBreakdown'                                          => 'Gueststream\\PMS\\IQWare\\API\\DailyBreakdown',
        'SummarySBD'                                              => 'Gueststream\\PMS\\IQWare\\API\\SummarySBD',
        'WebRes_LoadReservation'                                  => 'Gueststream\\PMS\\IQWare\\API\\WebRes_LoadReservation',
        'WebRes_LoadReservationResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WebRes_LoadReservationResponse',
        'WSCRS_CrsLocal_Initialize'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_CrsLocal_Initialize',
        'WSCRS_CrsLocal_InitializeResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_CrsLocal_InitializeResponse',
        'WSCRS_Release'                                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_Release',
        'WSCRS_ReleaseResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_ReleaseResponse',
        'WSCRS_TestSession'                                       => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_TestSession',
        'WSCRS_TestSessionResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_TestSessionResponse',
        'WSCRS_GetCodes'                                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodes',
        'WSCRS_GetCodesResponse'                                  => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodesResponse',
        'WSCRS_GetCodesResult'                                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodesResult',
        'WSCRS_GetCodesPublished'                                 => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodesPublished',
        'WSCRS_GetCodesPublishedResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodesPublishedResponse',
        'WSCRS_GetCodesPublishedResult'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetCodesPublishedResult',
        'WSCRS_GetAvailability'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetAvailability',
        'WSCRS_GetAvailabilityResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetAvailabilityResponse',
        'WSCRS_GetAvailabilityResult'                             => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetAvailabilityResult',
        'WSCRS_GetNewAvailability'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetNewAvailability',
        'WSCRS_GetNewAvailabilityResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetNewAvailabilityResponse',
        'WSCRS_GetNewAvailabilityResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRS_GetNewAvailabilityResult',
        'WSCRSHo_Initialize'                                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_Initialize',
        'WSCRSHo_InitializeResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InitializeResponse',
        'WSCRSHo_Release'                                         => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_Release',
        'WSCRSHo_ReleaseResponse'                                 => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_ReleaseResponse',
        'WSCRSHo_SessionCheck'                                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_SessionCheck',
        'WSCRSHo_SessionCheckResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_SessionCheckResponse',
        'WSCRSHo_GetCodes'                                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodes',
        'WSCRSHo_GetCodesResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodesResponse',
        'WSCRSHo_GetCodesResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodesResult',
        'WSCRSHo_GetCodesPublished'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodesPublished',
        'WSCRSHo_GetCodesPublishedResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodesPublishedResponse',
        'WSCRSHo_GetCodesPublishedResult'                         => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetCodesPublishedResult',
        'WSCRSHo_GetHotelList'                                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelList',
        'WSCRSHo_GetHotelListResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelListResponse',
        'WSCRSHo_GetHotelListResult'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelListResult',
        'WSCRSHo_GetHotelInfos'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelInfos',
        'WSCRSHo_GetHotelInfosResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelInfosResponse',
        'WSCRSHo_GetHotelInfosResult'                             => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_GetHotelInfosResult',
        'WSCRSHo_TAGetBlank'                                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAGetBlank',
        'WSCRSHo_TAGetBlankResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAGetBlankResponse',
        'cTravelAgentInfos'                                       => 'Gueststream\\PMS\\IQWare\\API\\cTravelAgentInfos',
        'cTravelAgentAccount'                                     => 'Gueststream\\PMS\\IQWare\\API\\cTravelAgentAccount',
        'cTAAddresses'                                            => 'Gueststream\\PMS\\IQWare\\API\\cTAAddresses',
        'cBankAddress'                                            => 'Gueststream\\PMS\\IQWare\\API\\cBankAddress',
        'WSCRSHo_TASearch'                                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TASearch',
        'WSCRSHo_TASearchResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TASearchResponse',
        'WSCRSHo_TASearchResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TASearchResult',
        'WSCRSHo_TAGet'                                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAGet',
        'WSCRSHo_TAGetResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAGetResponse',
        'WSCRSHo_TAAdd'                                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAAdd',
        'WSCRSHo_TAAddResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAAddResponse',
        'WSCRSHo_TAModify'                                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAModify',
        'WSCRSHo_TAModifyResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_TAModifyResponse',
        'WSCRSHo_CompanyGetBlank'                                 => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyGetBlank',
        'WSCRSHo_CompanyGetBlankResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyGetBlankResponse',
        'cCompany'                                                => 'Gueststream\\PMS\\IQWare\\API\\cCompany',
        'cCpyProfile'                                             => 'Gueststream\\PMS\\IQWare\\API\\cCpyProfile',
        'cCpyAccount'                                             => 'Gueststream\\PMS\\IQWare\\API\\cCpyAccount',
        'WSCRSHo_CompanySearch'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanySearch',
        'WSCRSHo_CompanySearchResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanySearchResponse',
        'WSCRSHo_CompanySearchResult'                             => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanySearchResult',
        'WSCRSHo_CompanyGet'                                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyGet',
        'WSCRSHo_CompanyGetResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyGetResponse',
        'WSCRSHo_CompanyAdd'                                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyAdd',
        'WSCRSHo_CompanyAddResponse'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyAddResponse',
        'WSCRSHo_CompanyModify'                                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyModify',
        'WSCRSHo_CompanyModifyResponse'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_CompanyModifyResponse',
        'WSCRSHo_FitMemberGetBlankList'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberGetBlankList',
        'WSCRSHo_FitMemberGetBlankListResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberGetBlankListResponse',
        'cFitMemberList'                                          => 'Gueststream\\PMS\\IQWare\\API\\cFitMemberList',
        'ArrayOfCFitMember'                                       => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfCFitMember',
        'cFitMember'                                              => 'Gueststream\\PMS\\IQWare\\API\\cFitMember',
        'WSCRSHo_FitGetConfigList'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitGetConfigList',
        'WSCRSHo_FitGetConfigListResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitGetConfigListResponse',
        'WSCRSHo_FitGetConfigListResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitGetConfigListResult',
        'WSCRSHo_FitMemberSearch'                                 => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberSearch',
        'WSCRSHo_FitMemberSearchResponse'                         => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberSearchResponse',
        'WSCRSHo_FitMemberSearchResult'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberSearchResult',
        'WSCRSHo_FitMemberGetList'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberGetList',
        'WSCRSHo_FitMemberGetListResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberGetListResponse',
        'WSCRSHo_FitMemberListUpdate'                             => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberListUpdate',
        'WSCRSHo_FitMemberListUpdateResponse'                     => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_FitMemberListUpdateResponse',
        'WSCRSHo_InternalMemberGetCompanyNo'                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalMemberGetCompanyNo',
        'WSCRSHo_InternalMemberGetCompanyNoResponse'              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalMemberGetCompanyNoResponse',
        'WSCRSHo_MemberGetBlank'                                  => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberGetBlank',
        'WSCRSHo_MemberGetBlankResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberGetBlankResponse',
        'WSCRSHo_MemberSearch'                                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberSearch',
        'WSCRSHo_MemberSearchResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberSearchResponse',
        'WSCRSHo_MemberSearchResult'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberSearchResult',
        'WSCRSHo_MemberGet'                                       => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberGet',
        'WSCRSHo_MemberGetResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberGetResponse',
        'WSCRSHo_MemberAdd'                                       => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberAdd',
        'WSCRSHo_MemberAddResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberAddResponse',
        'WSCRSHo_MemberModify'                                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberModify',
        'WSCRSHo_MemberModifyResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberModifyResponse',
        'WSCRSHo_MemberResolveLinks'                              => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberResolveLinks',
        'WSCRSHo_MemberResolveLinksResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_MemberResolveLinksResponse',
        'WSCRSHo_InternalCompanyImport'                           => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalCompanyImport',
        'WSCRSHo_InternalCompanyImportResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalCompanyImportResponse',
        'WSCRSHo_InternalCompanyImportResult'                     => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalCompanyImportResult',
        'WSCRSHo_InternalMemberImport'                            => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalMemberImport',
        'WSCRSHo_InternalMemberImportResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalMemberImportResponse',
        'WSCRSHo_InternalMemberImportResult'                      => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalMemberImportResult',
        'WSCRSHo_InternalTAImport'                                => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalTAImport',
        'WSCRSHo_InternalTAImportResponse'                        => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalTAImportResponse',
        'WSCRSHo_InternalTAImportResult'                          => 'Gueststream\\PMS\\IQWare\\API\\WSCRSHo_InternalTAImportResult',
        'getHotelInfosAll'                                        => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfosAll',
        'getHotelInfosAllResponse'                                => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfosAllResponse',
        'getHotelInfosAllResult'                                  => 'Gueststream\\PMS\\IQWare\\API\\getHotelInfosAllResult',
        'getRates'                                                => 'Gueststream\\PMS\\IQWare\\API\\getRates',
        'getRatesResponse'                                        => 'Gueststream\\PMS\\IQWare\\API\\getRatesResponse',
        'getRatesResult'                                          => 'Gueststream\\PMS\\IQWare\\API\\getRatesResult',
        'GetPoolStatistics'                                       => 'Gueststream\\PMS\\IQWare\\API\\GetPoolStatistics',
        'GetPoolStatisticsResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\GetPoolStatisticsResponse',
        'PoolStatistics'                                          => 'Gueststream\\PMS\\IQWare\\API\\PoolStatistics',
        'getRateRooms'                                            => 'Gueststream\\PMS\\IQWare\\API\\getRateRooms',
        'getRateRoomsResponse'                                    => 'Gueststream\\PMS\\IQWare\\API\\getRateRoomsResponse',
        'ArrayOfStayValue'                                        => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfStayValue',
        'StayValue'                                               => 'Gueststream\\PMS\\IQWare\\API\\StayValue',
        'ArrayOfStayDailyValue'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfStayDailyValue',
        'StayDailyValue'                                          => 'Gueststream\\PMS\\IQWare\\API\\StayDailyValue',
        'getRateRoomsBackToBack'                                  => 'Gueststream\\PMS\\IQWare\\API\\getRateRoomsBackToBack',
        'getRateRoomsBackToBackResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\getRateRoomsBackToBackResponse',
        'GetRatesAndRoomsPricesByUnitNumber'                      => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesByUnitNumber',
        'GetRatesAndRoomsPricesByUnitNumberResponse'              => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesByUnitNumberResponse',
        'GetRatesAndRoomsPrices'                                  => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPrices',
        'GetRatesAndRoomsPricesResponse'                          => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesResponse',
        'BeachChairGetConfiguration'                              => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetConfiguration',
        'BeachChairGetConfigurationResponse'                      => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetConfigurationResponse',
        'BeachChairConfig'                                        => 'Gueststream\\PMS\\IQWare\\API\\BeachChairConfig',
        'BeachChairGetAvailBookingSite'                           => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetAvailBookingSite',
        'BeachChairGetAvailBookingSiteResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetAvailBookingSiteResponse',
        'AvailBookingSites'                                       => 'Gueststream\\PMS\\IQWare\\API\\AvailBookingSites',
        'ArrayOfActivityUnitAvail'                                => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfActivityUnitAvail',
        'ActivityUnitAvail'                                       => 'Gueststream\\PMS\\IQWare\\API\\ActivityUnitAvail',
        'BeachChairGetSingleStayValue'                            => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetSingleStayValue',
        'ArrayOfElements'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfElements',
        'Elements'                                                => 'Gueststream\\PMS\\IQWare\\API\\Elements',
        'ArrayOfActivityUnit'                                     => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfActivityUnit',
        'ActivityUnit'                                            => 'Gueststream\\PMS\\IQWare\\API\\ActivityUnit',
        'BeachChairGetSingleStayValueResponse'                    => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetSingleStayValueResponse',
        'BeachChairSBDSummary'                                    => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSBDSummary',
        'BeachChairSaveReservation'                               => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservation',
        'BeachChairSaveReservationResponse'                       => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservationResponse',
        'BeachChairSaveReservationResult'                         => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservationResult',
        'BeachChairSaveReservationWithCardProcessed'              => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservationWithCardProcessed',
        'BeachChairSaveReservationWithCardProcessedResponse'      => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservationWithCardProcessedResponse',
        'BeachChairSaveReservationWithCardProcessedResult'        => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSaveReservationWithCardProcessedResult',
        'GetBeachChairAllSite'                                    => 'Gueststream\\PMS\\IQWare\\API\\GetBeachChairAllSite',
        'GetBeachChairAllSiteResponse'                            => 'Gueststream\\PMS\\IQWare\\API\\GetBeachChairAllSiteResponse',
        'ArrayOfBeachChairSite'                                   => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfBeachChairSite',
        'BeachChairSite'                                          => 'Gueststream\\PMS\\IQWare\\API\\BeachChairSite',
        'BeachChairGetAvailElementsSitesForStay'                  => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetAvailElementsSitesForStay',
        'BeachChairGetAvailElementsSitesForStayResponse'          => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetAvailElementsSitesForStayResponse',
        'BeachChairGetAvailElementsSitesForStayResult'            => 'Gueststream\\PMS\\IQWare\\API\\BeachChairGetAvailElementsSitesForStayResult',
        'GetUnitReservations'                                     => 'Gueststream\\PMS\\IQWare\\API\\GetUnitReservations',
        'GetUnitReservationsResponse'                             => 'Gueststream\\PMS\\IQWare\\API\\GetUnitReservationsResponse',
        'ArrayOfUnitReservation'                                  => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfUnitReservation',
        'UnitReservation'                                         => 'Gueststream\\PMS\\IQWare\\API\\UnitReservation',
        'GetUnitStatements'                                       => 'Gueststream\\PMS\\IQWare\\API\\GetUnitStatements',
        'GetUnitStatementsResponse'                               => 'Gueststream\\PMS\\IQWare\\API\\GetUnitStatementsResponse',
        'GeneratedStatementsList'                                 => 'Gueststream\\PMS\\IQWare\\API\\GeneratedStatementsList',
        'ArrayOfDateTime'                                         => 'Gueststream\\PMS\\IQWare\\API\\ArrayOfDateTime',
        'GetAvailRates'                                           => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRates',
        'GetAvailRatesResponse'                                   => 'Gueststream\\PMS\\IQWare\\API\\GetAvailRatesResponse',
        'GetRatesAndRoomsPricesClusters'                          => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesClusters',
        'GetRatesAndRoomsPricesClustersResponse'                  => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesClustersResponse',
        'GetRatesAndRoomsPricesBackToBack'                        => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesBackToBack',
        'GetRatesAndRoomsPricesBackToBackResponse'                => 'Gueststream\\PMS\\IQWare\\API\\GetRatesAndRoomsPricesBackToBackResponse',
        'UpdateAdvanceDepositNbrOfDays'                           => 'Gueststream\\PMS\\IQWare\\API\\UpdateAdvanceDepositNbrOfDays',
        'UpdateAdvanceDepositNbrOfDaysResponse'                   => 'Gueststream\\PMS\\IQWare\\API\\UpdateAdvanceDepositNbrOfDaysResponse',
        'GetUnfilteredRatesAndRoomsPrices'                        => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPrices',
        'GetUnfilteredRatesAndRoomsPricesResponse'                => 'Gueststream\\PMS\\IQWare\\API\\GetUnfilteredRatesAndRoomsPricesResponse',
        'DataTable'                                               => 'Gueststream\\PMS\\IQWare\\API\\DataTable',
        'OwnerReservationsDataTable'                              => 'Gueststream\\PMS\\IQWare\\API\\OwnerReservationsDataTable',
        'ProtobasePostResult'                                     => 'Gueststream\\PMS\\IQWare\\API\\ProtobasePostResult',
        'StringArray'                                             => 'Gueststream\\PMS\\IQWare\\API\\StringArray',
    ];

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl, array $options = [ ])
    {

        foreach (self::$classmap as $key => $value) {
            if (! isset( $options['classmap'][ $key ] )) {
                $options['classmap'][ $key ] = $value;
            }
        }

        $options = array_merge([
            'features' => 1,
        ], $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param WebRes_GetOwnerRoomAvailability $parameters
     *
     * @return WebRes_GetOwnerRoomAvailabilityResponse
     */
    public function WebRes_GetOwnerRoomAvailability(WebRes_GetOwnerRoomAvailability $parameters)
    {
        return $this->__soapCall('WebRes_GetOwnerRoomAvailability', [ $parameters ]);
    }

    /**
     * @param WebRes_GetOwnerPdf $parameters
     *
     * @return WebRes_GetOwnerPdfResponse
     */
    public function WebRes_GetOwnerPdf(WebRes_GetOwnerPdf $parameters)
    {
        return $this->__soapCall('WebRes_GetOwnerPdf', [ $parameters ]);
    }

    /**
     * Return list of invoices info for the specified ID_CondoOwner
     *
     * @param WebRes_GetCondoOwnerListOfInvoices $parameters
     *
     * @return WebRes_GetCondoOwnerListOfInvoicesResponse
     */
    public function WebRes_GetCondoOwnerListOfInvoices(WebRes_GetCondoOwnerListOfInvoices $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerListOfInvoices', [ $parameters ]);
    }

    /**
     * Return invoice info (including PDF stream) for a specific DocumentID
     *
     * @param WebRes_GetCondoOwnerInvoiceByID $parameters
     *
     * @return WebRes_GetCondoOwnerInvoiceByIDResponse
     */
    public function WebRes_GetCondoOwnerInvoiceByID(WebRes_GetCondoOwnerInvoiceByID $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerInvoiceByID', [ $parameters ]);
    }

    /**
     * New method with ID_CondoOwner
     *
     * @param WebRes_GetCondoMonthlyStats $parameters
     *
     * @return WebRes_GetCondoMonthlyStatsResponse
     */
    public function WebRes_GetCondoMonthlyStats(WebRes_GetCondoMonthlyStats $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoMonthlyStats', [ $parameters ]);
    }

    /**
     * Get the Web Condo configuration of the PMS
     *
     * @param WebRes_GetWebCondoConfig $parameters
     *
     * @return WebRes_GetWebCondoConfigResponse
     */
    public function WebRes_GetWebCondoConfig(WebRes_GetWebCondoConfig $parameters)
    {
        return $this->__soapCall('WebRes_GetWebCondoConfig', [ $parameters ]);
    }

    /**
     * Get the general Condo configuration of the PMS
     *
     * @param WebRes_GetCondoConfig $parameters
     *
     * @return WebRes_GetCondoConfigResponse
     */
    public function WebRes_GetCondoConfig(WebRes_GetCondoConfig $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoConfig', [ $parameters ]);
    }

    /**
     * Get the general webres configuration of the PMS
     *
     * @param WebRes_GetWebResConfig $parameters
     *
     * @return WebRes_GetWebResConfigResponse
     */
    public function WebRes_GetWebResConfig(WebRes_GetWebResConfig $parameters)
    {
        return $this->__soapCall('WebRes_GetWebResConfig', [ $parameters ]);
    }

    /**
     * @param WebRes_ValidateOwnerReservation $parameters
     *
     * @return WebRes_ValidateOwnerReservationResponse
     */
    public function WebRes_ValidateOwnerReservation(WebRes_ValidateOwnerReservation $parameters)
    {
        return $this->__soapCall('WebRes_ValidateOwnerReservation', [ $parameters ]);
    }

    /**
     * @param WebRes_ValidateOwnerReservationRBO $parameters
     *
     * @return WebRes_ValidateOwnerReservationRBOResponse
     */
    public function WebRes_ValidateOwnerReservationRBO(WebRes_ValidateOwnerReservationRBO $parameters)
    {
        return $this->__soapCall('WebRes_ValidateOwnerReservationRBO', [ $parameters ]);
    }

    /**
     * @param WebRes_GetRatesAndPricesOwnerGuest $parameters
     *
     * @return WebRes_GetRatesAndPricesOwnerGuestResponse
     */
    public function WebRes_GetRatesAndPricesOwnerGuest(WebRes_GetRatesAndPricesOwnerGuest $parameters)
    {
        return $this->__soapCall('WebRes_GetRatesAndPricesOwnerGuest', [ $parameters ]);
    }

    /**
     * @param WebRes_GetResaStayValue $parameters
     *
     * @return WebRes_GetResaStayValueResponse
     */
    public function WebRes_GetResaStayValue(WebRes_GetResaStayValue $parameters)
    {
        return $this->__soapCall('WebRes_GetResaStayValue', [ $parameters ]);
    }

    /**
     * @param WebRes_UpdateTAAddress $parameters
     *
     * @return WebRes_UpdateTAAddressResponse
     */
    public function WebRes_UpdateTAAddress(WebRes_UpdateTAAddress $parameters)
    {
        return $this->__soapCall('WebRes_UpdateTAAddress', [ $parameters ]);
    }

    /**
     * @param WebRes_GetTravelAgent $parameters
     *
     * @return WebRes_GetTravelAgentResponse
     */
    public function WebRes_GetTravelAgent(WebRes_GetTravelAgent $parameters)
    {
        return $this->__soapCall('WebRes_GetTravelAgent', [ $parameters ]);
    }

    /**
     * @param WebRes_CreateTAAccount $parameters
     *
     * @return WebRes_CreateTAAccountResponse
     */
    public function WebRes_CreateTAAccount(WebRes_CreateTAAccount $parameters)
    {
        return $this->__soapCall('WebRes_CreateTAAccount', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupInfosByGroupStringID $parameters
     *
     * @return WebRes_GetGroupInfosByGroupStringIDResponse
     */
    public function WebRes_GetGroupInfosByGroupStringID(WebRes_GetGroupInfosByGroupStringID $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupInfosByGroupStringID', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupInfos $parameters
     *
     * @return WebRes_GetGroupInfosResponse
     */
    public function WebRes_GetGroupInfos(WebRes_GetGroupInfos $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_IsGroupHasPrivatePricingGrid $parameters
     *
     * @return WebRes_IsGroupHasPrivatePricingGridResponse
     */
    public function WebRes_IsGroupHasPrivatePricingGrid(WebRes_IsGroupHasPrivatePricingGrid $parameters)
    {
        return $this->__soapCall('WebRes_IsGroupHasPrivatePricingGrid', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupBlocAvailability $parameters
     *
     * @return WebRes_GetGroupBlocAvailabilityResponse
     */
    public function WebRes_GetGroupBlocAvailability(WebRes_GetGroupBlocAvailability $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupBlocAvailability', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupAvailabilityAndPricing $parameters
     *
     * @return WebRes_GetGroupAvailabilityAndPricingResponse
     */
    public function WebRes_GetGroupAvailabilityAndPricing(WebRes_GetGroupAvailabilityAndPricing $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupAvailabilityAndPricing', [ $parameters ]);
    }

    /**
     * @param WebRes_GetResaStayValueWebRes $parameters
     *
     * @return WebRes_GetResaStayValueWebResResponse
     */
    public function WebRes_GetResaStayValueWebRes(WebRes_GetResaStayValueWebRes $parameters)
    {
        return $this->__soapCall('WebRes_GetResaStayValueWebRes', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupRegularPricing $parameters
     *
     * @return WebRes_GetGroupRegularPricingResponse
     */
    public function WebRes_GetGroupRegularPricing(WebRes_GetGroupRegularPricing $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupRegularPricing', [ $parameters ]);
    }

    /**
     * @param WebRes_GetGroupPrivatePricing $parameters
     *
     * @return WebRes_GetGroupPrivatePricingResponse
     */
    public function WebRes_GetGroupPrivatePricing(WebRes_GetGroupPrivatePricing $parameters)
    {
        return $this->__soapCall('WebRes_GetGroupPrivatePricing', [ $parameters ]);
    }

    /**
     * @param WebRes_GetHotelAvailabilityArray $parameters
     *
     * @return WebRes_GetHotelAvailabilityArrayResponse
     */
    public function WebRes_GetHotelAvailabilityArray(WebRes_GetHotelAvailabilityArray $parameters)
    {
        return $this->__soapCall('WebRes_GetHotelAvailabilityArray', [ $parameters ]);
    }

    /**
     * @param WebRes_getRateStayValueWebRes $parameters
     *
     * @return WebRes_getRateStayValueWebResResponse
     */
    public function WebRes_getRateStayValueWebRes(WebRes_getRateStayValueWebRes $parameters)
    {
        return $this->__soapCall('WebRes_getRateStayValueWebRes', [ $parameters ]);
    }

    /**
     * Use by WebRes and other modules to fill the prices from the availability(getRatesAndRooms and other webmethod using dstRatesAndRooms Dataset. The dstRatesAndRooms is passed by reference to fill the dtMaster table to add the total stay pricing and the webmethod create also the dtDailyBreakdown table to add the daily totals. Parameter definitions : dstRatesAndRooms : dataset that contains the availability tables passed to fill the prices(dtMaster and dtDailyBreakdown)  ; intRate, intRoomType : pass -1 to fill all rate/roomtype combination(use by webres) or specify the rateID or roomtypeid to fill only
     *
     * @param WebRes_FillPrices $parameters
     *
     * @return WebRes_FillPricesResponse
     */
    public function WebRes_FillPrices(WebRes_FillPrices $parameters)
    {
        return $this->__soapCall('WebRes_FillPrices', [ $parameters ]);
    }

    /**
     * @param WebRes_getFormattedPrice $parameters
     *
     * @return WebRes_getFormattedPriceResponse
     */
    public function WebRes_getFormattedPrice(WebRes_getFormattedPrice $parameters)
    {
        return $this->__soapCall('WebRes_getFormattedPrice', [ $parameters ]);
    }

    /**
     * @param GetAvailRatesAndRoomNumbersB2BAnywhere $parameters
     *
     * @return GetAvailRatesAndRoomNumbersB2BAnywhereResponse
     */
    public function GetAvailRatesAndRoomNumbersB2BAnywhere(GetAvailRatesAndRoomNumbersB2BAnywhere $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomNumbersB2BAnywhere', [ $parameters ]);
    }

    /**
     * @param GetAvailRatesAndRoomNumbersB2BAnywhereNew $parameters
     *
     * @return GetAvailRatesAndRoomNumbersB2BAnywhereNewResponse
     */
    public function GetAvailRatesAndRoomNumbersB2BAnywhereNew(GetAvailRatesAndRoomNumbersB2BAnywhereNew $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomNumbersB2BAnywhereNew', [ $parameters ]);
    }

    /**
     * @param WebRes_GetSingleStayValue $parameters
     *
     * @return WebRes_GetSingleStayValueResponse
     */
    public function WebRes_GetSingleStayValue(WebRes_GetSingleStayValue $parameters)
    {
        return $this->__soapCall('WebRes_GetSingleStayValue', [ $parameters ]);
    }

    /**
     * @param WebRes_GetSbdItemsPricing $parameters
     *
     * @return WebRes_GetSbdItemsPricingResponse
     */
    public function WebRes_GetSbdItemsPricing(WebRes_GetSbdItemsPricing $parameters)
    {
        return $this->__soapCall('WebRes_GetSbdItemsPricing', [ $parameters ]);
    }

    /**
     * @param WebRes_getAccountAddresses $parameters
     *
     * @return WebRes_getAccountAddressesResponse
     */
    public function WebRes_getAccountAddresses(WebRes_getAccountAddresses $parameters)
    {
        return $this->__soapCall('WebRes_getAccountAddresses', [ $parameters ]);
    }

    /**
     * @param WebRes_getCreditCardType $parameters
     *
     * @return WebRes_getCreditCardTypeResponse
     */
    public function WebRes_getCreditCardType(WebRes_getCreditCardType $parameters)
    {
        return $this->__soapCall('WebRes_getCreditCardType', [ $parameters ]);
    }

    /**
     * Parameter XMLOwnerAddresses : &lt;OwnerAddresses&gt;
     *                &lt;Profile&gt;
     *                   &lt;ID_Address&gt;520&lt;/ID_Address&gt;
     *                   &lt;Dear&gt;1&lt;/Dear&gt;
     *                   &lt;Address1&gt;Monica Bohn1&lt;/Address1&gt;
     *                   &lt;Address2&gt;7626 Heaven Estates Way&lt;/Address2&gt;
     *                   &lt;FirstName&gt;Matthew&lt;/FirstName&gt;
     *                   &lt;LastName&gt;&lt;/LastName&gt;
     *                   &lt;City&gt;Louisville1&lt;/City&gt;
     *                   &lt;State&gt;BC11&lt;/State&gt;
     *                   &lt;Country&gt;Canada1&lt;/Country&gt;
     *                   &lt;ZipCode&gt;12345&lt;/ZipCode&gt;
     *                   &lt;WebSiteURL&gt;gt1@gt.com&lt;/WebSiteURL&gt;
     *                   &lt;Email&gt;jflalande@iqwareinc.com&lt;/Email&gt;
     *                   &lt;IsMailing&gt;false&lt;/IsMailing&gt;
     *                   &lt;OtherCieName&gt;Microsoft&lt;/OtherCieName&gt;
     *                   &lt;ConfirmBy&gt;0&lt;/ConfirmBy&gt;
     *                   &lt;ProfileTelephones&gt;
     *                      &lt;PhoneID&gt;0&lt;/PhoneID&gt;
     *                      &lt;PhoneType&gt;0&lt;/PhoneType&gt;
     *                      &lt;PhoneNo&gt;111&lt;/PhoneNo&gt;
     *                   &lt;/ProfileTelephones&gt;
     *                   &lt;ProfileTelephones&gt;
     *                      &lt;PhoneID&gt;1&lt;/PhoneID&gt;
     *                      &lt;PhoneType&gt;2&lt;/PhoneType&gt;
     *                      &lt;PhoneNo&gt;222&lt;/PhoneNo&gt;
     *                   &lt;/ProfileTelephones&gt;
     *                   &lt;ProfileTelephones&gt;
     *                      &lt;PhoneID&gt;2&lt;/PhoneID&gt;
     *                      &lt;PhoneType&gt;5&lt;/PhoneType&gt;
     *                      &lt;PhoneNo&gt;333&lt;/PhoneNo&gt;
     *                   &lt;/ProfileTelephones&gt;
     *                &lt;/Profile&gt;
     *             &lt;/OwnerAddresses&gt;
     *
     * @param WebRes_UpdateOwnerAddresses $parameters
     *
     * @return WebRes_UpdateOwnerAddressesResponse
     */
    public function WebRes_UpdateOwnerAddresses(WebRes_UpdateOwnerAddresses $parameters)
    {
        return $this->__soapCall('WebRes_UpdateOwnerAddresses', [ $parameters ]);
    }

    /**
     * @param GetSeasonalArrivalAndDepartureTime $parameters
     *
     * @return GetSeasonalArrivalAndDepartureTimeResponse
     */
    public function GetSeasonalArrivalAndDepartureTime(GetSeasonalArrivalAndDepartureTime $parameters)
    {
        return $this->__soapCall('GetSeasonalArrivalAndDepartureTime', [ $parameters ]);
    }

    /**
     * @param GetAllSeasonalArrivalAndDepartureTime $parameters
     *
     * @return GetAllSeasonalArrivalAndDepartureTimeResponse
     */
    public function GetAllSeasonalArrivalAndDepartureTime(GetAllSeasonalArrivalAndDepartureTime $parameters)
    {
        return $this->__soapCall('GetAllSeasonalArrivalAndDepartureTime', [ $parameters ]);
    }

    /**
     * @param WebRes_getAccountBalances $parameters
     *
     * @return WebRes_getAccountBalancesResponse
     */
    public function WebRes_getAccountBalances(WebRes_getAccountBalances $parameters)
    {
        return $this->__soapCall('WebRes_getAccountBalances', [ $parameters ]);
    }

    /**
     * @param WebRes_getResaList $parameters
     *
     * @return WebRes_getResaListResponse
     */
    public function WebRes_getResaList(WebRes_getResaList $parameters)
    {
        return $this->__soapCall('WebRes_getResaList', [ $parameters ]);
    }

    /**
     * @param WebRes_getAccountInfos $parameters
     *
     * @return WebRes_getAccountInfosResponse
     */
    public function WebRes_getAccountInfos(WebRes_getAccountInfos $parameters)
    {
        return $this->__soapCall('WebRes_getAccountInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_isAccPWValid $parameters
     *
     * @return WebRes_isAccPWValidResponse
     */
    public function WebRes_isAccPWValid(WebRes_isAccPWValid $parameters)
    {
        return $this->__soapCall('WebRes_isAccPWValid', [ $parameters ]);
    }

    /**
     * @param WebRes_updateAccountAddresses $parameters
     *
     * @return WebRes_updateAccountAddressesResponse
     */
    public function WebRes_updateAccountAddresses(WebRes_updateAccountAddresses $parameters)
    {
        return $this->__soapCall('WebRes_updateAccountAddresses', [ $parameters ]);
    }

    /**
     * @param WebRes_updateAccountInfos $parameters
     *
     * @return WebRes_updateAccountInfosResponse
     */
    public function WebRes_updateAccountInfos(WebRes_updateAccountInfos $parameters)
    {
        return $this->__soapCall('WebRes_updateAccountInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_getGHStats $parameters
     *
     * @return WebRes_getGHStatsResponse
     */
    public function WebRes_getGHStats(WebRes_getGHStats $parameters)
    {
        return $this->__soapCall('WebRes_getGHStats', [ $parameters ]);
    }

    /**
     * @param WebRes_getMemInfos $parameters
     *
     * @return WebRes_getMemInfosResponse
     */
    public function WebRes_getMemInfos(WebRes_getMemInfos $parameters)
    {
        return $this->__soapCall('WebRes_getMemInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_getServicesCharges $parameters
     *
     * @return WebRes_getServicesChargesResponse
     */
    public function WebRes_getServicesCharges(WebRes_getServicesCharges $parameters)
    {
        return $this->__soapCall('WebRes_getServicesCharges', [ $parameters ]);
    }

    /**
     * @param WebRes_SaveReservationBackToBack $parameters
     *
     * @return WebRes_SaveReservationBackToBackResponse
     */
    public function WebRes_SaveReservationBackToBack(WebRes_SaveReservationBackToBack $parameters)
    {
        return $this->__soapCall('WebRes_SaveReservationBackToBack', [ $parameters ]);
    }

    /**
     * @param WebRes_SaveReservation $parameters
     *
     * @return WebRes_SaveReservationResponse
     */
    public function WebRes_SaveReservation(WebRes_SaveReservation $parameters)
    {
        return $this->__soapCall('WebRes_SaveReservation', [ $parameters ]);
    }

    /**
     * @param WebRes_SaveReservationForRBO $parameters
     *
     * @return WebRes_SaveReservationForRBOResponse
     */
    public function WebRes_SaveReservationForRBO(WebRes_SaveReservationForRBO $parameters)
    {
        return $this->__soapCall('WebRes_SaveReservationForRBO', [ $parameters ]);
    }

    /**
     * @param MemberModifyBasic $parameters
     *
     * @return MemberModifyBasicResponse
     */
    public function MemberModifyBasic(MemberModifyBasic $parameters)
    {
        return $this->__soapCall('MemberModifyBasic', [ $parameters ]);
    }

    /**
     * @param MemberGetReservations $parameters
     *
     * @return MemberGetReservationsResponse
     */
    public function MemberGetReservations(MemberGetReservations $parameters)
    {
        return $this->__soapCall('MemberGetReservations', [ $parameters ]);
    }

    /**
     * @param MemberGet $parameters
     *
     * @return MemberGetResponse
     */
    public function MemberGet(MemberGet $parameters)
    {
        return $this->__soapCall('MemberGet', [ $parameters ]);
    }

    /**
     * @param MemberAdd $parameters
     *
     * @return MemberAddResponse
     */
    public function MemberAdd(MemberAdd $parameters)
    {
        return $this->__soapCall('MemberAdd', [ $parameters ]);
    }

    /**
     * @param MemberAddBasic $parameters
     *
     * @return MemberAddBasicResponse
     */
    public function MemberAddBasic(MemberAddBasic $parameters)
    {
        return $this->__soapCall('MemberAddBasic', [ $parameters ]);
    }

    /**
     * Validate login and password for a member. Return member's AccountNo.
     *
     * @param MemberValidateLoginAndPassword $parameters
     *
     * @return MemberValidateLoginAndPasswordResponse
     */
    public function MemberValidateLoginAndPassword(MemberValidateLoginAndPassword $parameters)
    {
        return $this->__soapCall('MemberValidateLoginAndPassword', [ $parameters ]);
    }

    /**
     * @param BeginChangePassword $parameters
     *
     * @return BeginChangePasswordResponse
     */
    public function BeginChangePassword(BeginChangePassword $parameters)
    {
        return $this->__soapCall('BeginChangePassword', [ $parameters ]);
    }

    /**
     * @param ChangePassword $parameters
     *
     * @return ChangePasswordResponse
     */
    public function ChangePassword(ChangePassword $parameters)
    {
        return $this->__soapCall('ChangePassword', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberGetBlank $parameters
     *
     * @return WSCRSHo_ClubMemberGetBlankResponse
     */
    public function WSCRSHo_ClubMemberGetBlank(WSCRSHo_ClubMemberGetBlank $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberGetBlank', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberSearch $parameters
     *
     * @return WSCRSHo_ClubMemberSearchResponse
     */
    public function WSCRSHo_ClubMemberSearch(WSCRSHo_ClubMemberSearch $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberSearch', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberGet $parameters
     *
     * @return WSCRSHo_ClubMemberGetResponse
     */
    public function WSCRSHo_ClubMemberGet(WSCRSHo_ClubMemberGet $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberGet', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberAdd $parameters
     *
     * @return WSCRSHo_ClubMemberAddResponse
     */
    public function WSCRSHo_ClubMemberAdd(WSCRSHo_ClubMemberAdd $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberAdd', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberModify $parameters
     *
     * @return WSCRSHo_ClubMemberModifyResponse
     */
    public function WSCRSHo_ClubMemberModify(WSCRSHo_ClubMemberModify $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberModify', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubMemberAdjustPoints $parameters
     *
     * @return WSCRSHo_ClubMemberAdjustPointsResponse
     */
    public function WSCRSHo_ClubMemberAdjustPoints(WSCRSHo_ClubMemberAdjustPoints $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubMemberAdjustPoints', [ $parameters ]);
    }

    /**
     * @param PMSResaGet $parameters
     *
     * @return PMSResaGetResponse
     */
    public function PMSResaGet(PMSResaGet $parameters)
    {
        return $this->__soapCall('PMSResaGet', [ $parameters ]);
    }

    /**
     * @param PMSResaSearch $parameters
     *
     * @return PMSResaSearchResponse
     */
    public function PMSResaSearch(PMSResaSearch $parameters)
    {
        return $this->__soapCall('PMSResaSearch', [ $parameters ]);
    }

    /**
     * @param PMSResaGetNew $parameters
     *
     * @return PMSResaGetNewResponse
     */
    public function PMSResaGetNew(PMSResaGetNew $parameters)
    {
        return $this->__soapCall('PMSResaGetNew', [ $parameters ]);
    }

    /**
     * @param PMSResaCancel $parameters
     *
     * @return PMSResaCancelResponse
     */
    public function PMSResaCancel(PMSResaCancel $parameters)
    {
        return $this->__soapCall('PMSResaCancel', [ $parameters ]);
    }

    /**
     * @param PMSResaAdd $parameters
     *
     * @return PMSResaAddResponse
     */
    public function PMSResaAdd(PMSResaAdd $parameters)
    {
        return $this->__soapCall('PMSResaAdd', [ $parameters ]);
    }

    /**
     * @param PMSResaModify $parameters
     *
     * @return PMSResaModifyResponse
     */
    public function PMSResaModify(PMSResaModify $parameters)
    {
        return $this->__soapCall('PMSResaModify', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubGetList $parameters
     *
     * @return WSCRSHo_ClubGetListResponse
     */
    public function WSCRSHo_ClubGetList(WSCRSHo_ClubGetList $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubGetList', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_ClubGetNextCardNumber $parameters
     *
     * @return WSCRSHo_ClubGetNextCardNumberResponse
     */
    public function WSCRSHo_ClubGetNextCardNumber(WSCRSHo_ClubGetNextCardNumber $parameters)
    {
        return $this->__soapCall('WSCRSHo_ClubGetNextCardNumber', [ $parameters ]);
    }

    /**
     * @param getRateElements $parameters
     *
     * @return getRateElementsResponse
     */
    public function getRateElements(getRateElements $parameters)
    {
        return $this->__soapCall('getRateElements', [ $parameters ]);
    }

    /**
     * @param getElementAgeCatDetail $parameters
     *
     * @return getElementAgeCatDetailResponse
     */
    public function getElementAgeCatDetail(getElementAgeCatDetail $parameters)
    {
        return $this->__soapCall('getElementAgeCatDetail', [ $parameters ]);
    }

    /**
     * @param getElementsAgesCategories $parameters
     *
     * @return getElementsAgesCategoriesResponse
     */
    public function getElementsAgesCategories(getElementsAgesCategories $parameters)
    {
        return $this->__soapCall('getElementsAgesCategories', [ $parameters ]);
    }

    /**
     * @param getAvailElementsForStay $parameters
     *
     * @return getAvailElementsForStayResponse
     */
    public function getAvailElementsForStay(getAvailElementsForStay $parameters)
    {
        return $this->__soapCall('getAvailElementsForStay', [ $parameters ]);
    }

    /**
     * Faster evaluation
     *
     * @param GetAvailRatesAndRoomsConfig $parameters
     *
     * @return GetAvailRatesAndRoomsConfigResponse
     */
    public function GetAvailRatesAndRoomsConfig(GetAvailRatesAndRoomsConfig $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomsConfig', [ $parameters ]);
    }

    /**
     * Faster evaluation
     *
     * @param GetAvailRatesAndRoomsConfigNoEval $parameters
     *
     * @return GetAvailRatesAndRoomsConfigNoEvalResponse
     */
    public function GetAvailRatesAndRoomsConfigNoEval(GetAvailRatesAndRoomsConfigNoEval $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomsConfigNoEval', [ $parameters ]);
    }

    /**
     * @param GetPropertyYieldConfig $parameters
     *
     * @return GetPropertyYieldConfigResponse
     */
    public function GetPropertyYieldConfig(GetPropertyYieldConfig $parameters)
    {
        return $this->__soapCall('GetPropertyYieldConfig', [ $parameters ]);
    }

    /**
     * @param FormatPhoneNumber $parameters
     *
     * @return FormatPhoneNumberResponse
     */
    public function FormatPhoneNumber(FormatPhoneNumber $parameters)
    {
        return $this->__soapCall('FormatPhoneNumber', [ $parameters ]);
    }

    /**
     * @param SaveIncentiveGiftCertificate $parameters
     *
     * @return SaveIncentiveGiftCertificateResponse
     */
    public function SaveIncentiveGiftCertificate(SaveIncentiveGiftCertificate $parameters)
    {
        return $this->__soapCall('SaveIncentiveGiftCertificate', [ $parameters ]);
    }

    /**
     * @param SaveGiftCertificate $parameters
     *
     * @return SaveGiftCertificateResponse
     */
    public function SaveGiftCertificate(SaveGiftCertificate $parameters)
    {
        return $this->__soapCall('SaveGiftCertificate', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservation $parameters
     *
     * @return SaveReservationResponse
     */
    public function SaveReservation(SaveReservation $parameters)
    {
        return $this->__soapCall('SaveReservation', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationFromGDS $parameters
     *
     * @return SaveReservationFromGDSResponse
     */
    public function SaveReservationFromGDS(SaveReservationFromGDS $parameters)
    {
        return $this->__soapCall('SaveReservationFromGDS', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days for one room
     *
     * @param GetSingleUnitStayValueBackToBack $parameters
     *
     * @return GetSingleUnitStayValueBackToBackResponse
     */
    public function GetSingleUnitStayValueBackToBack(GetSingleUnitStayValueBackToBack $parameters)
    {
        return $this->__soapCall('GetSingleUnitStayValueBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithManualRates $parameters
     *
     * @return SaveReservationWithManualRatesResponse
     */
    public function SaveReservationWithManualRates(SaveReservationWithManualRates $parameters)
    {
        return $this->__soapCall('SaveReservationWithManualRates', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param UpdateReservation $parameters
     *
     * @return UpdateReservationResponse
     */
    public function UpdateReservation(UpdateReservation $parameters)
    {
        return $this->__soapCall('UpdateReservation', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationBackToBack $parameters
     *
     * @return SaveReservationBackToBackResponse
     */
    public function SaveReservationBackToBack(SaveReservationBackToBack $parameters)
    {
        return $this->__soapCall('SaveReservationBackToBack', [ $parameters ]);
    }

    /**
     * @param GetRequiredDepositForAccountNo $parameters
     *
     * @return GetRequiredDepositForAccountNoResponse
     */
    public function GetRequiredDepositForAccountNo(GetRequiredDepositForAccountNo $parameters)
    {
        return $this->__soapCall('GetRequiredDepositForAccountNo', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithCardProcessed $parameters
     *
     * @return SaveReservationWithCardProcessedResponse
     */
    public function SaveReservationWithCardProcessed(SaveReservationWithCardProcessed $parameters)
    {
        return $this->__soapCall('SaveReservationWithCardProcessed', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithECheckProcessed $parameters
     *
     * @return SaveReservationWithECheckProcessedResponse
     */
    public function SaveReservationWithECheckProcessed(SaveReservationWithECheckProcessed $parameters)
    {
        return $this->__soapCall('SaveReservationWithECheckProcessed', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithCardProcessedRBO $parameters
     *
     * @return SaveReservationWithCardProcessedRBOResponse
     */
    public function SaveReservationWithCardProcessedRBO(SaveReservationWithCardProcessedRBO $parameters)
    {
        return $this->__soapCall('SaveReservationWithCardProcessedRBO', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithECheckProcessedRBO $parameters
     *
     * @return SaveReservationWithECheckProcessedRBOResponse
     */
    public function SaveReservationWithECheckProcessedRBO(SaveReservationWithECheckProcessedRBO $parameters)
    {
        return $this->__soapCall('SaveReservationWithECheckProcessedRBO', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithCardProcessedBackToBack $parameters
     *
     * @return SaveReservationWithCardProcessedBackToBackResponse
     */
    public function SaveReservationWithCardProcessedBackToBack(
        SaveReservationWithCardProcessedBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithCardProcessedBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithECheckProcessedBackToBack $parameters
     *
     * @return SaveReservationWithECheckProcessedBackToBackResponse
     */
    public function SaveReservationWithECheckProcessedBackToBack(
        SaveReservationWithECheckProcessedBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithECheckProcessedBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithCardProcessedRBOBackToBack $parameters
     *
     * @return SaveReservationWithCardProcessedRBOBackToBackResponse
     */
    public function SaveReservationWithCardProcessedRBOBackToBack(
        SaveReservationWithCardProcessedRBOBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithCardProcessedRBOBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithECheckProcessedRBOBackToBack $parameters
     *
     * @return SaveReservationWithECheckProcessedRBOBackToBackResponse
     */
    public function SaveReservationWithECheckProcessedRBOBackToBack(
        SaveReservationWithECheckProcessedRBOBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithECheckProcessedRBOBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithPaypalProcessed $parameters
     *
     * @return SaveReservationWithPaypalProcessedResponse
     */
    public function SaveReservationWithPaypalProcessed(SaveReservationWithPaypalProcessed $parameters)
    {
        return $this->__soapCall('SaveReservationWithPaypalProcessed', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithPaypalProcessedBackToBack $parameters
     *
     * @return SaveReservationWithPaypalProcessedBackToBackResponse
     */
    public function SaveReservationWithPaypalProcessedBackToBack(
        SaveReservationWithPaypalProcessedBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithPaypalProcessedBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithPaypalProcessedRBO $parameters
     *
     * @return SaveReservationWithPaypalProcessedRBOResponse
     */
    public function SaveReservationWithPaypalProcessedRBO(SaveReservationWithPaypalProcessedRBO $parameters)
    {
        return $this->__soapCall('SaveReservationWithPaypalProcessedRBO', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param SaveReservationWithPaypalProcessedRBOBackToBack $parameters
     *
     * @return SaveReservationWithPaypalProcessedRBOBackToBackResponse
     */
    public function SaveReservationWithPaypalProcessedRBOBackToBack(
        SaveReservationWithPaypalProcessedRBOBackToBack $parameters
    ) {
        return $this->__soapCall('SaveReservationWithPaypalProcessedRBOBackToBack', [ $parameters ]);
    }

    /**
     * Verify if the module is activated for security purpose
     *
     * @param WebRes_VHCheck $parameters
     *
     * @return WebRes_VHCheckResponse
     */
    public function WebRes_VHCheck(WebRes_VHCheck $parameters)
    {
        return $this->__soapCall('WebRes_VHCheck', [ $parameters ]);
    }

    /**
     * Use for all modules (WebRes, WebCondo, WebTA, WebGroup) ; Get required fileds for personnal page(p_PersonalInfo.aspx). See WebRes config and Advanced tabs
     *
     * @param WebRes_getRequiredFields $parameters
     *
     * @return WebRes_getRequiredFieldsResponse
     */
    public function WebRes_getRequiredFields(WebRes_getRequiredFields $parameters)
    {
        return $this->__soapCall('WebRes_getRequiredFields', [ $parameters ]);
    }

    /**
     * @param WebRes_translateActivities $parameters
     *
     * @return WebRes_translateActivitiesResponse
     */
    public function WebRes_translateActivities(WebRes_translateActivities $parameters)
    {
        return $this->__soapCall('WebRes_translateActivities', [ $parameters ]);
    }

    /**
     * @param WebRes_getActivityStructureString $parameters
     *
     * @return WebRes_getActivityStructureStringResponse
     */
    public function WebRes_getActivityStructureString(WebRes_getActivityStructureString $parameters)
    {
        return $this->__soapCall('WebRes_getActivityStructureString', [ $parameters ]);
    }

    /**
     * @param WebRes_getBookingPlaces $parameters
     *
     * @return WebRes_getBookingPlacesResponse
     */
    public function WebRes_getBookingPlaces(WebRes_getBookingPlaces $parameters)
    {
        return $this->__soapCall('WebRes_getBookingPlaces', [ $parameters ]);
    }

    /**
     * @param WebRes_GetAllMembers $parameters
     *
     * @return WebRes_GetAllMembersResponse
     */
    public function WebRes_GetAllMembers(WebRes_GetAllMembers $parameters)
    {
        return $this->__soapCall('WebRes_GetAllMembers', [ $parameters ]);
    }

    /**
     * @param WebRes_RetrieveForgottenPassword $parameters
     *
     * @return WebRes_RetrieveForgottenPasswordResponse
     */
    public function WebRes_RetrieveForgottenPassword(WebRes_RetrieveForgottenPassword $parameters)
    {
        return $this->__soapCall('WebRes_RetrieveForgottenPassword', [ $parameters ]);
    }

    /**
     * @param WebRes_GlobalAccessLogin $parameters
     *
     * @return WebRes_GlobalAccessLoginResponse
     */
    public function WebRes_GlobalAccessLogin(WebRes_GlobalAccessLogin $parameters)
    {
        return $this->__soapCall('WebRes_GlobalAccessLogin', [ $parameters ]);
    }

    /**
     * This method get the basic informations of the owner(exclude list of resa and work order) for speed up issues.  see GetCondoOwner for more infos on the problem. Basic infos now filled :  FillCondoOwnerTable, FillCondoOwnerContracts, FillCondoOwnerTemplates, FillCondoOwnerAddress, FillCondoOwnerTelephones, FillCondoOwnerBalances, FillContractExpenses.  To get the reservations you must call GetCondoOwnerReservations and for the work order GetCondoOwnerWorkOrder to fill individual contract when requested from client side
     *
     * @param WebRes_GetCondoOwnerBasicInfos $parameters
     *
     * @return WebRes_GetCondoOwnerBasicInfosResponse
     */
    public function WebRes_GetCondoOwnerBasicInfos(WebRes_GetCondoOwnerBasicInfos $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerBasicInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_GetCoOwnerDistributionPercentage $parameters
     *
     * @return WebRes_GetCoOwnerDistributionPercentageResponse
     */
    public function WebRes_GetCoOwnerDistributionPercentage(WebRes_GetCoOwnerDistributionPercentage $parameters)
    {
        return $this->__soapCall('WebRes_GetCoOwnerDistributionPercentage', [ $parameters ]);
    }

    /**
     * This method gets the informations of the owner. A DataSet is return with a series of table : FillCondoOwnerTable, FillCondoOwnerContracts, FillCondoOwnerTemplates, FillCondoOwnerAddress, FillCondoOwnerTelephones, FillCondoOwnerBalances, FillCondoOwnerReservations  FillContractExpenses, FillWorkOrder.  A new WebMethod have been introduced on 30 jan 2009 to skip the reservation listing and work order on the initial login/load.  It was to long for Lvb where a owner has 195 contracts(3 min+, when skip less than 15 sec). We creates new WebMethod called GetCondoOwnerBasicInfos(excludes resa list and wo),  a GetCondoOwnerReservations and GetCondoOwnerWO. You can still use this one if the initial load is not critical.
     *
     * @param WebRes_GetCondoOwnerAdminReservations $parameters
     *
     * @return WebRes_GetCondoOwnerAdminReservationsResponse
     */
    public function WebRes_GetCondoOwnerAdminReservations(WebRes_GetCondoOwnerAdminReservations $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerAdminReservations', [ $parameters ]);
    }

    /**
     * @param WebRes_GetAllMemberReservations $parameters
     *
     * @return WebRes_GetAllMemberReservationsResponse
     */
    public function WebRes_GetAllMemberReservations(WebRes_GetAllMemberReservations $parameters)
    {
        return $this->__soapCall('WebRes_GetAllMemberReservations', [ $parameters ]);
    }

    /**
     * This method gets the informations of the owner. A DataSet is return with a series of table : FillCondoOwnerTable, FillCondoOwnerContracts, FillCondoOwnerTemplates, FillCondoOwnerAddress, FillCondoOwnerTelephones, FillCondoOwnerBalances, FillCondoOwnerReservations  FillContractExpenses, FillWorkOrder.  A new WebMethod have been introduced on 30 jan 2009 to skip the reservation listing and work order on the initial login/load.  It was to long for Lvb where a owner has 195 contracts(3 min+, when skip less than 15 sec). We creates new WebMethod called GetCondoOwnerBasicInfos(excludes resa list and wo),  a GetCondoOwnerReservations and GetCondoOwnerWO. You can still use this one if the initial load is not critical.
     *
     * @param WebRes_GetCondoOwnerWorkOrder $parameters
     *
     * @return WebRes_GetCondoOwnerWorkOrderResponse
     */
    public function WebRes_GetCondoOwnerWorkOrder(WebRes_GetCondoOwnerWorkOrder $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerWorkOrder', [ $parameters ]);
    }

    /**
     * @param WebRes_GetCondoOwnerNews $parameters
     *
     * @return WebRes_GetCondoOwnerNewsResponse
     */
    public function WebRes_GetCondoOwnerNews(WebRes_GetCondoOwnerNews $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerNews', [ $parameters ]);
    }

    /**
     * @param WebRes_GetCondoOwnerByReferal $parameters
     *
     * @return WebRes_GetCondoOwnerByReferalResponse
     */
    public function WebRes_GetCondoOwnerByReferal(WebRes_GetCondoOwnerByReferal $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerByReferal', [ $parameters ]);
    }

    /**
     * @param WebRes_GetOwnerRoomAvailabilityByAdminID $parameters
     *
     * @return WebRes_GetOwnerRoomAvailabilityByAdminIDResponse
     */
    public function WebRes_GetOwnerRoomAvailabilityByAdminID(WebRes_GetOwnerRoomAvailabilityByAdminID $parameters)
    {
        return $this->__soapCall('WebRes_GetOwnerRoomAvailabilityByAdminID', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetUnfilteredRatesAndRoomsPricesClusters $parameters
     *
     * @return GetUnfilteredRatesAndRoomsPricesClustersResponse
     */
    public function GetUnfilteredRatesAndRoomsPricesClusters(GetUnfilteredRatesAndRoomsPricesClusters $parameters)
    {
        return $this->__soapCall('GetUnfilteredRatesAndRoomsPricesClusters', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetUnfilteredRatesAndRoomsPricesBackToBack $parameters
     *
     * @return GetUnfilteredRatesAndRoomsPricesBackToBackResponse
     */
    public function GetUnfilteredRatesAndRoomsPricesBackToBack(
        GetUnfilteredRatesAndRoomsPricesBackToBack $parameters
    ) {
        return $this->__soapCall('GetUnfilteredRatesAndRoomsPricesBackToBack', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetAvailRatesAndRoomNumbers $parameters
     *
     * @return GetAvailRatesAndRoomNumbersResponse
     */
    public function GetAvailRatesAndRoomNumbers(GetAvailRatesAndRoomNumbers $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomNumbers', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetAvailRatesAndRoomNumbersWithEvaluation $parameters
     *
     * @return GetAvailRatesAndRoomNumbersWithEvaluationResponse
     */
    public function GetAvailRatesAndRoomNumbersWithEvaluation(GetAvailRatesAndRoomNumbersWithEvaluation $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomNumbersWithEvaluation', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetAvailRatesAndRoomNumbersWithRefusals $parameters
     *
     * @return GetAvailRatesAndRoomNumbersWithRefusalsResponse
     */
    public function GetAvailRatesAndRoomNumbersWithRefusals(GetAvailRatesAndRoomNumbersWithRefusals $parameters)
    {
        return $this->__soapCall('GetAvailRatesAndRoomNumbersWithRefusals', [ $parameters ]);
    }

    /**
     * Return the list of all beddings.
     *
     * @param getBeddings $parameters
     *
     * @return getBeddingsResponse
     */
    public function getBeddings(getBeddings $parameters)
    {
        return $this->__soapCall('getBeddings', [ $parameters ]);
    }

    /**
     * @param GetSpecialOffers $parameters
     *
     * @return GetSpecialOffersResponse
     */
    public function GetSpecialOffers(GetSpecialOffers $parameters)
    {
        return $this->__soapCall('GetSpecialOffers', [ $parameters ]);
    }

    /**
     * @param GetPromoCodes $parameters
     *
     * @return GetPromoCodesResponse
     */
    public function GetPromoCodes(GetPromoCodes $parameters)
    {
        return $this->__soapCall('GetPromoCodes', [ $parameters ]);
    }

    /**
     * @param SetPushID $parameters
     *
     * @return SetPushIDResponse
     */
    public function SetPushID(SetPushID $parameters)
    {
        return $this->__soapCall('SetPushID', [ $parameters ]);
    }

    /**
     * @param ImportRatesAndRoomTypesDetails $parameters
     *
     * @return ImportRatesAndRoomTypesDetailsResponse
     */
    public function ImportRatesAndRoomTypesDetails(ImportRatesAndRoomTypesDetails $parameters)
    {
        return $this->__soapCall('ImportRatesAndRoomTypesDetails', [ $parameters ]);
    }

    /**
     * @param GetHousekeepingRoomStatus $parameters
     *
     * @return GetHousekeepingRoomStatusResponse
     */
    public function GetHousekeepingRoomStatus(GetHousekeepingRoomStatus $parameters)
    {
        return $this->__soapCall('GetHousekeepingRoomStatus', [ $parameters ]);
    }

    /**
     * @param ProcessCard $parameters
     *
     * @return ProcessCardResponse
     */
    public function ProcessCard(ProcessCard $parameters)
    {
        return $this->__soapCall('ProcessCard', [ $parameters ]);
    }

    /**
     * @param PostTransaction $parameters
     *
     * @return PostTransactionResponse
     */
    public function PostTransaction(PostTransaction $parameters)
    {
        return $this->__soapCall('PostTransaction', [ $parameters ]);
    }

    /**
     * Use for WebGroup : p_GroupLogin.aspx; Use to cancel a reservation with status of type reservation(TAccountStatus.bsReservation)
     *
     * @param CancelReservationAndGetAmountToPay $parameters
     *
     * @return CancelReservationAndGetAmountToPayResponse
     */
    public function CancelReservationAndGetAmountToPay(CancelReservationAndGetAmountToPay $parameters)
    {
        return $this->__soapCall('CancelReservationAndGetAmountToPay', [ $parameters ]);
    }

    /**
     * @param ProcessCancellation $parameters
     *
     * @return ProcessCancellationResponse
     */
    public function ProcessCancellation(ProcessCancellation $parameters)
    {
        return $this->__soapCall('ProcessCancellation', [ $parameters ]);
    }

    /**
     * Use for WebGroup : p_GroupLogin.aspx; Use to cancel a reservation with status of type reservation(TAccountStatus.bsReservation)
     *
     * @param CancelReservation $parameters
     *
     * @return CancelReservationResponse
     */
    public function CancelReservation(CancelReservation $parameters)
    {
        return $this->__soapCall('CancelReservation', [ $parameters ]);
    }

    /**
     * Return Cancellation reasons
     *
     * @param GetAllCancellationReasons $parameters
     *
     * @return GetAllCancellationReasonsResponse
     */
    public function GetAllCancellationReasons(GetAllCancellationReasons $parameters)
    {
        return $this->__soapCall('GetAllCancellationReasons', [ $parameters ]);
    }

    /**
     * Return All Cancellation
     *
     * @param GetAllCancellationNew $parameters
     *
     * @return GetAllCancellationNewResponse
     */
    public function GetAllCancellationNew(GetAllCancellationNew $parameters)
    {
        return $this->__soapCall('GetAllCancellationNew', [ $parameters ]);
    }

    /**
     * Return Units descriptions for suites
     *
     * @param GetSuitesDescription $parameters
     *
     * @return GetSuitesDescriptionResponse
     */
    public function GetSuitesDescription(GetSuitesDescription $parameters)
    {
        return $this->__soapCall('GetSuitesDescription', [ $parameters ]);
    }

    /**
     * Return Credit card name and ID
     *
     * @param GetCreditCardTypes $parameters
     *
     * @return GetCreditCardTypesResponse
     */
    public function GetCreditCardTypes(GetCreditCardTypes $parameters)
    {
        return $this->__soapCall('GetCreditCardTypes', [ $parameters ]);
    }

    /**
     * Return the ID_CreditCard for a card number
     *
     * @param GetCreditCardType $parameters
     *
     * @return GetCreditCardTypeResponse
     */
    public function GetCreditCardType(GetCreditCardType $parameters)
    {
        return $this->__soapCall('GetCreditCardType', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days and room
     *
     * @param GetSingleStayValueForUnitWithBuilding $parameters
     *
     * @return GetSingleStayValueForUnitWithBuildingResponse
     */
    public function GetSingleStayValueForUnitWithBuilding(GetSingleStayValueForUnitWithBuilding $parameters)
    {
        return $this->__soapCall('GetSingleStayValueForUnitWithBuilding', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days and room
     *
     * @param GetSingleStayValueForUnit $parameters
     *
     * @return GetSingleStayValueForUnitResponse
     */
    public function GetSingleStayValueForUnit(GetSingleStayValueForUnit $parameters)
    {
        return $this->__soapCall('GetSingleStayValueForUnit', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days and room
     *
     * @param GetSingleStayValue $parameters
     *
     * @return GetSingleStayValueResponse
     */
    public function GetSingleStayValue(GetSingleStayValue $parameters)
    {
        return $this->__soapCall('GetSingleStayValue', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days and room
     *
     * @param GetSingleStayValueBackToBack $parameters
     *
     * @return GetSingleStayValueBackToBackResponse
     */
    public function GetSingleStayValueBackToBack(GetSingleStayValueBackToBack $parameters)
    {
        return $this->__soapCall('GetSingleStayValueBackToBack', [ $parameters ]);
    }

    /**
     * Return a complete evaluation for a stay including item breakdown by days and room
     *
     * @param GetSingleStayValueRBO $parameters
     *
     * @return GetSingleStayValueRBOResponse
     */
    public function GetSingleStayValueRBO(GetSingleStayValueRBO $parameters)
    {
        return $this->__soapCall('GetSingleStayValueRBO', [ $parameters ]);
    }

    /**
     * @param GetConfirmationFamily $parameters
     *
     * @return GetConfirmationFamilyResponse
     */
    public function GetConfirmationFamily(GetConfirmationFamily $parameters)
    {
        return $this->__soapCall('GetConfirmationFamily', [ $parameters ]);
    }

    /**
     * Return availability for a specific date range and a roomtype ID
     *
     * @param GetRoomTypeAvailability $parameters
     *
     * @return GetRoomTypeAvailabilityResponse
     */
    public function GetRoomTypeAvailability(GetRoomTypeAvailability $parameters)
    {
        return $this->__soapCall('GetRoomTypeAvailability', [ $parameters ]);
    }

    /**
     * Return a roomtype building association list
     *
     * @param getAllRoomTypeBuilding $parameters
     *
     * @return getAllRoomTypeBuildingResponse
     */
    public function getAllRoomTypeBuilding(getAllRoomTypeBuilding $parameters)
    {
        return $this->__soapCall('getAllRoomTypeBuilding', [ $parameters ]);
    }

    /**
     * @param WebRes_GetCondoOwnerRoomInfo $parameters
     *
     * @return WebRes_GetCondoOwnerRoomInfoResponse
     */
    public function WebRes_GetCondoOwnerRoomInfo(WebRes_GetCondoOwnerRoomInfo $parameters)
    {
        return $this->__soapCall('WebRes_GetCondoOwnerRoomInfo', [ $parameters ]);
    }

    /**
     * @param getRoomSpecifications $parameters
     *
     * @return getRoomSpecificationsResponse
     */
    public function getRoomSpecifications(getRoomSpecifications $parameters)
    {
        return $this->__soapCall('getRoomSpecifications', [ $parameters ]);
    }

    /**
     * Return a list of rooms and suite
     *
     * @param GetAllRoomsSpecifications $parameters
     *
     * @return GetAllRoomsSpecificationsResponse
     */
    public function getAllRoomsSpecifications(GetAllRoomsSpecifications $parameters)
    {
        return $this->__soapCall('getAllRoomsSpecifications', [ $parameters ]);
    }

    /**
     * Return a list of rooms and suite
     *
     * @param getAllSuitesSpecifications $parameters
     *
     * @return getAllSuitesSpecificationsResponse
     */
    public function getAllSuitesSpecifications(getAllSuitesSpecifications $parameters)
    {
        return $this->__soapCall('getAllSuitesSpecifications', [ $parameters ]);
    }

    /**
     * @param getUnitAvailabilityForCalendar $parameters
     *
     * @return getUnitAvailabilityForCalendarResponse
     */
    public function getUnitAvailabilityForCalendar(getUnitAvailabilityForCalendar $parameters)
    {
        return $this->__soapCall('getUnitAvailabilityForCalendar', [ $parameters ]);
    }

    /**
     * @param getUnitAvailabilityCalendarBreakdown $parameters
     *
     * @return getUnitAvailabilityCalendarBreakdownResponse
     */
    public function getUnitAvailabilityCalendarBreakdown(getUnitAvailabilityCalendarBreakdown $parameters)
    {
        return $this->__soapCall('getUnitAvailabilityCalendarBreakdown', [ $parameters ]);
    }

    /**
     * @param getUnitAvailabilityCalendar $parameters
     *
     * @return getUnitAvailabilityCalendarResponse
     */
    public function getUnitAvailabilityCalendar(getUnitAvailabilityCalendar $parameters)
    {
        return $this->__soapCall('getUnitAvailabilityCalendar', [ $parameters ]);
    }

    /**
     * Return true or false if UnitID is available for entire date interval
     *
     * @param IsUnitAvailableForStay $parameters
     *
     * @return IsUnitAvailableForStayResponse
     */
    public function IsUnitAvailableForStay(IsUnitAvailableForStay $parameters)
    {
        return $this->__soapCall('IsUnitAvailableForStay', [ $parameters ]);
    }

    /**
     * Return true or false if RoomTypeID is available for entire date interval
     *
     * @param IsRoomTypeAvailableForStay $parameters
     *
     * @return IsRoomTypeAvailableForStayResponse
     */
    public function IsRoomTypeAvailableForStay(IsRoomTypeAvailableForStay $parameters)
    {
        return $this->__soapCall('IsRoomTypeAvailableForStay', [ $parameters ]);
    }

    /**
     * @param getAllRoomsAvailabilityCalendar $parameters
     *
     * @return getAllRoomsAvailabilityCalendarResponse
     */
    public function getAllRoomsAvailabilityCalendar(getAllRoomsAvailabilityCalendar $parameters)
    {
        return $this->__soapCall('getAllRoomsAvailabilityCalendar', [ $parameters ]);
    }

    /**
     * Return a list of AVAILABLE rooms AND Suites ordered by booking priority
     *
     * @param getAllRoomsAvailabilityForStay $parameters
     *
     * @return getAllRoomsAvailabilityForStayResponse
     */
    public function getAllRoomsAvailabilityForStay(getAllRoomsAvailabilityForStay $parameters)
    {
        return $this->__soapCall('getAllRoomsAvailabilityForStay', [ $parameters ]);
    }

    /**
     * @param GetUserDefinedFieldsForUnits $parameters
     *
     * @return GetUserDefinedFieldsForUnitsResponse
     */
    public function GetUserDefinedFieldsForUnits(GetUserDefinedFieldsForUnits $parameters)
    {
        return $this->__soapCall('GetUserDefinedFieldsForUnits', [ $parameters ]);
    }

    /**
     * Return a list of AVAILABLE rooms AND Suites ordered by booking priority
     *
     * @param getAllRoomsAvailabilityForStayBackToBack $parameters
     *
     * @return getAllRoomsAvailabilityForStayBackToBackResponse
     */
    public function getAllRoomsAvailabilityForStayBackToBack(getAllRoomsAvailabilityForStayBackToBack $parameters)
    {
        return $this->__soapCall('getAllRoomsAvailabilityForStayBackToBack', [ $parameters ]);
    }

    /**
     * Return a list of AVAILABLE rooms AND Suites ordered by booking priority
     *
     * @param getAllRoomsAvailabilityForStayFast $parameters
     *
     * @return getAllRoomsAvailabilityForStayFastResponse
     */
    public function getAllRoomsAvailabilityForStayFast(getAllRoomsAvailabilityForStayFast $parameters)
    {
        return $this->__soapCall('getAllRoomsAvailabilityForStayFast', [ $parameters ]);
    }

    /**
     * Return all room attributes for a grouping
     *
     * @param getAllRoomAttributsForGrouping $parameters
     *
     * @return getAllRoomAttributsForGroupingResponse
     */
    public function getAllRoomAttributsForGrouping(getAllRoomAttributsForGrouping $parameters)
    {
        return $this->__soapCall('getAllRoomAttributsForGrouping', [ $parameters ]);
    }

    /**
     * Return all room location for a grouping
     *
     * @param getAllRoomLocationsForGrouping $parameters
     *
     * @return getAllRoomLocationsForGroupingResponse
     */
    public function getAllRoomLocationsForGrouping(getAllRoomLocationsForGrouping $parameters)
    {
        return $this->__soapCall('getAllRoomLocationsForGrouping', [ $parameters ]);
    }

    /**
     * @param GetRateReasons $parameters
     *
     * @return GetRateReasonsResponse
     */
    public function GetRateReasons(GetRateReasons $parameters)
    {
        return $this->__soapCall('GetRateReasons', [ $parameters ]);
    }

    /**
     * @param ValidateRoomRefusals $parameters
     *
     * @return ValidateRoomRefusalsResponse
     */
    public function ValidateRoomRefusals(ValidateRoomRefusals $parameters)
    {
        return $this->__soapCall('ValidateRoomRefusals', [ $parameters ]);
    }

    /**
     * Return all room types for clusters
     *
     * @param getAllRoomTypeClusters $parameters
     *
     * @return getAllRoomTypeClustersResponse
     */
    public function getAllRoomTypeClusters(getAllRoomTypeClusters $parameters)
    {
        return $this->__soapCall('getAllRoomTypeClusters', [ $parameters ]);
    }

    /**
     * Return all room attributes
     *
     * @param getAllRoomAttributes $parameters
     *
     * @return getAllRoomAttributesResponse
     */
    public function getAllRoomAttributes(getAllRoomAttributes $parameters)
    {
        return $this->__soapCall('getAllRoomAttributes', [ $parameters ]);
    }

    /**
     * Return all room locations
     *
     * @param getAllRoomLocations $parameters
     *
     * @return getAllRoomLocationsResponse
     */
    public function getAllRoomLocations(getAllRoomLocations $parameters)
    {
        return $this->__soapCall('getAllRoomLocations', [ $parameters ]);
    }

    /**
     * Return all occupied rooms for a specific day
     *
     * @param getDailyInHouseOccupancy $parameters
     *
     * @return getDailyInHouseOccupancyResponse
     */
    public function getDailyInHouseOccupancy(getDailyInHouseOccupancy $parameters)
    {
        return $this->__soapCall('getDailyInHouseOccupancy', [ $parameters ]);
    }

    /**
     * @param GDS_GetRates $parameters
     *
     * @return GDS_GetRatesResponse
     */
    public function GDS_GetRates(GDS_GetRates $parameters)
    {
        return $this->__soapCall('GDS_GetRates', [ $parameters ]);
    }

    /**
     * @param GDS_GetInventory $parameters
     *
     * @return GDS_GetInventoryResponse
     */
    public function GDS_GetInventory(GDS_GetInventory $parameters)
    {
        return $this->__soapCall('GDS_GetInventory', [ $parameters ]);
    }

    /**
     * @param GDS_GetRestrictions $parameters
     *
     * @return GDS_GetRestrictionsResponse
     */
    public function GDS_GetRestrictions(GDS_GetRestrictions $parameters)
    {
        return $this->__soapCall('GDS_GetRestrictions', [ $parameters ]);
    }

    /**
     * @param GDS_GetListingInfo $parameters
     *
     * @return GDS_GetListingInfoResponse
     */
    public function GDS_GetListingInfo(GDS_GetListingInfo $parameters)
    {
        return $this->__soapCall('GDS_GetListingInfo', [ $parameters ]);
    }

    /**
     * Billing method for IQRez,
     *                             DateOption values : 0 = Departure;
     *                                                 1 = Arrival;
     *                                                 2 = Creation.
     *                             RevenueOption values : 0 = Customizable revenue, You must set to true at least one of the parameters that starts with 'IsIncludeRevXXX' in the request to get a result, If no parameters is set then a message will be return to specify one of the options;
     *                                                    1 = Total Stay, 'IsIncludeRevXXX' are optional.
     *
     * @param GetReservationsForBilling $parameters
     *
     * @return GetReservationsForBillingResponse
     */
    public function GetReservationsForBilling(GetReservationsForBilling $parameters)
    {
        return $this->__soapCall('GetReservationsForBilling', [ $parameters ]);
    }

    /**
     * Return all published Accomodations types
     *
     * @param getAccomodations $parameters
     *
     * @return getAccomodationsResponse
     */
    public function getAccomodations(getAccomodations $parameters)
    {
        return $this->__soapCall('getAccomodations', [ $parameters ]);
    }

    /**
     * Return a list of all published buildings
     *
     * @param GetAllBuilding $parameters
     *
     * @return GetAllBuildingResponse
     */
    public function GetAllBuilding(GetAllBuilding $parameters)
    {
        return $this->__soapCall('GetAllBuilding', [ $parameters ]);
    }

    /**
     * Return a list of Rates based on valid rates periods
     *
     * @param getHotelListOfRates $parameters
     *
     * @return getHotelListOfRatesResponse
     */
    public function getHotelListOfRates(getHotelListOfRates $parameters)
    {
        return $this->__soapCall('getHotelListOfRates', [ $parameters ]);
    }

    /**
     * Return all published room types for a specific language
     *
     * @param getHotelListOfRoomTypes $parameters
     *
     * @return getHotelListOfRoomTypesResponse
     */
    public function getHotelListOfRoomTypes(getHotelListOfRoomTypes $parameters)
    {
        return $this->__soapCall('getHotelListOfRoomTypes', [ $parameters ]);
    }

    /**
     * Return all hotel business sources
     *
     * @param getHotelListOfBusinessSources $parameters
     *
     * @return getHotelListOfBusinessSourcesResponse
     */
    public function getHotelListOfBusinessSources(getHotelListOfBusinessSources $parameters)
    {
        return $this->__soapCall('getHotelListOfBusinessSources', [ $parameters ]);
    }

    /**
     * Return all published room types for a specific language
     *
     * @param getHotelListOfRoomTypesWithBuildingsAndPLs $parameters
     *
     * @return getHotelListOfRoomTypesWithBuildingsAndPLsResponse
     */
    public function getHotelListOfRoomTypesWithBuildingsAndPLs(
        getHotelListOfRoomTypesWithBuildingsAndPLs $parameters
    ) {
        return $this->__soapCall('getHotelListOfRoomTypesWithBuildingsAndPLs', [ $parameters ]);
    }

    /**
     * @param getHotelGuaranteeTypes $parameters
     *
     * @return getHotelGuaranteeTypesResponse
     */
    public function getHotelGuaranteeTypes(getHotelGuaranteeTypes $parameters)
    {
        return $this->__soapCall('getHotelGuaranteeTypes', [ $parameters ]);
    }

    /**
     * Return a list of room attribute for a specific room type
     *
     * @param getRoomAttributes $parameters
     *
     * @return getRoomAttributesResponse
     */
    public function getRoomAttributes(getRoomAttributes $parameters)
    {
        return $this->__soapCall('getRoomAttributes', [ $parameters ]);
    }

    /**
     * Return a list of room locations for a specific room type
     *
     * @param getRoomLocations $parameters
     *
     * @return getRoomLocationsResponse
     */
    public function getRoomLocations(getRoomLocations $parameters)
    {
        return $this->__soapCall('getRoomLocations', [ $parameters ]);
    }

    /**
     * Return a list of attributes and location of specific room
     *
     * @param getRoomAttributesAndLocations $parameters
     *
     * @return getRoomAttributesAndLocationsResponse
     */
    public function getRoomAttributesAndLocations(getRoomAttributesAndLocations $parameters)
    {
        return $this->__soapCall('getRoomAttributesAndLocations', [ $parameters ]);
    }

    /**
     * @param getHotelInfos $parameters
     *
     * @return getHotelInfosResponse
     */
    public function getHotelInfos(getHotelInfos $parameters)
    {
        return $this->__soapCall('getHotelInfos', [ $parameters ]);
    }

    /**
     * @param WebRes_UpdateAccountLogin $parameters
     *
     * @return WebRes_UpdateAccountLoginResponse
     */
    public function WebRes_UpdateAccountLogin(WebRes_UpdateAccountLogin $parameters)
    {
        return $this->__soapCall('WebRes_UpdateAccountLogin', [ $parameters ]);
    }

    /**
     * @param MemberLoyalty $parameters
     *
     * @return MemberLoyaltyResponse
     */
    public function MemberLoyalty(MemberLoyalty $parameters)
    {
        return $this->__soapCall('MemberLoyalty', [ $parameters ]);
    }

    /**
     * @param GetNationalities $parameters
     *
     * @return GetNationalitiesResponse
     */
    public function GetNationalities(GetNationalities $parameters)
    {
        return $this->__soapCall('GetNationalities', [ $parameters ]);
    }

    /**
     * @param GetCreditLimits $parameters
     *
     * @return GetCreditLimitsResponse
     */
    public function GetCreditLimits(GetCreditLimits $parameters)
    {
        return $this->__soapCall('GetCreditLimits', [ $parameters ]);
    }

    /**
     * @param MemberModify $parameters
     *
     * @return MemberModifyResponse
     */
    public function MemberModify(MemberModify $parameters)
    {
        return $this->__soapCall('MemberModify', [ $parameters ]);
    }

    /**
     * @param GetLanguageIDs $parameters
     *
     * @return GetLanguageIDsResponse
     */
    public function GetLanguageIDs(GetLanguageIDs $parameters)
    {
        return $this->__soapCall('GetLanguageIDs', [ $parameters ]);
    }

    /**
     * @param GetIQImagesFiles $parameters
     *
     * @return GetIQImagesFilesResponse
     */
    public function GetIQImagesFiles(GetIQImagesFiles $parameters)
    {
        return $this->__soapCall('GetIQImagesFiles', [ $parameters ]);
    }

    /**
     * @param GetIQImageFTPInfo $parameters
     *
     * @return GetIQImageFTPInfoResponse
     */
    public function GetIQImageFTPInfo(GetIQImageFTPInfo $parameters)
    {
        return $this->__soapCall('GetIQImageFTPInfo', [ $parameters ]);
    }

    /**
     * @param AddCreditCardToAccount $parameters
     *
     * @return AddCreditCardToAccountResponse
     */
    public function AddCreditCardToAccount(AddCreditCardToAccount $parameters)
    {
        return $this->__soapCall('AddCreditCardToAccount', [ $parameters ]);
    }

    /**
     * @param Evaluate $parameters
     *
     * @return EvaluateResponse
     */
    public function Evaluate(Evaluate $parameters)
    {
        return $this->__soapCall('Evaluate', [ $parameters ]);
    }

    /**
     * @param GetUnitTypesEvaluations $parameters
     *
     * @return GetUnitTypesEvaluationsResponse
     */
    public function GetUnitTypesEvaluations(GetUnitTypesEvaluations $parameters)
    {
        return $this->__soapCall('GetUnitTypesEvaluations', [ $parameters ]);
    }

    /**
     * @param EvaluationThreaded $parameters
     *
     * @return EvaluationThreadedResponse
     */
    public function EvaluationThreaded(EvaluationThreaded $parameters)
    {
        return $this->__soapCall('EvaluationThreaded', [ $parameters ]);
    }

    /**
     * @param GetServiceCharges $parameters
     *
     * @return GetServiceChargesResponse
     */
    public function GetServiceCharges(GetServiceCharges $parameters)
    {
        return $this->__soapCall('GetServiceCharges', [ $parameters ]);
    }

    /**
     * @param GetGiftCertificateConfiguration $parameters
     *
     * @return GetGiftCertificateConfigurationResponse
     */
    public function GetGiftCertificateConfiguration(GetGiftCertificateConfiguration $parameters)
    {
        return $this->__soapCall('GetGiftCertificateConfiguration', [ $parameters ]);
    }

    /**
     * @param AvailRatesAndRooms $parameters
     *
     * @return AvailRatesAndRoomsResponse
     */
    public function AvailRatesAndRooms(AvailRatesAndRooms $parameters)
    {
        return $this->__soapCall('AvailRatesAndRooms', [ $parameters ]);
    }

    /**
     * @param GetBuildingsWithAtLeastOneUnitAvailable $parameters
     *
     * @return GetBuildingsWithAtLeastOneUnitAvailableResponse
     */
    public function GetBuildingsWithAtLeastOneUnitAvailable(GetBuildingsWithAtLeastOneUnitAvailable $parameters)
    {
        return $this->__soapCall('GetBuildingsWithAtLeastOneUnitAvailable', [ $parameters ]);
    }

    /**
     * @param GetUnitAvailability $parameters
     *
     * @return GetUnitAvailabilityResponse
     */
    public function GetUnitAvailability(GetUnitAvailability $parameters)
    {
        return $this->__soapCall('GetUnitAvailability', [ $parameters ]);
    }

    /**
     * @param GetUnitWithoutAvailability $parameters
     *
     * @return GetUnitWithoutAvailabilityResponse
     */
    public function GetUnitWithoutAvailability(GetUnitWithoutAvailability $parameters)
    {
        return $this->__soapCall('GetUnitWithoutAvailability', [ $parameters ]);
    }

    /**
     * @param GetUnitsAvailability $parameters
     *
     * @return GetUnitsAvailabilityResponse
     */
    public function GetUnitsAvailability(GetUnitsAvailability $parameters)
    {
        return $this->__soapCall('GetUnitsAvailability', [ $parameters ]);
    }

    /**
     * @param getUnitsAvailabilityCalendar $parameters
     *
     * @return getUnitsAvailabilityCalendarResponse
     */
    public function getUnitsAvailabilityCalendar(getUnitsAvailabilityCalendar $parameters)
    {
        return $this->__soapCall('getUnitsAvailabilityCalendar', [ $parameters ]);
    }

    /**
     * @param GetGooglePMSConfig $parameters
     *
     * @return GetGooglePMSConfigResponse
     */
    public function GetGooglePMSConfig(GetGooglePMSConfig $parameters)
    {
        return $this->__soapCall('GetGooglePMSConfig', [ $parameters ]);
    }

    /**
     * @param GoogleEval $parameters
     *
     * @return GoogleEvalResponse
     */
    public function GoogleEval(GoogleEval $parameters)
    {
        return $this->__soapCall('GoogleEval', [ $parameters ]);
    }

    /**
     * @param GetRoomsAndSuitesAvailability $parameters
     *
     * @return GetRoomsAndSuitesAvailabilityResponse
     */
    public function GetRoomsAndSuitesAvailability(GetRoomsAndSuitesAvailability $parameters)
    {
        return $this->__soapCall('GetRoomsAndSuitesAvailability', [ $parameters ]);
    }

    /**
     * @param LoadReservation $parameters
     *
     * @return LoadReservationResponse
     */
    public function LoadReservation(LoadReservation $parameters)
    {
        return $this->__soapCall('LoadReservation', [ $parameters ]);
    }

    /**
     * @param WebRes_LoadReservation $parameters
     *
     * @return WebRes_LoadReservationResponse
     */
    public function WebRes_LoadReservation(WebRes_LoadReservation $parameters)
    {
        return $this->__soapCall('WebRes_LoadReservation', [ $parameters ]);
    }

    /**
     * @param WSCRS_CrsLocal_Initialize $parameters
     *
     * @return WSCRS_CrsLocal_InitializeResponse
     */
    public function WSCRS_CrsLocal_Initialize(WSCRS_CrsLocal_Initialize $parameters)
    {
        return $this->__soapCall('WSCRS_CrsLocal_Initialize', [ $parameters ]);
    }

    /**
     * @param WSCRS_Release $parameters
     *
     * @return WSCRS_ReleaseResponse
     */
    public function WSCRS_Release(WSCRS_Release $parameters)
    {
        return $this->__soapCall('WSCRS_Release', [ $parameters ]);
    }

    /**
     * @param WSCRS_TestSession $parameters
     *
     * @return WSCRS_TestSessionResponse
     */
    public function WSCRS_TestSession(WSCRS_TestSession $parameters)
    {
        return $this->__soapCall('WSCRS_TestSession', [ $parameters ]);
    }

    /**
     * @param WSCRS_GetCodes $parameters
     *
     * @return WSCRS_GetCodesResponse
     */
    public function WSCRS_GetCodes(WSCRS_GetCodes $parameters)
    {
        return $this->__soapCall('WSCRS_GetCodes', [ $parameters ]);
    }

    /**
     * @param WSCRS_GetCodesPublished $parameters
     *
     * @return WSCRS_GetCodesPublishedResponse
     */
    public function WSCRS_GetCodesPublished(WSCRS_GetCodesPublished $parameters)
    {
        return $this->__soapCall('WSCRS_GetCodesPublished', [ $parameters ]);
    }

    /**
     * @param WSCRS_GetAvailability $parameters
     *
     * @return WSCRS_GetAvailabilityResponse
     */
    public function WSCRS_GetAvailability(WSCRS_GetAvailability $parameters)
    {
        return $this->__soapCall('WSCRS_GetAvailability', [ $parameters ]);
    }

    /**
     * @param WSCRS_GetNewAvailability $parameters
     *
     * @return WSCRS_GetNewAvailabilityResponse
     */
    public function WSCRS_GetNewAvailability(WSCRS_GetNewAvailability $parameters)
    {
        return $this->__soapCall('WSCRS_GetNewAvailability', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_Initialize $parameters
     *
     * @return WSCRSHo_InitializeResponse
     */
    public function WSCRSHo_Initialize(WSCRSHo_Initialize $parameters)
    {
        return $this->__soapCall('WSCRSHo_Initialize', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_Release $parameters
     *
     * @return WSCRSHo_ReleaseResponse
     */
    public function WSCRSHo_Release(WSCRSHo_Release $parameters)
    {
        return $this->__soapCall('WSCRSHo_Release', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_SessionCheck $parameters
     *
     * @return WSCRSHo_SessionCheckResponse
     */
    public function WSCRSHo_SessionCheck(WSCRSHo_SessionCheck $parameters)
    {
        return $this->__soapCall('WSCRSHo_SessionCheck', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_GetCodes $parameters
     *
     * @return WSCRSHo_GetCodesResponse
     */
    public function WSCRSHo_GetCodes(WSCRSHo_GetCodes $parameters)
    {
        return $this->__soapCall('WSCRSHo_GetCodes', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_GetCodesPublished $parameters
     *
     * @return WSCRSHo_GetCodesPublishedResponse
     */
    public function WSCRSHo_GetCodesPublished(WSCRSHo_GetCodesPublished $parameters)
    {
        return $this->__soapCall('WSCRSHo_GetCodesPublished', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_GetHotelList $parameters
     *
     * @return WSCRSHo_GetHotelListResponse
     */
    public function WSCRSHo_GetHotelList(WSCRSHo_GetHotelList $parameters)
    {
        return $this->__soapCall('WSCRSHo_GetHotelList', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_GetHotelInfos $parameters
     *
     * @return WSCRSHo_GetHotelInfosResponse
     */
    public function WSCRSHo_GetHotelInfos(WSCRSHo_GetHotelInfos $parameters)
    {
        return $this->__soapCall('WSCRSHo_GetHotelInfos', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_TAGetBlank $parameters
     *
     * @return WSCRSHo_TAGetBlankResponse
     */
    public function WSCRSHo_TAGetBlank(WSCRSHo_TAGetBlank $parameters)
    {
        return $this->__soapCall('WSCRSHo_TAGetBlank', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_TASearch $parameters
     *
     * @return WSCRSHo_TASearchResponse
     */
    public function WSCRSHo_TASearch(WSCRSHo_TASearch $parameters)
    {
        return $this->__soapCall('WSCRSHo_TASearch', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_TAGet $parameters
     *
     * @return WSCRSHo_TAGetResponse
     */
    public function WSCRSHo_TAGet(WSCRSHo_TAGet $parameters)
    {
        return $this->__soapCall('WSCRSHo_TAGet', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_TAAdd $parameters
     *
     * @return WSCRSHo_TAAddResponse
     */
    public function WSCRSHo_TAAdd(WSCRSHo_TAAdd $parameters)
    {
        return $this->__soapCall('WSCRSHo_TAAdd', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_TAModify $parameters
     *
     * @return WSCRSHo_TAModifyResponse
     */
    public function WSCRSHo_TAModify(WSCRSHo_TAModify $parameters)
    {
        return $this->__soapCall('WSCRSHo_TAModify', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_CompanyGetBlank $parameters
     *
     * @return WSCRSHo_CompanyGetBlankResponse
     */
    public function WSCRSHo_CompanyGetBlank(WSCRSHo_CompanyGetBlank $parameters)
    {
        return $this->__soapCall('WSCRSHo_CompanyGetBlank', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_CompanySearch $parameters
     *
     * @return WSCRSHo_CompanySearchResponse
     */
    public function WSCRSHo_CompanySearch(WSCRSHo_CompanySearch $parameters)
    {
        return $this->__soapCall('WSCRSHo_CompanySearch', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_CompanyGet $parameters
     *
     * @return WSCRSHo_CompanyGetResponse
     */
    public function WSCRSHo_CompanyGet(WSCRSHo_CompanyGet $parameters)
    {
        return $this->__soapCall('WSCRSHo_CompanyGet', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_CompanyAdd $parameters
     *
     * @return WSCRSHo_CompanyAddResponse
     */
    public function WSCRSHo_CompanyAdd(WSCRSHo_CompanyAdd $parameters)
    {
        return $this->__soapCall('WSCRSHo_CompanyAdd', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_CompanyModify $parameters
     *
     * @return WSCRSHo_CompanyModifyResponse
     */
    public function WSCRSHo_CompanyModify(WSCRSHo_CompanyModify $parameters)
    {
        return $this->__soapCall('WSCRSHo_CompanyModify', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_FitMemberGetBlankList $parameters
     *
     * @return WSCRSHo_FitMemberGetBlankListResponse
     */
    public function WSCRSHo_FitMemberGetBlankList(WSCRSHo_FitMemberGetBlankList $parameters)
    {
        return $this->__soapCall('WSCRSHo_FitMemberGetBlankList', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_FitGetConfigList $parameters
     *
     * @return WSCRSHo_FitGetConfigListResponse
     */
    public function WSCRSHo_FitGetConfigList(WSCRSHo_FitGetConfigList $parameters)
    {
        return $this->__soapCall('WSCRSHo_FitGetConfigList', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_FitMemberSearch $parameters
     *
     * @return WSCRSHo_FitMemberSearchResponse
     */
    public function WSCRSHo_FitMemberSearch(WSCRSHo_FitMemberSearch $parameters)
    {
        return $this->__soapCall('WSCRSHo_FitMemberSearch', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_FitMemberGetList $parameters
     *
     * @return WSCRSHo_FitMemberGetListResponse
     */
    public function WSCRSHo_FitMemberGetList(WSCRSHo_FitMemberGetList $parameters)
    {
        return $this->__soapCall('WSCRSHo_FitMemberGetList', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_FitMemberListUpdate $parameters
     *
     * @return WSCRSHo_FitMemberListUpdateResponse
     */
    public function WSCRSHo_FitMemberListUpdate(WSCRSHo_FitMemberListUpdate $parameters)
    {
        return $this->__soapCall('WSCRSHo_FitMemberListUpdate', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_InternalMemberGetCompanyNo $parameters
     *
     * @return WSCRSHo_InternalMemberGetCompanyNoResponse
     */
    public function WSCRSHo_InternalMemberGetCompanyNo(WSCRSHo_InternalMemberGetCompanyNo $parameters)
    {
        return $this->__soapCall('WSCRSHo_InternalMemberGetCompanyNo', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberGetBlank $parameters
     *
     * @return WSCRSHo_MemberGetBlankResponse
     */
    public function WSCRSHo_MemberGetBlank(WSCRSHo_MemberGetBlank $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberGetBlank', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberSearch $parameters
     *
     * @return WSCRSHo_MemberSearchResponse
     */
    public function WSCRSHo_MemberSearch(WSCRSHo_MemberSearch $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberSearch', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberGet $parameters
     *
     * @return WSCRSHo_MemberGetResponse
     */
    public function WSCRSHo_MemberGet(WSCRSHo_MemberGet $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberGet', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberAdd $parameters
     *
     * @return WSCRSHo_MemberAddResponse
     */
    public function WSCRSHo_MemberAdd(WSCRSHo_MemberAdd $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberAdd', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberModify $parameters
     *
     * @return WSCRSHo_MemberModifyResponse
     */
    public function WSCRSHo_MemberModify(WSCRSHo_MemberModify $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberModify', [ $parameters ]);
    }

    /**
     * @param WSCRSHo_MemberResolveLinks $parameters
     *
     * @return WSCRSHo_MemberResolveLinksResponse
     */
    public function WSCRSHo_MemberResolveLinks(WSCRSHo_MemberResolveLinks $parameters)
    {
        return $this->__soapCall('WSCRSHo_MemberResolveLinks', [ $parameters ]);
    }

    /**
     * Get the data to import from the Company(Ho to Local).N.B : Call from local, do not call from Ho
     *
     * @param WSCRSHo_InternalCompanyImport $parameters
     *
     * @return WSCRSHo_InternalCompanyImportResponse
     */
    public function WSCRSHo_InternalCompanyImport(WSCRSHo_InternalCompanyImport $parameters)
    {
        return $this->__soapCall('WSCRSHo_InternalCompanyImport', [ $parameters ]);
    }

    /**
     * Get the data to import from the member(Ho to Local). N.B : Call from local, do not call from Ho
     *
     * @param WSCRSHo_InternalMemberImport $parameters
     *
     * @return WSCRSHo_InternalMemberImportResponse
     */
    public function WSCRSHo_InternalMemberImport(WSCRSHo_InternalMemberImport $parameters)
    {
        return $this->__soapCall('WSCRSHo_InternalMemberImport', [ $parameters ]);
    }

    /**
     * Get the data to import from the TA(Ho to Local). N.B : Call from local, do not call from Ho
     *
     * @param WSCRSHo_InternalTAImport $parameters
     *
     * @return WSCRSHo_InternalTAImportResponse
     */
    public function WSCRSHo_InternalTAImport(WSCRSHo_InternalTAImport $parameters)
    {
        return $this->__soapCall('WSCRSHo_InternalTAImport', [ $parameters ]);
    }

    /**
     * Return all hotels defined in InnIIS, pass 1 for WebRes enabled hotel, or 0 to get non-web enabled properties, and pass -1 to get all properties
     *
     * @param getHotelInfosAll $parameters
     *
     * @return getHotelInfosAllResponse
     */
    public function getHotelInfosAll(getHotelInfosAll $parameters)
    {
        return $this->__soapCall('getHotelInfosAll', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations must be a string with a semi-colon separation
     *
     * @param getRates $parameters
     *
     * @return getRatesResponse
     */
    public function getRates(getRates $parameters)
    {
        return $this->__soapCall('getRates', [ $parameters ]);
    }

    /**
     * Return the backend dll's objects pooling statistics
     *
     * @param GetPoolStatistics $parameters
     *
     * @return GetPoolStatisticsResponse
     */
    public function GetPoolStatistics(GetPoolStatistics $parameters)
    {
        return $this->__soapCall('GetPoolStatistics', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations must be a string with a semi-colon separation
     *
     * @param getRateRooms $parameters
     *
     * @return getRateRoomsResponse
     */
    public function getRateRooms(getRateRooms $parameters)
    {
        return $this->__soapCall('getRateRooms', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations must be a string with a semi-colon separation
     *
     * @param getRateRoomsBackToBack $parameters
     *
     * @return getRateRoomsBackToBackResponse
     */
    public function getRateRoomsBackToBack(getRateRoomsBackToBack $parameters)
    {
        return $this->__soapCall('getRateRoomsBackToBack', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes, strLocations,strBuildings must be a string with a semi-colon separation or an empty string
     *
     * @param GetRatesAndRoomsPricesByUnitNumber $parameters
     *
     * @return GetRatesAndRoomsPricesByUnitNumberResponse
     */
    public function GetRatesAndRoomsPricesByUnitNumber(GetRatesAndRoomsPricesByUnitNumber $parameters)
    {
        return $this->__soapCall('GetRatesAndRoomsPricesByUnitNumber', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes, strLocations,strBuildings must be a string with a semi-colon separation or an empty string
     *
     * @param GetRatesAndRoomsPrices $parameters
     *
     * @return GetRatesAndRoomsPricesResponse
     */
    public function GetRatesAndRoomsPrices(GetRatesAndRoomsPrices $parameters)
    {
        return $this->__soapCall('GetRatesAndRoomsPrices', [ $parameters ]);
    }

    /**
     * @param BeachChairGetConfiguration $parameters
     *
     * @return BeachChairGetConfigurationResponse
     */
    public function BeachChairGetConfiguration(BeachChairGetConfiguration $parameters)
    {
        return $this->__soapCall('BeachChairGetConfiguration', [ $parameters ]);
    }

    /**
     * @param BeachChairGetAvailBookingSite $parameters
     *
     * @return BeachChairGetAvailBookingSiteResponse
     */
    public function BeachChairGetAvailBookingSite(BeachChairGetAvailBookingSite $parameters)
    {
        return $this->__soapCall('BeachChairGetAvailBookingSite', [ $parameters ]);
    }

    /**
     * @param BeachChairGetSingleStayValue $parameters
     *
     * @return BeachChairGetSingleStayValueResponse
     */
    public function BeachChairGetSingleStayValue(BeachChairGetSingleStayValue $parameters)
    {
        return $this->__soapCall('BeachChairGetSingleStayValue', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param BeachChairSaveReservation $parameters
     *
     * @return BeachChairSaveReservationResponse
     */
    public function BeachChairSaveReservation(BeachChairSaveReservation $parameters)
    {
        return $this->__soapCall('BeachChairSaveReservation', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes and strLocations are codes separated by ';' - strActivityStructure is taken from getRateStayValue result DataSet
     *
     * @param BeachChairSaveReservationWithCardProcessed $parameters
     *
     * @return BeachChairSaveReservationWithCardProcessedResponse
     */
    public function BeachChairSaveReservationWithCardProcessed(
        BeachChairSaveReservationWithCardProcessed $parameters
    ) {
        return $this->__soapCall('BeachChairSaveReservationWithCardProcessed', [ $parameters ]);
    }

    /**
     * @param GetBeachChairAllSite $parameters
     *
     * @return GetBeachChairAllSiteResponse
     */
    public function GetBeachChairAllSite(GetBeachChairAllSite $parameters)
    {
        return $this->__soapCall('GetBeachChairAllSite', [ $parameters ]);
    }

    /**
     * @param BeachChairGetAvailElementsSitesForStay $parameters
     *
     * @return BeachChairGetAvailElementsSitesForStayResponse
     */
    public function BeachChairGetAvailElementsSitesForStay(BeachChairGetAvailElementsSitesForStay $parameters)
    {
        return $this->__soapCall('BeachChairGetAvailElementsSitesForStay', [ $parameters ]);
    }

    /**
     * @param GetUnitReservations $parameters
     *
     * @return GetUnitReservationsResponse
     */
    public function GetUnitReservations(GetUnitReservations $parameters)
    {
        return $this->__soapCall('GetUnitReservations', [ $parameters ]);
    }

    /**
     * @param GetUnitStatements $parameters
     *
     * @return GetUnitStatementsResponse
     */
    public function GetUnitStatements(GetUnitStatements $parameters)
    {
        return $this->__soapCall('GetUnitStatements', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes, strLocations,strBuildings must be a string with a semi-colon separation or an empty string
     *
     * @param GetAvailRates $parameters
     *
     * @return GetAvailRatesResponse
     */
    public function GetAvailRates(GetAvailRates $parameters)
    {
        return $this->__soapCall('GetAvailRates', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes, strLocations,strBuildings must be a string with a semi-colon separation or an empty string
     *
     * @param GetRatesAndRoomsPricesClusters $parameters
     *
     * @return GetRatesAndRoomsPricesClustersResponse
     */
    public function GetRatesAndRoomsPricesClusters(GetRatesAndRoomsPricesClusters $parameters)
    {
        return $this->__soapCall('GetRatesAndRoomsPricesClusters', [ $parameters ]);
    }

    /**
     * strChildren, strAttributes, strLocations,strBuildings must be a string with a semi-colon separation or an empty string
     *
     * @param GetRatesAndRoomsPricesBackToBack $parameters
     *
     * @return GetRatesAndRoomsPricesBackToBackResponse
     */
    public function GetRatesAndRoomsPricesBackToBack(GetRatesAndRoomsPricesBackToBack $parameters)
    {
        return $this->__soapCall('GetRatesAndRoomsPricesBackToBack', [ $parameters ]);
    }

    /**
     * @param UpdateAdvanceDepositNbrOfDays $parameters
     *
     * @return UpdateAdvanceDepositNbrOfDaysResponse
     */
    public function UpdateAdvanceDepositNbrOfDays(UpdateAdvanceDepositNbrOfDays $parameters)
    {
        return $this->__soapCall('UpdateAdvanceDepositNbrOfDays', [ $parameters ]);
    }

    /**
     * strChildren  must be a string with a semi-colon separation or an empty string
     *
     * @param GetUnfilteredRatesAndRoomsPrices $parameters
     *
     * @return GetUnfilteredRatesAndRoomsPricesResponse
     */
    public function GetUnfilteredRatesAndRoomsPrices(GetUnfilteredRatesAndRoomsPrices $parameters)
    {
        return $this->__soapCall('GetUnfilteredRatesAndRoomsPrices', [ $parameters ]);
    }
}
