<?php

/**
 * HeavenTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class HeavenTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object HeavenTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Heaven');
    }

    public static function findHeaven($id)
    {
        return Doctrine_Query::create()
            ->from('Heaven h')
            ->where('h.id = ?', $id)
            ->fetchOne()
            ;
    }
}