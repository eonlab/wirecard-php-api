<?php

namespace Wirecard\Element;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testRequestHasJob()
    {
        $job = $this->getMockBuilder('\Wirecard\Element\Job')
            ->disableOriginalConstructor()
            ->getMock();

        $request = new Response($job);
        $this->assertInstanceOf('\Wirecard\Element\Job', $request->job);
    }
}
 