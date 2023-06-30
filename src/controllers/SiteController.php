<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;

class SiteController extends Controller
{
    /**
     * Displays default page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'Welcome To Yii2 API';
    }
}
