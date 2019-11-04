<?php
namespace block_mytest\output;

defined('MOODLE_INTERNAL') || die();

use plugin_renderer_base;
use renderable;

class renderer extends plugin_renderer_base {
    public function render_main(renderable $main) {
        $data = $main->export_for_template($this);
        return parent::render_from_template('block_mytest/main', $data);
    }
}