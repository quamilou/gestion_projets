<?php

interface CrudInterface {

    public function getAll();

    public function getById($id);

    public function save();

    public function update($id);
    
    public function delete($id);
}
