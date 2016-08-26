<?php
use PHPUnit\Framework\TestCase;


class Test extends PHPUnit_Framework_TestCase
{
	public function test_check()
	{
		$kata = 'berlari';
		$stemmer = new \Algenza\Fztstemming\Stemmer;
		$hasil = $stemmer->process($kata);

		$this->assertEquals('lari',$hasil);

	}
}