<?php

namespace Albertgrala\Crawlers;

use Albertgrala\Crawlers\CrawlerInterface;
use Albertgrala\Crawlers\BaseCrawler;
use Exception;

class PcComponentesCrawler extends BaseCrawler implements CrawlerInterface {

	public function extractPrice()
	{
		// looking for <meta itemprop="price" content="399"/>
		preg_match('/\<meta itemprop=\"price\" content=\"(.+?)\"\/\>/', $this->file, $matches);

		if (! isset($matches[1])) {
			throw new Exception("Product price not found", 1);
		}

		$this->price = $matches[1];
	}

}