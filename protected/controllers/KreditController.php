<?php
/**
 * Created by PhpStorm.
 * User: kiplink
 * Date: 4/13/14
 * Time: 10:14 PM
 */
class KreditController extends Controller
{
//    public $layout='//layouts/column2';

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
//            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index','kredit'),
                'users'=>array('*'),
            ),
            array('allow',
                'actions'=>array(''),
                'users'=>array('@'),
            ),
            array('allow',
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
    public function actionIndex()
    {
        $this->render('kredit');
    }

    public function actionKredit()
    {
        $this->render('kredit');
    }
}