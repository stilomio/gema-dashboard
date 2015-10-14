<?php

class ButtonsController extends Controller {

    public function actions() {
        return array(
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionIndex() {

        $this->render('index');
    }

}
