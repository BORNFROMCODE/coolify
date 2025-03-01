<div>
    <form wire:submit.prevent='submit' class="flex flex-col">
        <div class="flex items-center gap-2">
            <h3>Configuration</h3>
            <x-forms.button type="submit">
                Save
            </x-forms.button>
        </div>
        <div class="flex flex-col gap-2">
            <div class="flex gap-2">
                <x-forms.input id="settings.fqdn" label="Coolify's Domain" />
            </div>

            {{-- <div class="flex gap-2 ">
                <x-forms.input type="number" id="settings.public_port_min" label="Public Port Min" />
                <x-forms.input type="number" id="settings.public_port_max" label="Public Port Max" />
            </div> --}}
        </div>
    </form>
    <h2 class="pt-6">Advanced</h2>
    <div class="flex flex-col py-6 text-right w-80">
        <x-forms.checkbox instantSave id="is_auto_update_enabled" label="Auto Update Coolify" />
        <x-forms.checkbox instantSave id="is_registration_enabled" label="Registration Allowed" />
        <x-forms.checkbox instantSave id="do_not_track" label="Do Not Track" />
        <x-forms.checkbox instantSave helper="Do not recommended, only if you like to live on the edge."
            id="next_channel" label="Enable pre-release (early) updates" />
    </div>
</div>
