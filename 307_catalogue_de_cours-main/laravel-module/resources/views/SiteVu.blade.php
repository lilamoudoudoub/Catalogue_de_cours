@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!doctype html>
                    <html lang="{{ config('app.locale') }}">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">

                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                        <!-- Bootstrap Bundle -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
                        <!-- Bootstrap Separate -->
                        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>-->

                        <title>Majeure</title>
                        <style>
                            .outer-div
                            {
                                padding: 30px;
                                text-align: center;
                                background-color: #f3f3f3;
                            }

                        </style>
                    </head>
                    <body>



                    <div  class="flex-center position-ref full-height">
                        <div class="outer-div">


                            <div namespace="site">
                                <label> Choisir site: </label>

                                <select name="intitulé">
                                    @foreach($data as $item)
                                        <option>{{$item->intitulé}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </br>
                            <a href="promos" class="btn btn-primary float-right">Choisir une promos</a>


                        </div>
                    </div>
                    </body>
                    </html>



                </div>
            </div>
        </div>
    </div>
@endsection



