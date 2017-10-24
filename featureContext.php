<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\RawMinkContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
 /** @Given that I am on the Home page */
	public function iAmOnMequilibrium()

    {
	$this->driver->get('https://mequilibrium.com');
    }
   
	/** @When I click on "Privacy" */
    public function clickLink()

    {
    $link = $this->driver->findElement(WebDriverBy::id('https://www.mequilibrium.com/privacy/'));
    $link->click();	
    }

   /** @Then I should see some text */
    public function iShouldSeeSomeText()
   
   	{
     $this->iShouldSeeSomeText();   
    }
	
	
    /** @And I should see the last update date */
	public function getCurrentDate() 
	
	{
    return $this->currentdate = $this->currentDate()->format('F Y');
	}

}
