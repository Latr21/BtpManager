<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCreation(): void
    {
        $user = new User();
        $user->setEmail("test@example.com");
        $user->setPassword("hashedpassword");

        $this->assertSame("test@example.com", $user->getEmail());
        $this->assertSame("test@example.com", $user->getUserIdentifier());
        $this->assertSame("hashedpassword", $user->getPassword());
    }

    public function testRoles(): void
    {
        $user = new User();

        $this->assertContains("ROLE_USER", $user->getRoles());

        $user->setRoles(["ROLE_ADMIN"]);
        $this->assertContains("ROLE_ADMIN", $user->getRoles());
        $this->assertContains("ROLE_USER", $user->getRoles());
    }

    public function testEraseCredentials(): void
    {
        $user = new User();
        $user->eraseCredentials();
        $this->assertTrue(true); // Juste pour valider l'exécution de la méthode
    }
}