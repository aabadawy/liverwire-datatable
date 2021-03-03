<?php


namespace App\Http\Livewire\traits;


trait WithSorting
{
    public $sortBy = 'id';
    public $sortDirection = 'desc';


    public function sortBy($field = 'id'):string
    {
        return $this->sortBy = $field ;
    }

    public function sortDirection($dir = 'asc'):string
    {
        return $this->sortDirection = $dir;
    }

    public function sorting($field = 'id' , $dir = 'asc')
    {
        $this->sortBy($field);
        $this->sortDirection($dir);
    }
}
