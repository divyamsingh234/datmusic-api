<?php
/**
 * Copyright (c) 2017  Alashov Berkeli
 * It is licensed under GNU GPL v. 2 or later. For full terms see the file LICENSE.
 */

$app->get('search', 'ApiController@search');
$app->get('{key}/{id}', 'ApiController@download');
$app->get('stream/{key}/{id}', 'ApiController@stream');
$app->get('bytes/{key}/{id}', 'ApiController@bytes');
