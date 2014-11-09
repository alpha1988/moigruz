<?php
    class pagesController {

        function getUrl(){
            $url = !isset($_GET['url']) ? 'index' : $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            return $url;
        }

        function  switchPages(){
            $url = $this->getUrl();
            switch ($url[0]){
                case 'index':
                    $this->getIndex($url[0]);
                    break;
                case 'page':
                    echo 'other page';
                    break;
                default:
                    $this->getError();
                    break;
            }
        }

        function getIndex($url){
            echo $url.' page';
        }

        function getError(){
            echo '404 Not Found';
        }

    }