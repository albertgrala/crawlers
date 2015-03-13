<?php

namespace Albertgrala\Crawlers;

use Exception;

class UrlNotCrawledException extends Exception
{

    /**
     * @var string
     */
    protected $url;

    /**
     * Constructor.
     *
     * @param string     $url
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($url, $code = 0, Exception $previous = null)
    {
        $this->url = $url;

        parent::__construct('Url Not Crawled: '.$this->getUrl(), $code, $previous);
    }

    /**
     * Get the url which was not found.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}