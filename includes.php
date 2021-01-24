<?php
global $categories;
$cur_category = $categories[0]; // default to the latest category
$assigned_categories = get_the_category();
if (count($assigned_categories) > 0) {
    foreach ($assigned_categories as $assigned_category) {
        foreach ($categories as $category) {
            if ($assigned_category->slug == $category['name']) {
                $cur_category = $category;
            }
        }
    }
}

/*
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($url);
$path = $parsed_url['path'];
$path_components = explode('/', $path);
if ($path_components[1] == 'category') {
    $callback = function ($value, $key) use ($path_components) {
        return ($value['name'] == $path_components[3]);
    };
    $cur_category = array_find($callback, $categories);
    // if we can't find by name, find by year
    if (!$cur_category) {
        $callback = function ($value, $key) use ($path_components) {
            return ($value['year'] == $path_components[2]);
        };
        $cur_category = array_find($callback, $categories);
    }
    // finally, default to last category
    if (!$cur_category) {
        $cur_category = $categories[0]; // default to the latest category
    }
} else {
    parse_str($parsed_url['query'], $query_string_vars);
    if (array_key_exists('cat', $query_string_vars)) {
        $callback = function ($value, $key) use ($query_string_vars) {
            return ($value['id'] == $query_string_vars['cat']);
        };
        $cur_category = array_find($callback, $categories);
    }
}
*/

function get_page_url_by_pagename($pagename) {
  $p = get_posts("pagename=$pagename");
  $p = $p[0];
  return $p->guid;
}

function array_find(callable $callback, array $array) {
  foreach ($array as $key => $value) {
    if ($callback($value, $key, $array)) {
      return $value;
    }
  }
  return false;
}

