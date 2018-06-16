<?php 

return function($site, $pages, $page) {

  return [
    'countries' => $page->children()->visible()
  ];

};