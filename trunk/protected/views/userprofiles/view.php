<?php
$this->breadcrumbs = array(
    'Userprofiles' => array('index'),
    $model->user_id,
);

$this->menu = array(
    array('label' => 'List Userprofiles', 'url' => array('index')),
    array('label' => 'Create Userprofiles', 'url' => array('create')),
    array('label' => 'Update Userprofiles', 'url' => array('update', 'id' => $model->user_id)),
    array('label' => 'Delete Userprofiles', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->user_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Userprofiles', 'url' => array('admin')),
);
?>
<h1><?php echo Yii::app()->user->name; ?>'Profiles</h1>

<img width='200' height='200' src ="avatar/<?php echo $model->avatar; ?>"/>

<?php /* $this->widget('zii.widgets.CDetailView', array(
  'data'=>$model,
  'attributes'=>array(
  'user_id',
  'display_name',
  'first_name',
  'last_name',
  'company',
  'lang',
  'bio',
  'bod',
  'gender',
  'phone',
  'mobile',
  'address_line1',
  'address_line2',
  'address_line3',
  'yim_handle',
  'skype_handle',
  'avatar',
  'facebooksite',
  'update_on',
  ),
  )); */ ?>
<br /><br />
<b><?php echo CHtml::encode($model->getAttributeLabel('display_name')); ?>:</b>
<?php echo CHtml::encode($model->display_name); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('first_name')); ?>:</b>
<?php echo CHtml::encode($model->first_name); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('last_name')); ?>:</b>
<?php echo CHtml::encode($model->last_name); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('company')); ?>:</b>
<?php echo CHtml::encode($model->company); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('lang')); ?>:</b>
<?php echo CHtml::encode($model->lang); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('bio')); ?>:</b>
<?php echo CHtml::encode($model->bio); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('bod')); ?>:</b>
<?php echo CHtml::encode($model->bod); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('gender')); ?>:</b>
<?php echo CHtml::encode($model->gender); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('phone')); ?>:</b>
<?php echo CHtml::encode($model->phone); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('mobile')); ?>:</b>
<?php echo CHtml::encode($model->mobile); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('address_line1')); ?>:</b>
<?php echo CHtml::encode($model->address_line1); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('address_line2')); ?>:</b>
<?php echo CHtml::encode($model->address_line2); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('address_line3')); ?>:</b>
<?php echo CHtml::encode($model->address_line3); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('yim_handle')); ?>:</b>
<?php echo CHtml::encode($model->yim_handle); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('skype_handle')); ?>:</b>
<?php echo CHtml::encode($model->skype_handle); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('facebooksite')); ?>:</b>
<?php echo CHtml::encode($model->facebooksite); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('update_on')); ?>:</b>
<?php echo CHtml::encode($model->update_on); ?>
<br />

