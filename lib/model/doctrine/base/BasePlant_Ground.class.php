<?php

/**
 * BasePlant_Ground
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $plant_id
 * @property integer $ground_id
 * @property Plant $Plant
 * @property GroundType $GroundType
 * 
 * @method integer      getPlantId()    Returns the current record's "plant_id" value
 * @method integer      getGroundId()   Returns the current record's "ground_id" value
 * @method Plant        getPlant()      Returns the current record's "Plant" value
 * @method GroundType   getGroundType() Returns the current record's "GroundType" value
 * @method Plant_Ground setPlantId()    Sets the current record's "plant_id" value
 * @method Plant_Ground setGroundId()   Sets the current record's "ground_id" value
 * @method Plant_Ground setPlant()      Sets the current record's "Plant" value
 * @method Plant_Ground setGroundType() Sets the current record's "GroundType" value
 * 
 * @package    marina
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlant_Ground extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('plant__ground');
        $this->hasColumn('plant_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('ground_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Plant', array(
             'local' => 'plant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('GroundType', array(
             'local' => 'ground_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}