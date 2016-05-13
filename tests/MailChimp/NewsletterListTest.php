<?php

namespace Spatie\Newsletter\Test;

use PHPUnit_Framework_TestCase;
use Spatie\Newsletter\NewsletterList;

class NewsletterListTest extends PHPUnit_Framework_TestCase
{
    protected $newsletterList;

    public function setUp()
    {
        parent::setUp();

        $this->newsletterList = new NewsletterList('subscriber', ['id' => 'abc123']);
    }

    /** @test */
    public function it_can_determine_the_name_of_the_list()
    {
        $this->assertSame('subscriber', $this->newsletterList->getName());
    }

    /** @test */
    public function it_can_determine_the_id_of_the_list()
    {
        $this->assertSame('abc123', $this->newsletterList->getId());
    }
}
