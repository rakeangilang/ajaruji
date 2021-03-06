<div class="white-section">
    <h2>{{ $section7->title }}</h2>
    <h6>{{ $section7->description }}</h6>
</div>
<div id="testimoni-section">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First set of 2-->
            <div class="carousel-item active" style="padding-left:15vw; padding-right: 15vw; ">

                <div class="row" style="padding: 1vh 0;">
                    <div class="col-sm-1">
                        <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
                            <img src="assets/arrow.png" alt="" class="vertical-center">
                        </a>

                    </div>
                    <div class="col-sm-5">
                        <div class="card shadow" style="max-width: 30rem; border-radius: 1rem;">
                            <div class="card-body">
                                <div class="col parent">
                                    <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                                    <img class="image2" src="{{ $section7->items[0]->images->path1 }}" alt="Profile picture">
                                    <h4 class="text-manfaat">{{ $section7->items[0]->item_title }}</h4>
                                    <div class="text-manfaat font-weight-bold" style="color: #484eca;">{{ $section7->items[0]->item_additional_info }}</div>
                                    <div class="text-manfaat">{{ $section7->items[0]->item_description }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card shadow" style="max-width: 30rem; border-radius: 0.5rem;">
                            <div class="card-body">
                                <div class="col parent">
                                    <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                                    <img class="image2" src="{{ $section7->items[1]->images->path1 }}" alt="Profile picture">
                                    <h4 class="text-manfaat">{{ $section7->items[1]->item_title }}</h4>
                                    <div class="text-manfaat font-weight-bold" style="color: #484eca;">{{ $section7->items[1]->item_additional_info }}</div>
                                    <div class="text-manfaat">{{ $section7->items[1]->item_description }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
                            <img src="assets/arrow-1.png" alt="" class="vertical-center">
                        </a>

                    </div>
                </div>


            </div>
            <!--/.Other set of 2-->
            @for ($i = 2; $i < count($section7->items); $i+=2)
            <div class="carousel-item" style="padding-left:15vw; padding-right: 15vw; ">
            
                <div class="row" style="padding: 1vh 0;">
                    <div class="col-sm-1">
                        <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
                            <img src="assets/arrow.png" alt="" class="vertical-center">
                        </a>
                    </div>
                    <div class="col-sm-5">
                        <div class="card shadow" style="max-width: 30rem; border-radius: 1rem;">
                            <div class="card-body">
                                <div class="col parent">
                                    <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                                    <img class="image2" src="{{ $section7->items[$i]->images->path1 }}" alt="Profile picture">
                                    <h4 class="text-manfaat">{{ $section7->items[$i]->item_title }}</h4>
                                    <div class="text-manfaat font-weight-bold" style="color: #484eca;">{{ $section7->items[$i]->item_additional_info }}</div>
                                    <div class="text-manfaat">{{ $section7->items[$i]->item_description }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card shadow" style="max-width: 30rem; border-radius: 0.5rem;">
                            <div class="card-body">
                                <div class="col parent">
                                    <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                                    <img class="image2" src="{{ $section7->items[$i+1]->images->path1 }}" alt="Profile picture">
                                    <h4 class="text-manfaat">{{ $section7->items[$i+1]->item_title }}</h4>
                                    <div class="text-manfaat font-weight-bold" style="color: #484eca;">{{ $section7->items[$i+1]->item_additional_info }}</div>
                                    <div class="text-manfaat">{{ $section7->items[$i+1]->item_description }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
                            <img src="assets/arrow-1.png" alt="" class="vertical-center">
                        </a>
                    </div>
                </div>
            
            </div>
            @endfor

    </div>

</div>
<!--/.Slides-->

</div>
</div>
</div>
<!--/.Carousel Wrapper-->
</div>