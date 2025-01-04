<?php

use function Livewire\Volt\{rules, state};

state(['message' => '']);
rules(['message' => 'required|string|max:255']);

$store = function () {
	$validated = $this->validate();
	auth()->user()->revelations()->create($validated);
	$this->message = '';
	$this->dispatch('revelation-revealed');
};

?>

<div>
  <form wire:submit="store"> 
    <textarea
      wire:model="message"
      placeholder="{{ __('The Homiehood requires thoughts...') }}"
      class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
    ></textarea>
    <x-input-error :messages="$errors->get('message')" class="mt-2" />
    <x-primary-button class="mt-4">{{ __('Send Revelation') }}</x-primary-button>
  </form> 
</div>
