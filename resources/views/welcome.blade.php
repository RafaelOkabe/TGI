<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv = "refresh" content="5"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">

    <link rel="stylesheet" href="{{asset('assets/vendors/sweetalert2/css/sweetalert2.min.css')}}">

    <title>TGI</title>
</head>

<body>
    <section>
        <div id="left">
            <div class="restaurant" id="restaurant6">Restaurante 6</div>
            <div class="restaurant" id="restaurant5">Restaurante 5</div>
            <div class="restaurant" id="restaurant4">Restaurante 4</div>
            <div class="restaurant" id="restaurant3">Restaurante 3</div>
            <div class="restaurant" id="restaurant2">Restaurante 2</div>
            <div class="restaurant" id="restaurant1">Restaurante 1</div>
        </div>
        <div id="mid">
            <div class="restaurant" id="restaurant7">Restaurante 7</div>
            <div class="divmesas1"></div>

            <div class="divmesas2">
                @for ($i =0; $i <= 5; $i++) 
                <div class="mesas" id="mesa1" 
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}} 
                >
                    {{$dataSite[$i]->id}}
            </div>
            @endfor
        </div>

        <div class="divmesas2">
            @for ($i =6; $i <= 11; $i++) 
                <div class="mesas" id="mesa1" 
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}} 
                >
                {{$dataSite[$i]->id}}
        </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =12; $i <= 17; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}} 
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =18; $i <= 23; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =24; $i <= 29; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =30; $i <= 35; $i++) 
                <div class="mesas" id="mesa1" 
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                {{$dataSite[$i]->id}}
        </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =36; $i <= 41; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =42; $i <= 47; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =48; $i <= 53; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>

        <div class="divmesas2">
            @for ($i =54; $i <= 59; $i++) 
                <div class="mesas" id="mesa1"
                    @if ($dataSite[$i]->ocupation == '1') style="background: red" @endif
                    @if ($dataSite[$i]->ocupation == '2') style="background: #ffc10e" @endif
                    valor={{$dataSite[$i]->id}}
                >
                    {{$dataSite[$i]->id}}
                </div>
        @endfor
        </div>
        </div>
        <div id="right">
            <div class="restaurant" id="restaurant8">Restaurante 8</div>
            <div class="restaurant" id="restaurant9">Restaurante 9</div>
            <div class="restaurant" id="restaurant10">Restaurante 10</div>
            <div class="restaurant" id="restaurant11">Restaurante 11</div>
            <div class="restaurant" id="restaurant12">Restaurante 12</div>
            <div class="restaurant" id="restaurant13">Restaurante 13</div>
        </div>
{{-- 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo">Open modal for @mdo</button> --}}

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manutenção </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('solitacaoManutencao.update')}}" method="POST" id="manutencaoForm">
                            @csrf
                            <input type="hidden" name="id" value="" id="idMesa">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Pedido:</label>
                                <select name="status" class="form-control">
                                    <option value="2">Solicitar Manutenção</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary salva">Salva</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="module" src="/js/index.js"></script>
</body>

</html>
