<?php

namespace Albergrala\Crawlers;

use Albertgrala\Crawlers\PcComponentesCrawler;

class PcComponentesCrawlerTest extends \PHPUnit_Framework_TestCase
{

	protected function setUp()
	{
		$url = 'http://www.pccomponentes.com/kingston_valueram_4gb_ddr3_1333mhz_pc3_10600_cl9.html';
		$this->crawler = new PcComponentesCrawler($url);
	}

	protected function tearDown()
	{

	}

	public function testCrawlsUrl()
	{
		$this->crawler->crawl();
		$this->isTrue($this->crawler->isCrawled());
	}


	public function testExtractPriceReturnsAndInteger()
	{
		$this->crawler->crawl();
		$this->crawler->extractPrice();
                $this->assertInternalType('int', $this->crawler->getPrice());
	}

}