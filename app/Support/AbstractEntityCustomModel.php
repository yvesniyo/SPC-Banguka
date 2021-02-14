<?php

namespace App\Support;

abstract class AbstractEntityCustomModel
{

    public function showEmptyAvoidedFields(): bool
    {
        return false;
    }

    public function getAvoidedFields()
    {
        return [];
    }


    public function toArray()
    {
        $temp = (array) $this;
        $array = array();
        foreach ($temp as $k => $v) {
            $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
            if (in_array($k, $this->getAvoidedFields())) {
                if ($this->showEmptyAvoidedFields()) {
                    $array[$k] = "";
                }
            } else {
                // if it is an object recursive call
                if (is_object($v) && $v instanceof AbstractEntityCustomModel) {
                    $array[$k] = $v->toArray();
                }
                // if its an array pass por each item
                if (is_array($v)) {

                    foreach ($v as $key => $value) {
                        if (is_object($value) && $value instanceof AbstractEntityCustomModel) {
                            $arrayReturn[$key] = $value->toArray();
                        } else {
                            $arrayReturn[$key] = $value;
                        }
                    }
                    $array[$k] = $arrayReturn;
                }
                // if it is not a array and a object return it
                if (!is_object($v) && !is_array($v)) {
                    $array[$k] = $v;
                }
            }
        }

        return $array;
    }
}
