<?php
/**
 * 
 */
use \SixPlus\Page;

class PageTest extends PHPUnit_Framework_TestCase
{
	public function testGetContents()
	{
		$contents = 'Page contents';
		$page = new Page($contents);
		
		$this->assertEquals($contents, $page->getContents());
	}
}
