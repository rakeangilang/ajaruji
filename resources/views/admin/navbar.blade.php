<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    @include('admin.layouts.sidebar')

    <div class="container-fluid" style="padding-left: 13vw; padding-top: 10vh; max-width: 100vw;">
        @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" id="formMessage" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" id="formMessage" role="alert">
            <li>{{ session()->get('success') }}</li>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="card" style="background-color: black;color:white; width: 65vw; margin: 0 auto; border-radius: 0.3rem; padding-top:1vh; margin-bottom: 5vh;">
            <div class="card-body">
                <h3 style="text-align: center">Edit Navbar</h3>
            </div>
        </div>
        <div class="card" style="background-color: whitesmoke; width: 65vw; margin: 0 auto; border-radius: 0.3rem; padding-top:1vh;">
            <div class="card-body">
                <form method='POST' action="{{route('navbar.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <label for="image" class="col-sm-2 col-form-label">Logo Size 1x (normal):</label>
                        <div class="col-sm-7">
                            <input id="logo1x" type="file" class="form-control" name="logo1x">Preview:
                            <div id="image-container-1" style="background-color: #484eca; max-width: 30%; margin-bottom: 15px">
                                <img src="{{ asset($navbar->logo1x) }}" id="logo1x-tag" style="max-width: 130px" />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <label for="image" class="col-sm-2 col-form-label">Logo Size 2x:</label>
                        <div class="col-sm-7">
                            <input id="logo2x" type="file" class="form-control" name="logo2x">Preview:
                            <div id="image-container-2" style="background-color: #484eca; max-width: 45%; margin-bottom: 15px">
                                <img src="{{ asset($navbar->logo2x) }}" id="logo2x-tag" style="max-width: 250px" />
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="link1">Navbar Link 1:</label>
                        <input type="text" class="form-control" id="link1" value="{{ $navbar->link1 }}" name="link1" required>
                    </div>
                    <div class="form-group">
                        <label for="link2">Navbar Link 2:</label>
                        <input type="text" class="form-control" id="link2" value="{{ $navbar->link2 }}" name="link2" required>
                    </div>
                    <div class="form-group">
                        <label for="link3">Navbar Link 3:</label>
                        <input type="text" class="form-control" id="link3" value="{{ $navbar->link3 }}" name="link3" required>
                    </div>
                    <div class="form-group">
                        <label for="link4">Navbar Link 4:</label>
                        <input type="text" class="form-control" id="link4" value="{{ $navbar->link4 }}" name="link4" required>
                    </div>
                    <div class="form-group">
                        <label for="link5">Navbar Link 5:</label>
                        <input type="text" class="form-control" id="link5" value="{{ $navbar->link5 }}" name="link5" required>
                    </div>
                    <div class="form-group">
                        <label for="button">Button Text:</label>
                        <input type="text" class="form-control" id="button" value="{{ $navbar->button }}" name="button" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $("#menu-toggle-2").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled-2");
            $('#menu ul').hide();
        });

        function initMenu() {
            $('#menu ul').hide();
            $('#menu ul').children('.current').parent().show();
            //$('#menu ul:first').show();
            $('#menu li a').click(
                function() {
                    var checkElement = $(this).next();
                    if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                        return false;
                    }
                    if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                        $('#menu ul:visible').slideUp('normal');
                        checkElement.slideDown('normal');
                        return false;
                    }
                }
            );
        }
        $(document).ready(function() {
            initMenu();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#logo1x-tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#logo2x-tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logo1x").change(function() {
            readURL(this);
        });
        $("#logo2x").change(function() {
            readURL2(this);
        });
    </script>
</body>

</html>