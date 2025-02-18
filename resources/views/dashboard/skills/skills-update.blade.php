<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" wire:model='name' placeholder="Name" />
                            @include('dashboard.components.error' , ['field' => 'name'])

                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label">progress</label>

                            <input type="number" min="1" max="100" wire:model='progress' class="form-control"
                                placeholder="10 % " />
                            @include('dashboard.components.error' , ['field' => 'progress'])

                        </div>
                    </div>
                    <div class="row g-2">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>
