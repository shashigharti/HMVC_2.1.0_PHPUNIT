<?php

class displayMessageHelperTest extends PHPUnit_Framework_TestCase
{

    var $CI;

    function setUp()
    {
        $this->CI = & get_instance();
    }

    function testDisplaymessage()
    {
        $this->CI->load->helper('displaymessage');
        $actual = display_message(); 
        $this->assertEquals("this is test helper file", $actual);
        
    }
}