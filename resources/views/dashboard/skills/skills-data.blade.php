<div>
  <div>
    <input type="text" class="form_control w-25" placeholder="Search" wire:model.live='search'>
  </div>
  <div class="table-responsive text-nowrap">
    @if (count($data) > 0)
    <table class="table">
      <thead>
        <tr>
          <th width='45%'>Name</th>
          <th width='45%'>Progress</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($data as $item)
        <tr>
          <td>
            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{ $item -> name }}</strong>
          </td>
          <td>{{ $item -> progress }}</td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillUpdate' , 
                          {id:{{ $item->id }}})"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillDelete' , 
                          {id:{{ $item->id }}})"><i class="bx bx-trash me-2"></i> Delete</a>
                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillShow' , 
                          {id:{{ $item->id }}})"><i class="bx bx-show me-2"></i> Show</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    {{ $data -> links() }}
    @else
    <span> Result Not Found</span>
    @endif

  </div>
</div>