<?php
/**
 * @package     block_mytest
 * @developer   Sam Møller
 * @copyright   2019 Praxis
 * @companyinfo https://praxis.dk
 * @since       04-11-2019
 */

namespace block_mytest;

defined('MOODLE_INTERNAL') || die();


class block_mytest_property_test extends \advanced_testcase {
    public function test_have_properties() {
        $actual_title = 'Helle me';
        $actual_message = 'My message';

        $model = new model();
        $model->title = $actual_title;
        $model->message = $actual_message;

        $this->assertEquals($actual_title, $model->title);
        $this->assertEquals($actual_message, $model->message);
    }

    public function test_access_unset_property() {
        $title = 'failed';
        try {
            $model = new model();
            $title = $model->title;
        }
        catch (\Exception $exception) {
            $this->assertTrue($title === 'failed');
        }
    }

    public function test_mean_to_fail() {
        throw new \Exception("This mean to failed...");
    }
}