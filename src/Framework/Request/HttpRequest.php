<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Framework\Request;


use ArrayObject;
use wert2all\electro_api\Framework\Request\Http\Get;

class HttpRequest implements IRequest
{
    /** @var Get */
    protected $get;
    /** @var  ArrayObject */
    protected $baseArray;
    /** @var  ArrayObject */
    protected $otherUrlArray;

    /**
     * HttpRequest constructor.
     */
    public function __construct()
    {
        $this->baseArray = new ArrayObject();
        $this->otherUrlArray = new ArrayObject();

        $this->makeBaseUrl(
            $this->removeGet($_SERVER['REQUEST_URI'])
        );
    }

    /**
     * @param  string $url
     */
    private function makeBaseUrl($url)
    {
        $url = $this->splitUrl($url);

        $diffFlag = false;
        $counter = 0;

        $serverIterator = (new ArrayObject($this->splitUrl($_SERVER['SCRIPT_NAME'])))->getIterator();
        while ($serverIterator->valid() and $diffFlag !== true) {
            if ($serverIterator->current() == $url[$counter]) {
                $this->baseArray->append($serverIterator->current());
            } else {
                $diffFlag = true;
            }
            $serverIterator->next();
            $counter++;
        }
        $this->otherUrlArray = new ArrayObject(
            array_slice($url, $this->baseArray->count(), count($url))
        );
    }

    /**
     * @param string $url
     * @return array
     */
    private function splitUrl($url)
    {
        return explode("/", $url);
    }

    private function removeGet($requestURL)
    {
        if (false !== $spliced = explode("?", $requestURL)) {
            if (isset($spliced[1])) {
                $this->get = new Get($spliced[1]);
                return $spliced[0];
            }
        }
        return $requestURL;
    }
}
