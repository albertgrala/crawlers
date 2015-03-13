<?php

namespace Albertgrala\Crawlers;

use Albertgrala\Crawlers\UrlNotCrawledException;

abstract class BaseCrawler {

	protected $url;
	protected $price = NULL;
	protected $file;
	protected $crawled = FALSE;

	public function __construct($url)
	{
		$this->url = $url;
	}

	public function setUrl($url)
	{
		$this->url = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getFile()
	{
		return $this->file;
	}

	public function isCrawled()
	{
		return $this->crawled === true;
	}

	public function crawl()
	{
		$file = @file_get_contents($this->url);
		if ($file === FALSE) {
			throw new UrlNotCrawledException($this->url);
		}
		$this->file = $file;
		$this->crawled = TRUE;
	}
}