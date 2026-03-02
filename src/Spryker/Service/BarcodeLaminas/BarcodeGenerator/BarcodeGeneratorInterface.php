<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\BarcodeLaminas\BarcodeGenerator;

use Generated\Shared\Transfer\BarcodeRequestTransfer;
use Generated\Shared\Transfer\BarcodeResponseTransfer;

interface BarcodeGeneratorInterface
{
    public function generateBarcode(BarcodeRequestTransfer $barcodeRequestTransfer): BarcodeResponseTransfer;
}
