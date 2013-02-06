<?php

require_once 'Hacker.php';

class HackerTest extends PHPUnit_Framework_TestCase
{
	public function testReceiveTrainingLoadsService()
	{
		$hacker = new Hacker;
		
		$service = // mock service;
		
		$hacker->receiveTraining($service);
		$this->assertTrue($hacker->trainedIn('karate'));
		
	}
}