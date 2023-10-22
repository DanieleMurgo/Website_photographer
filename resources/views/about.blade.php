<x-layout>
    <x-slot name="title">About us</x-slot>
    <section>

        <div class="container mt-nav">
            <div class="row">
                <div class="col-12">
                    <p class="fs-6">
                        At the basis of her creative path, Sarah Venturini has the goal of creating an interaction
                        between
                        disciplines, which she has always believed to be one of the main purposes of the future image.
                        For
                        some time now, she has pursued a path blending art with fashion, in a more intimate way,
                        considering
                        it in its multiple facets (architecture, design, music, illustration). Sarah's success and
                        adherence
                        to her vision is evident by the fact that many established national galleries and museums have
                        already supported her.
                    </p>

                    <p class="fs-6">
                        Being true to her initial mission, Sarah founded the Fattura project as a true collective aimed
                        at
                        creating a reciprocal link between photography and everything revolving around the world of art,
                        so
                        that one can draw from the other without respective misrepresentations. The result is an
                        unprecedented and magical form of visual language, capable of distorting reality, through the
                        mutual
                        collaboration in the most possible dimensions.

                    </p>

                    <p class="fs-6">
                        Fattura is driven by the ability to seek innovation, placing itself beyond the era and the
                        boundaries imposed on us, in a postmodern way, considering the past as one immense reservoir of
                        contemporaneity. The collective intends to promote, in a parodistic way, a new concept of art,
                        already present, but that needs to be re-praised, because it is continuously renewing and
                        recreating
                        itself. An art that exists, but that has yet to be truly seen.

                    </p>
                </div>

                <!-- Swiper with all photos -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper mySwiperEndWelcome">
                                    <div class="swiper-wrapper">
                                        @foreach($photos as $photo)
                                        <div class="swiper-slide">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="{{ Storage::url($photo->thumb_path) }}" alt=""
                                                    class="img-fluid shadow-lg p-3 bg-body rounded">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @if(empty($clientsChunked))
                <!-- No Client -->
                @else
                <div class="row fs-5">
                    <h2>Clients</h2>
                    <div class="col-md-4 col-12">
                        <ul class="list-unstyled">
                            @foreach($clientsChunked[0] as $client)
                            <li>{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-12">
                        <ul class="list-unstyled">
                            @foreach($clientsChunked[1] as $client)
                            <li>{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-12">
                        <ul class="list-unstyled">
                            @foreach($clientsChunked[2] as $client)
                            <li>{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>



</x-layout>