<?php
namespace ylab\fruits\fruits\AdminInterface;
use DigitalWand\AdminHelper\Helper\AdminInterface;
use DigitalWand\AdminHelper\Widget\StringWidget;
class FruitsAdminInterface extends AdminInterface
{
    /**
     * @inheritdoc
     */
    public function fields()
    {
        return array('TAB' => array(
            'NAME' => 'Фрукт',
            'FIELDS' => array(
                'TITLE' => array(
                    'WIDGET' => new StringWidget(),
                    'TITLE' => 'Название',
                ),
            )
        ));
    }
    /**
     * @inheritdoc
     */
    public function helpers()
    {
        return [
            FruitsListHelper::class,
            FruitsEditHelper::class
        ];
    }
}