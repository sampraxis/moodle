<?php

defined('MOODLE_INTERNAL') || die();

class block_mytest extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_mytest');
    }

    public function has_config() {
        return false;
    }

    public function applicable_formats() {
        return [
            'all' => true
        ];
    }

    public function instance_allow_multiple() {
        return true;
    }

    public function get_content() {
        if (isset($this->content)) {
            return $this->content;
        }

        return $this->content;
    }
}