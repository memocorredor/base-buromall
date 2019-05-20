<div class="row">
    <div class="col-md-12">
        <div class="tabbable">
            <nav>
                <div class="nav nav-tabs" id="nav-tab-complement" role="tablist">
                    <a class="nav-item nav-link" id="nav-co-img-tab" href="#nav-co-img" aria-controls="nav-co-img"
                        data-toggle="tab" role="tab" aria-selected="false"><i class="fas fa-camera-retro"></i>
                    </a>
                    <a class="nav-item nav-link" id="nav-co-comment-tab" href="#nav-co-comment"
                        aria-controls="nav-co-comment" data-toggle="tab" role="tab" aria-selected="false"><i
                            class="fas fa-camera-retro"></i>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent-complement">

                <div class="tab-pane fade show active" id="nav-co-img" aria-labelledby="nav-co-img-tab" role="tabpanel">
                    <div class="row">


                        @if ($data_pictures)
                        @foreach ($data_pictures as $row_list_pictures)


                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card mx-auto text-center">
                                <a href="#url">
                                    <img class="card-img-top" src="{{ asset( $row_list_pictures->url) }}"
                                        alt="Sample Title">
                                </a>
                                <div class="card-body">
                                    <h2 class="card-title"><span class="fa fa-external-link mr-1"></span><a
                                            href="#url">Sample Title</a></h2>
                                </div>
                            </div>
                        </div>



                        @endforeach
                        @endif

                    </div>
                </div>


                <div class="tab-pane fade show active" id="nav-co-comment" aria-labelledby="nav-co-comment-tab"
                    role="tabpanel">


                </div>


            </div>
        </div>

    </div>
</div>
