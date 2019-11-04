<?php

namespace block_mytest;

defined('MOODLE_INTERNAL') || die();

class model_property_testcase extends \advanced_testcase { 
    public function test_have_properties() {
        $actual_title = 'Helle me';
        $actual_message = 'My message';

        $model = new model();
        $model->title = $actual_title;
        $model->message = $actual_message;

        $this->assertEquals($actual_title, $model->title);
        $this->assertEquals($actual_message, $model->message);
    }
}