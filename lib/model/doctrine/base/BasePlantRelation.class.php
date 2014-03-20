<?php

/**
 * BasePlantRelation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $value
 * @property integer $prev_plant_id
 * @property integer $next_plant_id
 * @property Plant $prev_plant
 * @property Plant $next_plant
 * 
 * @method integer       getValue()         Returns the current record's "value" value
 * @method integer       getPrevPlantId()   Returns the current record's "prev_plant_id" value
 * @method integer       getNextPlantId()   Returns the current record's "next_plant_id" value
 * @method Plant         getPrevPlant()     Returns the current record's "prev_plant" value
 * @method Plant         getNextPlant()     Returns the current record's "next_plant" value
 * @method PlantRelation setValue()         Sets the current record's "value" value
 * @method PlantRelation setPrevPlantId()   Sets the current record's "prev_plant_id" value
 * @method PlantRelation setNextPlantId()   Sets the current record's "next_plant_id" value
 * @method PlantRelation setPrevPlant()     Sets the current record's "prev_plant" value
 * @method PlantRelation setNextPlant()     Sets the current record's "next_plant" value
 * 
 * @package    marina
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlantRelation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('plant_relation');
        $this->hasColumn('value', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('prev_plant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('next_plant_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Plant as prev_plant', array(
             'local' => 'prev_plant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Plant as next_plant', array(
             'local' => 'next_plant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}