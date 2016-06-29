<?php

namespace Gueststream\PMS\IQWare\API;

class UpdateAccountLoginEnum
{
    const __default = 'ulUnknownError';
    const ulUnknownError = 'ulUnknownError';
    const ulInvalidLoginPassword = 'ulInvalidLoginPassword';
    const ulNewLoginUnavailable = 'ulNewLoginUnavailable';
    const ulSuccess = 'ulSuccess';
    const ulMinimumLengthOfLoginError = 'ulMinimumLengthOfLoginError';
    const ulMinimumLengthOfPasswordError = 'ulMinimumLengthOfPasswordError';
}
