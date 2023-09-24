<?php
    class myClass {
        public function printClsName()
        {
            echo $this->getName();
        }
    }

$myCls = new myClass;

echo $myCls->printClsName();