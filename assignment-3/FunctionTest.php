<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'function.php';

final class RegisterTest extends TestCase
{
    public function testEmpty()
    {
        $message = RegisterFunc($_GET['EMPTY']);
        $this->assertSame($message, "Please fill in the blanks");
    }
    public function testValidCharacter()
    {
        $message = RegisterFunc($_GET['characters']);
        $this->assertSame($message, "Please enter valid characters");
    }
    public function testValidEmail()
    {
        $message = RegisterFunc($_GET['ValidEmail']);
        $this->assertSame($message, "Please enter a valid email address");
    }
    public function testUserTaken()
    {
        $message = RegisterFunc($_GET['Email Taken']);
        $this->assertSame($message, "Email is already taken");
    }
    public function testValidFormat()
    {
        $message = RegisterFunc($_GET['Invalid_Format']);
        $this->assertSame($message, "Invalid image format");
    }
    public function testTooLarge()
    {
        $message = RegisterFunc($_GET['Too_Large']);
        $this->assertSame($message, "Image too large");
    }
    public function testSuccess()
    {
        $message = RegisterFunc($_GET['Success']);
        $this->assertSame($message, "You have successfully made an account!");
    }
}

final class LoginTest extends TestCase
{
    public function testEmpty()
    {
        $message = LoginFunc($_GET['empty']);
        $this->assertSame($message, "Please enter your information in the blanks.");
    }
    public function testValidUsername()
    {
        $message = LoginFunc($_GET['invalid']);
        $this->assertSame($message, "The Username is invalid");
    }
    public function testValidEmail()
    {
        $message = LoginFunc($_GET['password_invalid']);
        $this->assertSame($message, "This Username and Password combination is invalid");
    }
    public function testUserTaken()
    {
        $message = RegisterFunc($_GET['Email Taken']);
        $this->assertSame($message, "Email is already taken");
    }
    public function testValidFormat()
    {
        $message = RegisterFunc($_GET['Invalid_Format']);
        $this->assertSame($message, "Invalid image format");
    }
    public function testTooLarge()
    {
        $message = RegisterFunc($_GET['Too_Large']);
        $this->assertSame($message, "Image too large");
    }
    public function testSuccess()
    {
        $message = RegisterFunc($_GET['Success']);
        $this->assertSame($message, "You have successfully made an account!");
    }
}



