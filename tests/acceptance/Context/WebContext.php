<?php

namespace Tests\Acceptance\Context;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

final class WebContext extends MinkContext
{
    /**
     * @Given /^I have started the game$/
     */
    public function startGame()
    {
        $this->visit('index.php');
    }

    /**
     * @When /^I enter (.*)$/
     */
    public function enterNumber($number)
    {
        $this->fillField('number', $number);
    }

    /**
     * @Then /^(.*) is returned$/
     */
    public function expectedResult($result)
    {
        $this->pressButton('submit');

        throw new PendingException();
    }
}
