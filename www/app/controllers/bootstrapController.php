<?php
    class bootstrapController {
        function __construct() {

            $url = new pagesController();

            print_r($url->getUrl());
            echo $url->switchPages();
        }
    }