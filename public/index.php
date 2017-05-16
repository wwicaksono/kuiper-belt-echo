<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

use LINE\LINEBot\EchoBot\Dependency;
use LINE\LINEBot\EchoBot\Route;
use LINE\LINEBot\EchoBot\Setting;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('WJMuQpbTs/jom1dzZN4iZMO3qMKJ2BeiZXXLh5fl21FfXoS20ZpB+Lw4wROmcKUWnMf1K1cYW2r5qlTXPbiPio5vlGY/OxRf3tySCdOhuZnNXk+QW9k63zCcA1w4jPmOctQzavGFj89/kL6LQw3GXgdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '050f108e5fc26a59327aa107e69dc5c2']);

echo 'aaa'; die;
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

// require_once __DIR__ . '/../vendor/autoload.php';

// $setting = Setting::getSetting();
// $app = new Slim\App($setting);

// (new Dependency())->register($app);
// (new Route())->register($app);

// $app->run();
