<div class='col-md-6 offset-md-3'>
    <button 
        wire:click='$emit("toggleActive")'
        wire:loading.attr='disabled' 
        wire:click='diagnose'
    >
        Diagnose
    </button>

    <div wire:loading>Loading...</div>

    @if ($active)
        <div wire:poll.1s>
            Current time: {{ now()->toISOString() }}
        </div>

        <button 
            onclick='sendEvent()'
            style='border: 1px solid gray; padding: 10px 20px;'
        >
            Ping
        </button>

        <p>{{ $message }}</p>
    @endif
</div>
<script>
    // This function emits an event to the server with the emit-time as a parameter
    function sendEvent(){
         Livewire.emit('ping-sent',  Date.now())
    }

    // This is the client listener waiting for the ping-reply from the server
    // then calculate the difference and emits an event with the duration of the ping to the server
    Livewire.on('ping-reply', sentTime => {
        const replyTime = Date.now()
        Livewire.emit('ping-time',  replyTime - sentTime)
    })
</script>
