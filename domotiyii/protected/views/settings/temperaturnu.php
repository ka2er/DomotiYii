<?php
/* @var $this SettingsTemperaturnuController */
/* @var $model SettingsTemperaturnu */
/* @var $form bootstrap.widgets.TbActiveForm */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Modules') => 'indexModules',
        Yii::t('app','TemperaturNu'),
    ),
)); ?>

<legend>Temperatur.nu</legend>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
        'htmlOptions'=>array(
                'class'=>''
        )
));
$this->widget('bootstrap.widgets.TbNav', array(
        'type'=>TbHtml::NAV_TYPE_PILLS,
        'items'=>array(
                array('label'=>Yii::t('app','Temperatur.nu'), 'icon'=>'icon-globe', 'url'=>'http://www.temperatur.nu', 'linkOptions'=>array('target'=>'_blank')),
        ),
));
$this->endWidget();

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'settings-temperaturnu-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<fieldset>
		<?php echo $form->checkBoxControlGroup($model,'enabled', array('value'=>-1)); ?>
		<?php echo $form->textFieldControlGroup($model,'city'); ?>
		<?php echo $form->textFieldControlGroup($model,'apikey'); ?>
		<?php echo $form->dropDownListControlGroup($model,'deviceid',Devices::getDevices(), array('prompt'=>'', 'id'=>'deviceid')); ?>
		<?php echo $form->dropDownListControlGroup($model,'devicevalue', array('0' => '', '1' => 'Value1', '2' => 'Value2', '3' => 'Value3', '4' => 'Value4')); ?>
		<?php echo $form->numberFieldControlGroup($model,'pushtime', array('append' => 'Minutes')); ?>
		<?php echo $form->checkBoxControlGroup($model,'debug', array('value'=>-1)); ?>
</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton(Yii::t('app','Submit'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton(Yii::t('app','Reset')),
)); ?>
<?php $this->endWidget(); ?>
