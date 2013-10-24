<?php

class DefaultController extends ApiController
{
    public function actionIndex()
    {
        header('Content-type: application/json');

        echo json_encode(array(
            'version' => '1.1.0'
        ));
    }
}