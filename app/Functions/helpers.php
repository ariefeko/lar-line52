<?php

function buttonObj()
{
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

function confirmObj()
{
    $data = [
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

function carouselObj()
{
    $data = [
        "type" => "template",
        "altText" => "this is a carousel template",
        "template" => [
            "type" => "carousel",
            "columns" => [
                [
                  "thumbnailImageUrl" => "https://blog.twitter.com/content/dam/blog-twitter/official/en_us/products/2017/rethinking-our-default-profile-photo/Avatar-Blog2-Round1.png.img.fullhd.medium.png",
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
                    "thumbnailImageUrl" => "https://www.elegantthemes.com/blog/wp-content/uploads/2017/07/wordpress-lorem-ipsum.png",
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

function imageObj()
{
    $data = [
        "type" => "template",
        "altText" => "this is a image carousel template",
        "template" => [
            "type" => "image_carousel",
            "columns" => [
                [
                    "imageUrl" => "https://www.elegantthemes.com/blog/wp-content/uploads/2017/07/wordpress-lorem-ipsum.png",
                    "action" => [
                        "type" => "postback",
                        "label" => "Buy",
                        "data" => "action=buy&itemid=111"
                    ]
                ],
                [
                    "imageUrl" => "https://blog.twitter.com/content/dam/blog-twitter/official/en_us/products/2017/rethinking-our-default-profile-photo/Avatar-Blog2-Round1.png.img.fullhd.medium.png",
                    "action" => [
                        "type" => "message",
                        "label" => "Yes",
                        "text" => "yes"
                    ]
                ],
                [
                    "imageUrl" => "https://images-na.ssl-images-amazon.com/images/I/41KOtlUihtL.jpg",
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

function richmenu()
{
    // curl -v -X POST https://api.line.me/v2/bot/richmenu \
    // -H 'Authorization: Bearer {channel access token}' \
    // -H 'Content-Type:application/json' \
    // -d \
    $data = [
        "size" => [
            "width" => 2500,
            "height" => 1686
        ],
        "selected" => false,
        "name" => "Controller",
        "chatBarText" => "Controller",
        "areas" => [
            [
              "bounds" => [
                  "x" => 551,
                  "y" => 325,
                  "width" => 321,
                  "height" => 321
              ],
                "action" => [
                    "type" => "message",
                    "text" => "up"
                ]
            ],
            [
                "bounds" => [
                    "x" => 876,
                    "y" => 651,
                    "width" => 321,
                    "height" => 321
                ],
                "action" => [
                    "type" => "message",
                    "text" => "right"
                ]
            ],
            [
                "bounds" => [
                    "x" => 551,
                    "y" => 972,
                    "width" => 321,
                    "height" => 321
                ],
                "action" => [
                    "type" => "message",
                    "text" => "down"
                ]
            ],
            [
                "bounds" => [
                    "x" => 225,
                    "y" => 651,
                    "width" => 321,
                    "height" => 321
                ],
                "action" => [
                    "type" => "message",
                    "text" => "left"
                ]
            ],
            [
                "bounds" => [
                    "x" => 1433,
                    "y" => 657,
                    "width" => 367,
                    "height" => 367
                ],
                "action" => [
                    "type" => "message",
                    "text" => "btn b"
                ]
            ],
            [
                "bounds" => [
                    "x" => 1907,
                    "y" => 657,
                    "width" => 367,
                    "height" => 367
                ],
                "action" => [
                    "type" => "message",
                    "text" => "btn a"
                ]
            ]
        ]
    ];

    return $data;
}