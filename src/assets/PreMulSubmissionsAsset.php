<?php

namespace myzero1\pms\assets;

use yii\web\AssetBundle;

/**
 * PreMulSubmissionsAsset asset bundle.
 */
class PreMulSubmissionsAsset extends AssetBundle
{
    public $js = [
        'js/pre-mul-submissions.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
