<div class="manfaat">
        <h2>{{ $section3->title }}</h2>
        <h6>{{ $section3->description }}</h6>
    </div>
    <div class="row list-manfaat">
        <div class="col">
            <div class="parent" style="width: 10rem">
            <img class="image1 ellipse-red" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/bank soal.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">{{ $section3->items[0]->item_title }}</div>
            <div class="text-manfaat">{{ $section3->items[0]->item_description }}</div>
            </div>
            
        </div>
        <div class="col">
            <div class="parent" style="width: 10rem;">
            <img class="image1 ellipse-orange" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 5.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">{{ $section3->items[1]->item_title }}</div>
            <div class="text-manfaat">{{ $section3->items[1]->item_description }}</div>
            </div>
        </div>
        <div class="col">
            <div class="parent" style="width: 10rem">
            <img class="image1 ellipse-green" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 3.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">{{ $section3->items[2]->item_title }}</div>
            <div class="text-manfaat">{{ $section3->items[2]->item_description }}</div>
            </div>
        </div>
        <div class="col">
            <div class="parent" style="width: 10rem">
            <img class="image1 ellipse-cyan" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 2.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">{{ $section3->items[3]->item_title }}</div>
            <div class="text-manfaat">{{ $section3->items[3]->item_description }}</div>
            </div>
        </div>
        <div class="col">
            <div class="parent" style="width: 10rem">
            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/book.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">{{ $section3->items[4]->item_title }}</div>
            <div class="text-manfaat">{{ $section3->items[4]->item_description }}</div>
            </div>
        </div>
    </div>