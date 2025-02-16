<form class="row" wire:submit.prevent='submit'>
    @if (session('message'))
    <div class="alert alert-success my-success-alert">
        {{ session('message') }}
    </div>
@endif

    {{-- Name --}}
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='settings.name' />
        @include('dashboard.components.error' , ['field' => 'settings.name'])
    </div>
    {{-- Email --}}
    <div class="col-md-6">
        <label class="form-label">email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model='settings.email' />
        @include('dashboard.components.error' , ['field' => 'settings.email'])

    </div>
    {{-- Phone --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" wire:model='settings.phone' />
        @include('dashboard.components.error' , ['field' => 'settings.phone'])

    </div>
    {{-- Address --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='settings.address' />
        @include('dashboard.components.error' , ['field' => 'settings.address'])

    </div>
    {{-- Facebook --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook" wire:model='settings.facebook' />
        @include('dashboard.components.error' , ['field' => 'settings.facebook'])

    </div>
    {{-- Twitter --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter" wire:model='settings.twitter' />
        @include('dashboard.components.error' , ['field' => 'settings.twitter'])

    </div>
    {{-- LinkedIn --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">LinkedIn</label>
        <input type="text" class="form-control" placeholder="LinkedIn" wire:model='settings.linkedin' />
        @include('dashboard.components.error' , ['field' => 'settings.linkedin'])

    </div>
    {{-- Instagram --}}
    <div class="col-md-6 mt-2">
        <label class="form-label">Instagram</label>
        <input type="text" class="form-control" placeholder="Instagram" wire:model='settings.instagram' />
        @include('dashboard.components.error' , ['field' => 'settings.instagram'])

    </div>
    {{-- button --}}
    <div class="col-md-12 mt-4">
        <button class="btn btn-primary">Submit</button>
    </div>

</form>