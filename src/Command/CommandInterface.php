<?php
/**
 */

namespace Nbobtc\Command;

/**
 */
interface CommandInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param ClientInterface $client
     */
    public function setClient($client);

    /**
     * @return array
     */
    public function getArrayResult();

    /**
     * @return \stdClass
     */
    public function getObjectResult();
}