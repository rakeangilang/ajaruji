<footer class="footer">
    <div class="container-fluid footer-custom">
        <div class="row">
            <div class="col-sm-5 footer-logo">
                <img src="{{ $footer->link3_image1_1x }}" alt="Brand logo">
            </div>
            <div class="col-sm-3 footer-address">
                <h5>{{ $footer->link1 }}</h5>
                <p class="font-weight-bold">{{ $footer->link1_text }}</p>
            </div>
            <div class="col-sm-2 footer-about">
                <h5>{{ $footer->link2 }}</h5>
                <a href="#" class="about-link">{{ $footer->link2_sublink1 }}</a> <br>
                <a href="#" class="about-link">{{ $footer->link2_sublink2 }}</a>
            </div>
            <div class="col-sm-2 footer-social">
                <h5>{{ $footer->link3 }}</h5>
                <div class="contact-list">
                    <img class="contact-item" src="{{ $footer->link3_image2_1x }}" alt="Social 1">&nbsp; {{ $footer->link3_text2 }} <br>
                    <img class="contact-item" src="{{ $footer->link3_image3_1x }}" alt="Social 2">&nbsp; {{ $footer->link3_text3 }} <br>
                    <img class="contact-item" src="{{ $footer->link3_image4_1x }}" alt="Social 3">&nbsp; {{ $footer->link3_text4 }}
                </div>
            </div>
        </div>
        <hr/>
        <div class="row copyright">
            {{ $footer->copyright }}
        </div>
    </div>
</footer>