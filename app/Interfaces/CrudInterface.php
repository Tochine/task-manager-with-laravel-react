<?php

namespace App\Interfaces;

interface CrudInterface
{
    /**
     * getAll
     * 
     * returns all of the items or Trashed items
     * @param boolean $isTrahed
     * @return Illuminate\Http\Response
     */
    public function getAll();


    /**
     * getPaginateData
     * 
     * Returns all of the items or Trashed items
     * @param int $page
     * @param boolean $isTrahed
     * @return Illuminate\Http\Response
     */
    //public function getPaginateData($page = 1, $isTrahed = false);


    public function findById($id);
    public function create();
    public function edit($id); 
    public function delete();


}