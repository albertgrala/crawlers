<?php

namespace Albertgrala\Crawlers;

interface CrawlerInterface {

	public function setUrl($url);

	public function getUrl();

	public function getPrice();

	public function crawl();

	public function isCrawled();
}