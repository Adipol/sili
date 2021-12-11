<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMLC - Listas de control</title>
    <style type="text/css" media="all">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        label,
        span,
        table {
            font-family: 'BrixSansRegular';
            font-size: 10pt;

        }

        .h2 {
            font-family: 'BrixSansBlack';
            font-size: 16pt;
            color: #FFF;
        }

        .h3 {
            font-family: 'BrixSansBlack';
            font-size: 12pt;
            display: block;
            background: #1E3A8A;
            color: #FFF;
            text-align: center;
            padding: 3px;
            margin-bottom: 5px;
        }

        .h4 {
            font-family: 'BrixSansBlack';
            font-size: 11pt;
            display: block;
            color: #FFF;
            text-align: center;
            padding: 3px;
            margin-bottom: 5px;
        }

        img {
            width: 150px
        }

        #page_pdf {
            width: 95%;
            margin: 15px auto 10px auto;
        }

        #factura_head,
        #factura_detalle {
            width: 100%;
            margin-bottom: 10px;
        }


        #pep {
            height: 50px;
            width: 100%;

        }

        {{-- #pep td {
            padding: 2px 0;
            width: 10%;

        } --}} #factura_head {
            font-family: 'BrixSansBlack';
            background: #1E3A8A;
            height: 50px;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom: 2px solid #0a4661;
            border-top: 1px solid #0a4661;
            padding: 35px 20px;

        }

        .logo_factura {
            width: 25%;
        }

        .info_empresa {
            width: 50%;
            text-align: center;
        }

        .info_factura {
            width: 20%;

        }

        .info_cliente {
            height: 50px;
            width: 100%;

        }


        .datos_cliente {
            padding: 10px 50px 0 20px;
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 10px;

        }

        .datos_cliente td:empty {
            width: 500px;
        }

        .first-child {
            width: 70%;
            text-align: left;
        }

        .second-child {
            width: 20%;
            text-align: left;
        }

        .datos_cliente label {
            width: 75px;
        }

        .round {
            border-radius: 10px;
            border: 1px solid #0a4661;
            overflow: hidden;
            padding-bottom: 15px;
            background-color: #FFF;
            padding: 0 15px;
            width: 90%;
        }

        .round1 {
            border-radius: 10px;
            border: 1px solid #0a4661;
            overflow: hidden;
            padding-bottom: 15px;
            background-color: #E0E0E0E0;

        }

        .round1 input {
            padding: 0 15px;
            width: 100%;
        }

        .round1 textarea {
            padding: 0 15px;
            width: 100%;
        }

        .nota {
            font-size: 8pt;
        }

        #you {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100;
            font-size: 9pt;
        }

        #you td,
        #you th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #yout th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: #fff
        }

    </style>
</head>

<body>
    <div id="page_pdf">
        <table id="factura_head">
            <tr>
                <td class="logo_factura">
                    <div>
                        {{-- <img alt='My Pic' id='thumb' src='https://s.cdpn.io/1202/timpietrusky_on_rampage_small_1.jpg'> --}}
                    </div>
                </td>
                <td class="info_empresa">
                    <div>
                        <span class="h2">AMLC - Listas de control</span>
                        <span class="h4">REPORTE DE CONSULTA</span>
                    </div>
                </td>
                <td class="info_factura">
                    <div class="round">
                        <p>Fecha: {{ $date->format('d-m-Y') }}</p>
                        <p>Hora: {{ $date->format('H:i') }}</p>
                        <p>Usuario: {{ Auth::user()->name }}</p>
                    </div>
                </td>
            </tr>
        </table>

        <table id="pep">
            <tr>
                <td class="info_cliente">
                    <div class="round1">
                        <span class="h3">Datos consultados</span>
                        <table class="datos_cliente">
                            <tr>

                                <td class="first_child"><label>Primer Nombre: </label></td>
                                <td class="second_child"> <input type="text" name=""
                                        value="{{ $pep->name_one }}"></input></td>

                            </tr>
                            <tr>
                                <td><label>Segundo Nombre: </label></td>
                                <td> <input type="text" name="" value="{{ $pep->name_two }}"></input></td>
                            </tr>
                            <tr>
                                <td> <label>Primer Apellido: </label></td>
                                <td><input type="text" name="" value="{{ $pep->last_name_one }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Segundo Apellido: </label></td>
                                <td> <input type="text" name="" value="{{ $pep->last_name_two }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Cargo: </label></td>
                                <td><input type="text" name="" value="{{ $pep->position }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Entidad: </label></td>
                                <td><input type="text" name="" value="{{ $pep->entity }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Gestión: </label></td>
                                <td><input type="text" name="" value="{{ $pep->management }}"></input></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <table id="pep">
            <tr>
                <td class="info_cliente">
                    <div class="round1">
                        <span class="h3">Allegados</span>
                        <table class="you">
                            <thead>
                                <tr>
                                    <th>
                                        Primer nombre
                                    </th>
                                    <th>
                                        Segundo nombre
                                    </th>
                                    <th>
                                        Primer Apellido
                                    </th>
                                    <th>
                                        Segundo Apellido
                                    </th>
                                    <th>
                                        Documento
                                    </th>
                                    <th>
                                        Numero
                                    </th>
                                    <th>
                                        Extensión
                                    </th>
                                    <th>
                                        Tipo allegado
                                    </th>
                                    {{-- <th>
                                        Detalle
                                    </th> --}}
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($all as $one)
                                    <tr>
                                        <td> {{ $one->name_one }}</td>
                                        <td>{{ $one->name_two }}
                                        </td>
                                        <td>
                                            {{ $one->last_name_one }}
                                        </td>
                                        <td>{{ $one->last_name_two }}
                                        </td>
                                        <td>
                                            {{ $one->type_document }}
                                        <td>
                                            {{ $one->nro_document }}
                                        </td>
                                        <td>
                                            {{ $one->extension }}
                                        </td>
                                        <td>
                                            {{ $one->type_fam }}
                                        </td>
                                        {{-- <td>
                                            {{ $one->detail }}
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <div>
            <p class="nota">powered by <br>AMLC</p>
        </div>
    </div>
</body>

</html>
