<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $shipperAddress = new ShipperAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin'
        );

        $shipperAccountNumber = 'XXXXXXXXX';

        $recipientAddress = new RecipientAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b']
        );

        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = true,
            $termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR,
            $contentType = ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $readyAtDate = 238948923
        );

        $package = new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM = 'SI',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'SU'
        );

        $packages = [$package, $package];

        $insurance = new Insurance(
            $value = 99.99,
            $currencyCode = 'EUR'
        );

        $rateRequest = new RateRequest(
            $shipperAddress,
            $shipperAccountNumber,
            $recipientAddress,
            $shipmentDetails,
            $packages,
            $insurance
        );

        self::assertInstanceOf(RateRequestInterface::class, $rateRequest);
        self::assertEquals($shipperAddress, $rateRequest->getShipperAddress());
        self::assertEquals($shipperAccountNumber, $rateRequest->getShipperAccountNumber());
        self::assertEquals($recipientAddress, $rateRequest->getRecipientAddress());
        self::assertEquals($shipmentDetails, $rateRequest->getShipmentDetails());
        self::assertEquals($packages, $rateRequest->getPackages());
        self::assertEquals($insurance, $rateRequest->getInsurance());
    }
}
