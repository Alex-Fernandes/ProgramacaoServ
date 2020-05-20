<?php


class Registo extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name'),
        array('email'),
        array('nascdate'),
        array('username'),
        array('password')
    );
}
