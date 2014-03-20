<?php

/**
 * Field filter form base class.
 *
 * @package    marina
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFieldFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prev_plant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Plant'), 'add_empty' => true)),
      'ground_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GroundType'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'prev_plant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Plant'), 'column' => 'id')),
        'ground_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GroundType'), 'column' => 'id')),

    ));

    $this->widgetSchema->setNameFormat('field_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Field';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'prev_plant_id' => 'ForeignKey',
      'ground_type_id'   => 'ForeignKey',
    );
  }
}
