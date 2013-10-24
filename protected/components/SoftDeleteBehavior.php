<?php
/**
 * @author Bryan Jayson Tan <admin@bryantan.info>
 * @link http://bryantan.info
 * @date 1/14/13
 * @time 3:13 PM
 */
class SoftDeleteBehavior extends CActiveRecordBehavior
{
    public $flagField='is_deleted';

    public function remove(){
        $this->getOwner()->{$this->flagField}=1;
        return $this->getOwner();
    }

    public function restore(){
        $this->getOwner()->{$this->flagField}=0;
        return $this->getOwner();
    }

    public function notRemoved(){
        $criteria = $this->getOwner()->getDbCriteria();
        $criteria->compare($this->flagField,0);
        return $this->getOwner();
    }

    public function removed(){
        $criteria=$this->getOwner()->getDbCriteria();
        $criteria->compare($this->flagField,1);
        return $this->getOwner();
    }

    /**
     * @return bool
     */
    public function isRemoved(){
        return (boolean)$this->getOwner()->{$this->flagField};
    }
}
