<?php

require_once 'AgentReplication.php';

class AgentReplicationTest extends PHPUnit_Framework_TestCase
{

	public function testOnlySmithCanReplicate(Agent $agent, $name, $isNowAgent)
	{
		$victim = new Program;
		
		$replication = new AgentReplication;
		$agent->setName($name);
		
		$replication->replicate($agent, $victim);
		
		if ($isNowAgent) {
			$this->assertEquals('Agent', get_class($victim));
		} else {
			$this->assertEquals('Program', get_class($victim));
		}
		
	}
	
	public function agents()
	{
		
	}
}