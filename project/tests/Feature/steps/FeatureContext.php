<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Tests\TestCase;
use Tests\CreatesApplication;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    use CreatesApplication;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

        parent::__construct();

        putenv('APP_ENV=testing');
        putenv('DB_CONNECTION=sqlite');
        putenv('DB_DATABASE=:memory:');

        $this->setUp();

        $this->withoutExceptionHandling();
    }

    /** @BeforeScenario */
    public function before(BeforeScenarioScope $scope)
    {
        $this->artisan('migrate:fresh');
    }

    /**
     * @Given some state
     */
    public function someState()
    {
        throw new PendingException();
    }

    /**
     * @When some event
     */
    public function someEvent()
    {
        throw new PendingException();
    }

    /**
     * @Then some result
     */
    public function someResult()
    {
        throw new PendingException();
    }
}
