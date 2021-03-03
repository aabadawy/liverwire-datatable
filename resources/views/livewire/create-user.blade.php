<div>
    <form action="" wire:submit.prevent="save">
        <input type="text" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <input type="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        <input type="password]" wire:model="password">
        @error('password') <span class="error">{{ $message }}</span> @enderror
        <input type="submit" value="submit">
    </form>
</div>
