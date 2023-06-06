<div>
    <div>
        <!-- Button trigger edit modal -->
        <span class="tt" data-bs-placement="bottom" title="Edit">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                data-bs-target="#updateClient-{{$clientId}}">
                <i class="fa-regular fa-pen-to-square text-white">
                </i>
            </button>
        </span>


        <!-- EditModal -->
        <div wire:ignore.self class="modal fade" id="updateClient-{{$clientId}}" tabindex="-1"
            aria-labelledby="updateClientLabel-{{$clientId}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="updateClientLabel-{clientId}">Update client
                            information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form wire:submit.prevent="update">
                        <div class="modal-body">
                            <label for="#client_name">Name</label>
                            <input wire:model="name" id="client_name" type="text" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button-b me-3" data-bs-dismiss="modal">Close</button>
                            <button id="editButton" type="submit" class="btn button-28">Save
                                changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>