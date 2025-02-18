<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
 
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" wire:model='name' placeholder="Name" />

                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label">progress</label>
                            <input type="number" min="1" max="100" wire:model='progress' class="form-control"
                                placeholder="10 % " />

                        </div>
                    </div>
                    <div class="row g-2">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                 
                </div>

 
        </div>
    </div>
</div>
