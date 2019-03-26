<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'function.php';

final class RegisterTest extends TestCase
{
    public function testEmpty()
    {
        $_GET['Empty'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Please fill in the blanks");
    }
    public function testValidCharacter()
    {
        $_GET['characters'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Please enter valid characters");
    }
    public function testValidEmail()
    {
        $_GET['ValidEmail'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Please enter a valid email address");
    }
    public function testUserTaken()
    {
        $_GET['Email Taken'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Email is already taken");
    }
    public function testValidFormat()
    {
        $_GET['Invalid_Format'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Invalid image format");
    }
    public function testTooLarge()
    {
        $_GET['Too_Large'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "Image too large");
    }
    public function testSuccess()
    {
        $_GET['Success'] = "";
        $message = RegisterFunc();
        $this->assertSame($message, "You have successfully made an account!");
    }
}

final class LoginTest extends TestCase
{
    public function testEmpty()
    {
        $_GET['empty'] = "";
        $message = LoginFunc();
        $this->assertSame($message, "Please enter your information in the blanks.");
    }
    public function testValidUsername()
    {
        $_GET['invalid'] = "";
        $message = LoginFunc();
        $this->assertSame($message, "The Username is invalid");
    }
    public function testValidUsernameAndEmail()
    {
        $_GET['password_invalid'] = "";
        $message = LoginFunc();
        $this->assertSame($message, "This Username and Password combination is invalid");
    }
}



