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

		$kata = 'memukul';
		$hasil = $stemmer->process($kata);

		$this->assertEquals('pukul',$hasil);

		$kata = 'melakukan';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('laku',$hasil);

		$kata = 'melindungi';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('lindung',$hasil);

		$kata = 'pengalaman';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('alam',$hasil);

		$kata = 'penyerangan';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('serang',$hasil);

		$kata = 'pemutihan';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('putih',$hasil);

		$kata = 'tersebar';
		$hasil = $stemmer->process($kata);
		
		$this->assertEquals('sebar',$hasil);
	}
}