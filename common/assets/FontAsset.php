<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 11/9/2016
 * Time: 6:49 PM
 */

namespace common\assets;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $css = [
        'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,400i,700&amp;subset=cyrillic'
    ];
}