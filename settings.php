<?php


if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox(
        'block_test_block/showcourses',
        get_string('showcourses', 'block_test_block'),
        get_string('showcoursesdesc', 'block_test_block'),
        0
    ));
}
