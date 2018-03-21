<?php

function buttonObj() {
    $data = [
            "type" => "template",
            "altText" => "Ini button template",
            "template" => [
                "type" => "buttons",
                "thumbnailImageUrl" => "https://blog.twitter.com/content/dam/blog-twitter/official/en_us/products/2017/rethinking-our-default-profile-photo/Avatar-Blog2-Round1.png.img.fullhd.medium.png",
                "imageAspectRatio" => "rectangle",
                "imageSize" => "cover",
                "imageBackgroundColor" => "#FFFFFF",
                "title" => "Menu",
                "text" => "Please select",
                "defaultAction" => [
                    "type" => "uri",
                    "label" => "View detail",
                    "uri" => "http://example.com/page/123"
                ],
                "actions" => [
                    [
                        "type" => "postback",
                        "label" => "Buy",
                        "data" => "action=buy&itemid=123"
                    ],
                    [
                        "type" => "postback",
                        "label" => "Add to cart",
                        "data" => "action=add&itemid=123"
                    ],
                    [
                        "type" => "uri",
                        "label" => "View detail",
                        "uri" => "http://example.com/page/123"
                    ]
                ]
            ]
        ];

    return $data;
}

function confirmObj() {
    [
        "type" => "template",
        "altText" => "this is a confirm template",
        "template" => [
            "type" => "confirm",
            "text" => "Apa Anda yakin?",
            "actions" => [
                [
                    "type" => "message",
                    "label" => "Ya",
                    "text" => "yes"
                ],
                [
                    "type" => "message",
                    "label" => "Tidak",
                    "text" => "no"
                ]
            ]
        ]
    ];

    return $data;
}

function carouselObj() {
    [
        "type" => "template",
        "altText" => "this is a carousel template",
        "template" => [
            "type" => "carousel",
            "columns" => [
                [
                  "thumbnailImageUrl" => "https://example.com/bot/images/item1.jpg",
                  "imageBackgroundColor" => "#FFFFFF",
                  "title" => "this is menu",
                  "text" => "description",
                  "defaultAction" => [
                      "type" => "uri",
                      "label" => "View detail",
                      "uri" => "http://example.com/page/123"
                  ],
                  "actions" => [
                      [
                          "type" => "postback",
                          "label" => "Buy",
                          "data" => "action=buy&itemid=111"
                      ],
                      [
                          "type" => "postback",
                          "label" => "Add to cart",
                          "data" => "action=add&itemid=111"
                      ],
                      [
                          "type" => "uri",
                          "label" => "View detail",
                          "uri" => "http://example.com/page/111"
                      ]
                  ]
                ],
                [
                    "thumbnailImageUrl" => "https://example.com/bot/images/item2.jpg",
                    "imageBackgroundColor" => "#000000",
                    "title" => "this is menu",
                    "text" => "description",
                    "defaultAction" => [
                        "type" => "uri",
                        "label" => "View detail",
                        "uri" => "http://example.com/page/222"
                    ],
                    "actions" => [
                        [
                            "type" => "postback",
                            "label" => "Buy",
                            "data" => "action=buy&itemid=222"
                        ],
                        [
                            "type" => "postback",
                            "label" => "Add to cart",
                            "data" => "action=add&itemid=222"
                        ],
                        [
                            "type" => "uri",
                            "label" => "View detail",
                            "uri" => "http://example.com/page/222"
                        ]
                    ]
                ]
            ],
            "imageAspectRatio" => "rectangle",
            "imageSize" => "cover"
        ]
    ];

    return $data;
}

function imageObj() {
    $data = [
        "type" => "template",
        "altText" => "this is a image carousel template",
        "template" => [
            "type" => "image_carousel",
            "columns" => [
                [
                    "imageUrl" => "https://example.com/bot/images/item1.jpg",
                    "action" => [
                        "type" => "postback",
                        "label" => "Buy",
                        "data" => "action=buy&itemid=111"
                    ]
                ],
                [
                    "imageUrl" => "https://example.com/bot/images/item2.jpg",
                    "action" => [
                        "type" => "message",
                        "label" => "Yes",
                        "text" => "yes"
                    ]
                ],
                [
                    "imageUrl" => "https://example.com/bot/images/item3.jpg",
                    "action" => [
                        "type" => "uri",
                        "label" => "View detail",
                        "uri" => "http://example.com/page/222"
                    ]
                ]
            ]
        ]
    ];

    return $data;
}

function btnTemplate()
{
    $client = new GuzzleHttp\Client(['headers' => ['Content-Type'  => 'application/json','Authorization' => 'Bearer ' . env('LINE_BOT_ACCESS_TOKEN')]]);
    $res = $client->request('POST', env('LINE_MESSAGE') . '/reply', ['replyToken' => $replyToken,'body' => json_encode(buttonObj())]);

    return json_decode($res->getBody()->getContents());
}