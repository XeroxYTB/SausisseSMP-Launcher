<?php

$instance['SausisseSMP'] = array_merge($instance['SausisseSMP'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "1.20.1-47.4.4"
    ),
    "verify" => false,
    "ignored" => array(
        'config',
        'logs',
        'saves',
        'screenshots',
        'shaderpacks',
        'options.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "SausisseSMP",
        "ip" => "178.32.106.234",
        "port" => 25599
    )
));
?>
