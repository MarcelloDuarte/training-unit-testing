<?php

require_once 'Anomaly.php';

class AnomalyTest extends PHPUnit_Framework_TestCase
{
	public function testSpecificAnomalyIsInvokedWhenItDisplays()
	{
		$dejaVu = // mock Anomaly
		       
		$anomaly = $dejaVu->display();
		$this->assertSame('I just saw the same cat twice!!', $anomaly);
	}
	
}