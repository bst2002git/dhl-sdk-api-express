<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

/**
 * The client detail is an optional node for reference use, and does not affect functionality.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ClientDetail
{
    /**
     * This field is for internal use only.
     *
     * @var null|string
     */
    private $sso;

    /**
     * This field is for internal use only.
     *
     * @var null|string
     */
    private $plant;

    /**
     * Returns the SSO value.
     *
     * @return null|string
     */
    public function getSso()
    {
        return $this->sso;
    }

    /**
     * Sets the SSO value.
     *
     * @param string $sso The SSO value
     *
     * @return self
     */
    public function setSso($sso)
    {
        $this->sso = $sso;
        return $this;
    }

    /**
     * Returns the plant value.
     *
     * @return null|string
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * Sets the plant value.
     *
     * @param string $plant The plant value
     *
     * @return self
     */
    public function setPlant($plant)
    {
        $this->plant = $plant;
        return $this;
    }
}
