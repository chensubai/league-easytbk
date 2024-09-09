<?php
/**
 * Created by PhpStorm.
 * User: LeagueAndShop
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace LeagueAndShop\EasyTBK\Vip;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}
