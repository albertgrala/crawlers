<?php

namespace Albertgrala\Crawlers;

use Albertgrala\Crawlers\CrawlerInterface;
use Albertgrala\Crawlers\BaseCrawler;
use Exception;
use Money\Money;

class AmazonEsCrawler extends BaseCrawler implements CrawlerInterface {

	public function extractPrice()
	{
		// looking for <span class="price bxgy-item-price">EUR 126,30</span>
		preg_match('/\<span class=\"price bxgy-item-price\"\>EUR (.+)?\<\/span\>/', $this->file, $matches);

		if (! isset($matches[1])) {
			throw new Exception("Product price not found", 1);
		}

		$this->price = Money::stringToUnits($matches[1]);
	}

}