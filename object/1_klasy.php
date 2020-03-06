<?php
  class Person
  {
    public $name;

    public function setName($name)
    {
      //$this->name="Anna";
      $this->name = $name;
    }
  }
  $obj=new Person();

  echo $obj->name;

  $obj->name="Janusz";
  echo $obj->name;
  $obj->setName("Krystyna");
  echo $obj->name;
 ?>
