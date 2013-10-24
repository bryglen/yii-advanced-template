<?php
/**
 * Copyright by Bryan Jayson Tan.
 * Date: 5/18/12
 * Time: 8:15 PM
 * src: http://www.yiiframework.com/forum/index.php/topic/14990-adding-dash-to-actions-eg-httpyiicomadminadd-account/
 */
class UrlManager extends CUrlManager
{
    public function createUrl($route,$params=array(),$ampersand='&')
    {
        if(preg_match('/[A-Z]/',$route)!==0)
        {
            $route=strtolower(preg_replace('/(?<=\\w)([A-Z])/','-\\1',$route));
        }
        return parent::createUrl($route,$params,$ampersand);
    }

    public function parseUrl($request)
    {
        $route=parent::parseUrl($request);
        if(substr_count($route,'-')>0)
        {
            $route=lcfirst(str_replace(' ','',ucwords(str_replace('-',' ',$route))));
        }
        return $route;
    }
}