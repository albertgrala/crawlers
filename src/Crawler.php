<?php

namespace Albertgrala\Crawlers;

interface Crawler {

	public function setUrl($url);

	public function getUrl();

	public function getPrice();

	public function crawl();

	public function isCrawled();
}