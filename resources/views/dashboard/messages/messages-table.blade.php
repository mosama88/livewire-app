<div class="card-body">
    <div class="row col-6">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
            <input type="text" class="form-control" wire:model.live="search" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Messages</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    <?php $i = 0; ?>
                    @foreach ($data as $info)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>
                                <strong>{{ $info->name }}</strong>
                            </td>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->subject }}</td>
                            <td>{{ $info->message }}</td>
                            <td>
                                @if ( $info->status == 0)
                                    Inactive
                                @else
                                    Active
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('MessagesShow',{id:{{ $info->id }}})">
                                            <i class="fa-solid fa-eye-slash me-1"></i>
                                            Show
                                        </a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('MessagesDelete',{id:{{ $info->id }}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        @else
            <div class="text-danger">
                Not Data Found
            </div>
        @endif

    </div>
    <div class="row mt-2">
        {{ $data->links() }}
    </div>
</div>
