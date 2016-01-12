<?php

class GruruWidgetPage extends DataExtension
{
    static $db = array(
        'HeaderBar'     => 'WidgetArea',
        'LeftSideBar'   => 'WidgetArea',
        'RightSideBar'  => 'WidgetArea',
        'ContentFooter' => 'WidgetArea',
        'FooterBar'     => 'WidgetArea'
    );

}