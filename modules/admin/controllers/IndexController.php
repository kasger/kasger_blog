<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\User;

/**
 * Default controller for the `Admin` module
 */
class IndexController extends Controller
{
	/**
	 * ��̨ģ���¼��ת
	 */
    public function init()
    {  
        $route = Yii::$app->modules['admin']->module->requestedRoute;
        
    	if(!(Yii::$app->session->get("user_id")) && $route != 'admin/index/login' )
    		return $this->redirect(Yii::$app->urlManager->createUrl('admin/index/login'));
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * ��̨��¼
     */
    public function actionLogin()
    {
        $model = new User();
    	return $this->render("login", ['model'=>$model]);
    }
}
