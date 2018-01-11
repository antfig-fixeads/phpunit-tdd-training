<?php

namespace Tdd;

use PHPUnit\Framework\TestCase;
use Tdd\ValueObjects\Email;
use Tdd\ValueObjects\Name;

class UserTest extends TestCase
{
    /** @var User */
    private $user;

    protected function setUp()
    {
        $this->user = new User(new Name('Jon', 'Doe'), new Email('jon@doe.com'));
    }

    public function testUserHasName()
    {
        $this->assertEquals('Jon Doe', $this->user->getName());
    }

    public function testUserHasEmail()
    {
        $this->assertEquals('jon@doe.com', $this->user->getEmail());
    }

    public function testUserHasPhone()
    {
        $this->assertEquals(0, $this->user->getPhone());
    }

}
