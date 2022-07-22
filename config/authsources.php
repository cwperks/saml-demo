<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'opensearch-dashboards' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'NameID' => 'admin',
            'email' => 'user1@example.com',
            'Role' => array('admin'),
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
            'NameID' => 'craig',
            'Role' => array('admin'),
        ),
    ),

);