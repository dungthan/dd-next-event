<?php
class Category extends CWidget{
    
    public function Category(){
        
        $model = Typeevent::model()->findAll(array('order'=>'name'));
        $this->render('Category',array('model'=>$model));
    }
}


?>