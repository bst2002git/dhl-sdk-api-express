<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * A label template.
 *
 * Any valid DHL Express label template (please contact your DHL Express IT representative for a list of labels)
 * – If this node is left blank then the default DHL e-commerce label template will be used.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class LabelTemplate extends AlphaNumeric
{
    const MAX_LENGTH = 20;
}
