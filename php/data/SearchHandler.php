<?php

require_once 'QueryHandler.php';

class SearchHandler extends QueryHandler {    
    public function __construct($host, $db_name, $user, $password) {
        parent::__construct($host, $db_name, $user, $password);
    }

    // TODO already return as HTML-Structure ?
    public function search($search_string) {
        $results = $this->fmt_data($search_string, "Product");
        $products = [];

        foreach($data as $product) {
            array_shift($products, get_object_vars($product));
        }

        return $products;
    }
} 