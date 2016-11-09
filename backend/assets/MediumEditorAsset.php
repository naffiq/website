<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 11/9/2016
 * Time: 9:04 PM
 */

namespace backend\assets;


use yii\web\AssetBundle;

class MediumEditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/medium-editor/dist';

    public $js = [
        'js/medium-editor.min.js'
    ];

    public $css = [
        'css/medium-editor.min.css',
        "css/themes/beagle.min.css"
    ];
}