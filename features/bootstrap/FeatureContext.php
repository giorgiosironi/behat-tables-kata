<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Behat context class.
 */
class FeatureContext implements SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given the input is :input
     */
    public function theInputIs($input)
    {
        $this->input = $input;
    }

    /**
     * @When it is converted
     */
    public function itIsConverted()
    {
        $this->fizzbuzz = FizzBuzz::on($this->input);
    }

    /**
     * @Then it becomes :output
     */
    public function itBecomes($output)
    {
        if ($this->fizzbuzz->value() != $output) {
            throw new RuntimeException();
        }
    }
}
