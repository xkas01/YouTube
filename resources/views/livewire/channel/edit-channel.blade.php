<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit.prevent="submit">

        <input type="text" wire:model="name">

        <button type="submit">Submit</button>
    </form>
    <h1> {{ $name }}</h1>
</div>
