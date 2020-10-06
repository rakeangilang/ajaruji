<div class="white-section">
        <h2>{{ $section5->title }}</h2>
        <h6>{{ $section5->description }}</h6>
    </div>
    <div id="tentang-carousel" class="owl-carousel owl-theme mt-5" style="padding: 0 10vw;">
        <div class="item">
            <img src="{{ $section5->items[0]->images->path1 }}" alt="Image 1">
        </div>
        <div class="item">
            <img src="{{ $section5->items[1]->images->path1 }}" alt="Image 2">
        </div>
        <div class="item">
            <img src="{{ $section5->items[2]->images->path1 }}" alt="Image 3">
        </div>
        <div class="item">
            <img src="{{ $section5->items[3]->images->path1 }}" alt="Image 4">
        </div>
        <div class="item">
            <img src="{{ $section5->items[4]->images->path1 }}" alt="Image 5">
        </div>
    </div>