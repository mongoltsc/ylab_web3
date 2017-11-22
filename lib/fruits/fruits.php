<?php
namespace ylab\fruits\fruits;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Localization\Loc;
class FruitsTable extends DataManager
{
    public static function getTableName()
    {
        return 'ylab_fruit';
    }
    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true,
            ]),
            new Entity\StringField('TITLE', [
                'size' => 255,
                'title' => Loc::getMessage('YLAB_FRUITS_TITLE')
            ]),
        ];
    }
}