<?php

namespace App\Http\Livewire;

use App\Http\Livewire\traits\WithSorting;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Collection;

class DataTable extends Component
{
    use WithPagination;
    use WithSorting;
    public $search = '';
    protected $listeners = ['UserTableChanged' => 'fetchUsers'];

    public function fetchUsers():object
    {
        return User::fastSearch($this->search)->orderBy($this->sortBy, $this->sortDirection)->paginate(20);
    }
    public function render()
    {
        return view('livewire.data-table', [
            'users' => $this->fetchUsers()]);
    }
}
