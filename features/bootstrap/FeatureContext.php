<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{

    /**
     * @Then I should be able to do something with Laravel
     */
    public function iShouldBeAbleToDoSomethingWithLaravel()
    {
        $environmentFileName = app()->environmentFile();
        $environmentName = env('APP_ENV');

        PHPUnit::assertEquals('.env.behat', $environmentFileName);
        PHPUnit::assertEquals('acceptance', $environmentName);
    }

}
