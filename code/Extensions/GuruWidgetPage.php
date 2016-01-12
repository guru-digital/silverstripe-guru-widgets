<?php

class GuruWidgetPage extends DataExtension
{
    private static $has_one = array(
        'HeaderBar'     => 'WidgetArea',
        'LeftSideBar'   => 'WidgetArea',
        'RightSideBar'  => 'WidgetArea',
        'ContentFooter' => 'WidgetArea',
        'FooterBar'     => 'WidgetArea'
    );

}