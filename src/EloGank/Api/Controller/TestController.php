<?php

namespace EloGank\Api\Controller;

use EloGank\Api\Component\Controller\Controller;

/**
 * @author Sylvain Lorinet <sylvain.lorinet@gmail.com>
 */
class TestController extends Controller
{
    public function testMethod($summonerId, $acctId)
    {
        return $summonerId + $acctId;
    }
} 