<?php
use Facebook\WebDriver\WebDriverBy;
class fdAssertions extends fdFunctions {
    /** \fn Function that test if the login failed */
    protected function assertLoginFailed ()
    {
      $this->assertStringContainsString('http://demo-dev.fusiondirectory.org/fusiondirectory/', $this->driver->getCurrentUrl());
      $element = $this->driver->findElement(WebDriverBy::id('window-footer'));
      $this->assertEquals('Invalid credentials', $element->getText());
    }
  
}