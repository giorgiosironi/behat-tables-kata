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
            throw new RuntimeException("Expected $output but it was {$this->fizzbuzz->value()}");
        }
    }

    /**
     * @Given the following items are in the cart:
     */
    public function theFollowingItemsAreInTheCart(TableNode $table)
    {
        $this->cart = new Cart();
        foreach ($table->getHash() as $item) {
            $this->cart->add($item['name'], $item['price']);
        }
    }

    /**
     * @When I check out
     */
    public function iCheckOut()
    {
    }

    /**
     * @Then I pay :total
     */
    public function iPay($total)
    {
        $total = (int) $total;
        if ($this->cart->total() !== $total) {
            throw new RuntimeException("Expected $total but it was {$this->cart->total()}");
        }
    }
}
