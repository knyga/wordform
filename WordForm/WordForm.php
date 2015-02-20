<?php

namespace WordForm;

abstract class WordForm {

    public static function run($word, $count) {
        $count = round($count);

        if($count > 1) {
            return $word . 's';
        } else {
            return $word;
        }
    }

}