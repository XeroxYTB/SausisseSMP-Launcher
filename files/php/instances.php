<?php

$instance['SausisseSMPv1'] = array_merge($instance['SausisseSMPv1'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'options.txt',
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
