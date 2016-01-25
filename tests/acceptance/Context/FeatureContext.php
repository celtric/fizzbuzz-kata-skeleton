<?php

namespace Tests\Acceptance\Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

final class FeatureContext implements Context
{
    /**
     * @Given /^I have started the game$/
     */
    public function startGame()
    {
        throw new PendingException();
    }

    /**
     * @When /^I enter (.*)$/
     */
    public function enterNumber($number)
    {
        throw new PendingException();
    }

    /**
     * @Then /^(.*) is returned$/
     */
    public function expectedResult($result)
    {
        throw new PendingException();
    }
}
