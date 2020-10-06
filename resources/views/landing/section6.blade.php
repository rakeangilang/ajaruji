<div class="white-section">
        <h2>{{ $section6->title }}</h2>
        <h6>{{ $section6->description }}</h6>
    </div>
    <div class="penawaran">
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem; border-radius: 0.5rem;">
                    <div class="card-body">
                        <div class="parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/monthly.png" alt="ellipse">
                            <h4>{{ $section6->items[0]->item_title }}</h4>
                            <div class="text-manfaat font-weight-bold">{{ $section6->items[0]->item_additional_info }}</div>
                            <div class="text-manfaat">{{ $section6->items[0]->item_description }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <img class="promo" src="assets/Path 6712.png" alt="">
                        <p class="promo-text font-weight-bold">Penawaran Terbaik</p>
                        <div class="parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/yearly.png" alt="ellipse">
                            <h4>{{ $section6->items[2]->item_title }}</h4>
                            <div class="text-manfaat font-weight-bold">{{ $section6->items[0]->item_additional_info }}</div>
                            <div class="text-manfaat">{{ $section6->items[0]->item_description }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <div class="parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/group.png" alt="ellipse">
                            <h4>{{ $section6->items[2]->item_title }}</h4>
                            <div class="text-manfaat font-weight-bold">{{ $section6->items[0]->item_additional_info }}</div>
                            <div class="text-manfaat">{{ $section6->items[0]->item_description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>