<?php

/**
 * URL GET proxy to cache requests
 */
function get_url($url)
{
  $cache_key = urlencode($url);
  $cache_file = sprintf('%s/cache/%s', dirname(__FILE__), $cache_key);

  $five_minutes_ago = (time() - 60 * 5);

  if (file_exists($cache_file) && (filemtime($cache_file) > $five_minutes_ago)) {
    // Cache file is less than five minutes old.
    // Don't bother refreshing, just use the file as-is.
    $res = file_get_contents($cache_file);
  } else {
    // Our cache is out-of-date, so load the data from our remote server,
    // and also save it over our cache for next time.
    $res = file_get_contents($url);

    if ($res) {
      file_put_contents($cache_file, $res, LOCK_EX);
    }
  }

  return $res;
}

/**
 * For when you can't be arsed to write `json_decode(get_url($url))`
 */
function get_json_url($url)
{
  return json_decode(get_url($url));
}
