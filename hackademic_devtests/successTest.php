<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SuccessTest extends PHPUnit_Framework_TestCase{
    
    public function testSuccess() {
        echo 'This is a sucessful test';
        assert(true);
    }
}