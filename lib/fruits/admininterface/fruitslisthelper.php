<?php
namespace ylab\fruits\fruits\AdminInterface;
use DigitalWand\AdminHelper\Helper\AdminListHelper;
class FruitsListHelper extends AdminListHelper
{
    static protected $model = '\ylab\fruits\fruits\FruitsTable';
}