<?php

function buttonTemplate()
{
    $data = [
          "type" => "template",
          "altText" => "This is a buttons template",
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