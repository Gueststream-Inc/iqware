<?php

namespace Gueststream\PMS\IQWare\API;

class TSBDSvcChargeStayStatus
{
    const __default = 'sbdtNone';
    const sbdtNone = 'sbdtNone';
    const sbdtActiveFutur = 'sbdtActiveFutur';
    const sbdtDesactiveFutur = 'sbdtDesactiveFutur';
    const sbdtActiveDim = 'sbdtActiveDim';
    const sbdtDesactiveDimFromActive = 'sbdtDesactiveDimFromActive';
    const sbdtDesactiveDimFromDesactive = 'sbdtDesactiveDimFromDesactive';
    const sbdtNotApplicableSejourDim = 'sbdtNotApplicableSejourDim';
    const sbdtNotApplicableSejourAndDesactiveDim = 'sbdtNotApplicableSejourAndDesactiveDim';
    const sbdtNotDefault = 'sbdtNotDefault';
    const sdbtNotActiveForGroup = 'sdbtNotActiveForGroup';
    const sbdtResaFeeActiveFutur = 'sbdtResaFeeActiveFutur';
    const sbdtResaFeePosted = 'sbdtResaFeePosted';
    const sbdtReactivedDim = 'sbdtReactivedDim';
}
