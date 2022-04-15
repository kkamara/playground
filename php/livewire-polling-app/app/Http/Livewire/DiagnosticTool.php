<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DiagnosticTool extends Component
{
    public bool $active = false;

    protected $listeners = ['toggleActive',];

    public function toggleActive(): void {
        $this->active = !$this->active;
    }

    public function render()
    {
        return view('livewire.diagnostic_tool');
    }
}
