<?php
/*
 * This is example of php different access modifier
     which is
     * public
     * private
     * protected
 */
class accessModifier{
    public $name;
    private $number;
    protected $address;

}

$obj=new accessModifier();
# public can be accessible.
$obj->name="Hasan";
echo $obj->name;
# private and protected can't be accessible.
$obj->number="0181255555";
$obj->address="ctg,bd";


