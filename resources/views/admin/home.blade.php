<x-layout>
    <section class="mt-nav">
        <div class="container header-min-height">
            <div class="row">
                <div class="col-12">
                    <h2>Admin</h2>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Projects</button>
                        </li>
                        <li class="nav-item ms-1" role="presentation">
                            <button class="nav-link text-decoration-none" id="workers-tab" data-bs-toggle="tab"
                                data-bs-target="#workers-tab-pane" type="button" role="tab"
                                aria-controls="workers-tab-pane" aria-selected="false">Workers</button>
                        </li>
                        <li class="nav-item ms-1" role="presentation">
                            <button class="nav-link text-decoration-none" id="clients-tab" data-bs-toggle="tab"
                                data-bs-target="#clients-tab-pane" type="button" role="tab"
                                aria-controls="clients-tab-pane" aria-selected="false">Clients</button>
                        </li>
                    </ul>

                    <!-- Tab projects contenuto -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <x-admin-projects-table :projects="$projects" />

                        </div>

                        <!-- Tab workers contenuto -->
                        <div class="tab-pane fade" id="workers-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <x-admin-workers-table :workers="$workers" />

                        </div>

                        <!-- Tab clients contenuto -->
                        <div class="tab-pane fade" id="clients-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <x-admin-clients-table :clients="$clients" />

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</x-layout>