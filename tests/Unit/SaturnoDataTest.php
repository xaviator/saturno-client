<?php

use Xaviator\SaturnoClient\SaturnoData;

test('it_returns_not_implemented', function () {

    $saturno = new SaturnoData();
    $response = $saturno->sendRequest('');

    $this->assertSame('ERROR: NOT IMPLEMENTED',$response);

});