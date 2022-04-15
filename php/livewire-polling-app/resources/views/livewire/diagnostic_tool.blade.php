<div class="col-md-6 offset-md-3">
    <button 
        wire:click="$emit('toggleActive')"
        wire:loading.attr="disabled" 
        wire:click="diagnose"
    >
        Diagnose
    </button>

    <div wire:loading>Loading...</div>

    @if ($active)
        <div wire:poll.1s>
            Current time: {{ now()->toISOString() }}
        </div>
    @endif
</div>
