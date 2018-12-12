<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 12.12.2018
 * Time: 9:36
 */
include ('../../message_process.php');
use PHPUnit\Framework\TestCase;

class message_processTest extends TestCase
{

    public function test_inputNoTags()
    {
        $input = 'email<br>';
        $input1 = 'email<<';
        $input2 = '<?email';
        $output = test_input($input);
        $output1 = test_input($input1);
        $output2 = test_input($input2);
        $this->assertContains('>', $output);
        $this->assertContains('<', $output1);
        $this->assertContains('?', $output2);
    }
    public function test_inputNoSlashes()
    {
        $input = 'email\y';
        $outputs = test_input($input);
        $this->assertContains('\\', $outputs);
    }
    public function test_inputLength(){
        $input = 'normalinput here';
        $input1 = 'normal';
        $input2 = '$$\\input\@';
        $trimmed = test_input($input);
        $trimmed1 = test_input($input1);
        $trimmed2 = test_input($input2);
        $this->assertGreaterThanOrEqual(strlen($trimmed), strlen($input));
        $this->assertGreaterThanOrEqual( strlen($trimmed1), strlen($input1));
        $this->assertGreaterThanOrEqual( strlen($trimmed2), strlen($input2));
    }





}
