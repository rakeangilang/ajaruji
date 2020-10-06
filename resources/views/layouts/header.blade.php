<nav class="navbar navbar-expand-sm navbar-custom">
  <a class="navbar-brand" style="padding-left: 5vh;" href="#">
  <picture>
  <source media="(max-width: 1079px)" srcset="{{ $navbar->logo1x }}">
  <source media="(min-width: 1080px)" srcset="{{ $navbar->logo2x }}" style="max-width: 100px">
  <img src="{{ $navbar->logo2x }}" alt="Brand logo" style="max-width: 180px">
</picture>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">{{ $navbar->link1 }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">{{ $navbar->link2 }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">{{ $navbar->link3 }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">{{ $navbar->link4 }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">{{ $navbar->link5 }}</a>
      </li>
    </ul>
    <button type="button" class="btn pill-button font-weight-bold" style="margin-right: 5vh;">Masuk</button>
  </div>
</nav>
<!-- END nav -->