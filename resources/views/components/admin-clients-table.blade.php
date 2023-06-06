<!-- livewire create form -->

<div>
    <livewire:create-worker-form />
</div>



<!-- Workers table -->

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <th scope="row">{{$client->name}}</th>
            <td class="d-flex">
                <!-- delete client component -->
                <x-modal-client-delete clientId="{{$client->id}}" />

                <!-- livewire client component -->
                <livewire:edit-client-form clientId="{{$client->id}}" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>