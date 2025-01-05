<?php

use function Livewire\Volt\{mount, rules, state};

state(['revelation', 'message']);

rules(['message' => 'required|string|max:255']);

mount(fn() => $this->message = $this->revelation->message);

$update = function() {
	$this->authorize('update', $this->revelation);
	$validated = $this->validate();
	$this->revelation->update($validated);
	$this->dispatch('revelation-revised');
};

$cancel = fn() => $this->dispatch('revelation-revision-abandoned');

?>

<div>
  <form wire:submit="update">
	<textarea
      wire:model="message"
      class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
    ></textarea>
    <x-input-error :messages="$errors->get('message')" class="mt-2" />
    <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
    <button class="mt-4" wire:click.prevent="cancel">Cancel</button>
  </form>
</div>
