<?php

namespace Albertgrala\Crawlers;

use Albertgrala\Crawlers\Crawler;
use Albertgrala\Crawlers\BaseCrawler;

class AmazonEsCrawler extends BaseCrawler implements Crawler {

	public function extractPrice()
	{
		// looking for <span class="price bxgy-item-price">EUR 126,30</span>
		preg_match('/\<span class=\"price bxgy-item-price\"\>EUR (.+)?\<\/span\>/', $this->file, $matches);

		if (! isset($matches[1])) {
			throw new Exception("Product price not found", 1);
		}

		$this->price = $matches[1];
	}

}