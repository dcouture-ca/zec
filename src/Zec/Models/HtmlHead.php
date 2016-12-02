<?php
namespace Zec\Models;

class HtmlHead{
    public function getLang(){
        return 'fr';
    }

    public function getAuthor(){
        return 'Dominic Couture';
    }

    public function getTitle(){
        return 'Page title';
    }

    public function getDescription(){
        return 'Page description';
    }

    public function getThemeColor(){
        return '#FFFFFF';
    }

    public function getFaviconLink(){
        $appleIosHomeScreenIcon = "<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/favicon-180x180.png\">\n";
        $favicon = "<link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">\n<link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">\n";
        return $appleIosHomeScreenIcon.$favicon;
    }

    public function getMaskIcon(){
        return '<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">';
    }
    public function getAppManifest(){
        //https://w3c.github.io/manifest
        return '<link rel="manifest" href="/manifest.json">';
    }
}

   