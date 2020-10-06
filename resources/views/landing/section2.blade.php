<div id="hero">
            <div class="row">
                <div class="col-6 hero-content">
                    <h1>{{ $section2->title }}</h1>
                    <h6 class="font-weight-bold">{{ $section2->description }}</h6>
                    <button type="button" class="btn pill-button mulai-btn font-weight-bold">{{ $section2->button}}</button>
                </div>
                <div class="col-6 hero-image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="{{ $section2->items[0]->images->path1 }}">
                        <source media="(min-width: 800px)" srcset="{{ $section2->items[0]->images->path2 }}">
                        <img src="{{ $section2->items[0]->images->path2 }}" alt="Hero image" style="max-width: 90%">
                    </picture>
                </div>
            </div>
        </div>