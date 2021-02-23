<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

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
    public function create(Request $request);
    public function edit(Request $request, $id); 
    public function delete(Request $request, $id);


}