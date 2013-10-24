<?php
/**
 * @author Bryan Jayson Tan <admin@bryantan.info>
 * @link http://bryantan.info
 * @date 2/13/13
 * @time 9:01 PM
 */
class SoftDeleteAction extends CAction
{
    public $pk = 'id';
    public $redirectTo = 'index';
    public $modelClass;
    function run()
    {
        if(Yii::app()->request->isPostRequest)
        {
            if(empty($_GET[$this->pk]))
                throw new CHttpException(404);
            $model = CActiveRecord::model($this->modelClass)->findByPk($_GET[$this->pk]);
            if(!$model)
                throw new CHttpException(404);

            $model->remove();
            if ($model->save()){
                // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
                if(!isset($_GET['ajax'])){
                    Yii::app()->controller->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
                }
            }
        }else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }
}
