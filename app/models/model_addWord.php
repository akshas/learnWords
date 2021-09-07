<?php

class Model_addWord extends Model
{
    public function insertData($word, $translation, $cat_id)
    {
        $this->db->addWord($word, $translation, $cat_id);
    }
}