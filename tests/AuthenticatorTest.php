<?php

use PHPUnit\Framework\TestCase;

include __DIR__ . '/../Authenticator.php';
include __DIR__ . '/../LoginAttempt.php';

class AuthenticatorTest extends TestCase
{
    protected $authenticator;

    protected function setUp()
    {
        $this->authenticator = new Authenticator(
            'fa23test',
            'mrtest',
            'goingWild!'
        );
    }

    protected function tearDown()
    {
    }

    function testUnknownUserFails()
    {
        $loginAttempt = $this->authenticator->login(
            'mrunknown',
            'some_password'
        );
        $this->assertTrue($loginAttempt->has_failed);
    }
}

?>
