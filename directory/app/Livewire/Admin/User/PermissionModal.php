<?php

namespace App\Livewire\Admin\User;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionModal extends Component
{

    public $name;

    public Permission $permission;

    protected $rules = [
        'name' => 'required|string',
    ];

    // This is the list of listeners that this component listens to.
    protected $listeners = [
        'delete_permission' => 'delete'
    ];

    public function render()
    {
        return view('livewire.admin.user.permission-modal');
    }

    public function delete($name): void
    {
        $permission = Permission::where('name', $name)->first();

        if (!is_null($permission)) {
            $permission->delete();
        }

        $this->dispatch('success', 'Permission deleted');
    }
}
