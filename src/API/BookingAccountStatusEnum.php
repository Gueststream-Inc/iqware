<?php

namespace Gueststream\PMS\IQWare\API;

class BookingAccountStatusEnum
{
    const __default = 'Reservation';
    const Reservation = 'Reservation';
    const Cancelled = 'Cancelled';
    const NoShow = 'NoShow';
    const WaitingList = 'WaitingList';
    const InHouse = 'InHouse';
    const CheckedOut = 'CheckedOut';
}
