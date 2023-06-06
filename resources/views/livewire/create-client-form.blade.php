<div>
    <div>
        <!-- Create button -->
        <!-- create button trigger modal -->
        <button class="btn button-28 mt-3" data-bs-toggle="modal" data-bs-target="#createClientModal">New client
            <i class="fa-solid fa-plus text-secondary"></i>
        </button>

        <!-- CreateModal -->
        <div class="modal fade" id="createClientModal" tabindex="-1" aria-labelledby="createClientModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createClientModalLabel">New client</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form wire:submit.prevent="store">
                        <div class="modal-body">

                            <div class="mt-2">
                                <label for="#new_client_name">Name</label>
                                <input wire:model="name" id="new_client_name" type="text" placeholder="Name"
                                    class="form-control">
                            </div>E

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button-b me-3" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn button-28" data-bs-dismiss="modal">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End CreateModal -->
    </div>

</div>