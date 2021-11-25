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

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;

            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
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
            margin-bottom: 50px;

        }

        #pep td {
            padding: 2px 0;
            width: 10%;

        }

        #factura_head {
            font-family: 'BrixSansBlack';
            background: #1E3A8A;
            height: 90px;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom: 2px solid #0a4661;
            border-top: 1px solid #0a4661;

            padding: 35px 20px;
            opacity: .9;

        }

        .logo_factura {
            width: 25%;
        }

        .info_empresa {
            width: 50%;
            text-align: center;
        }

        .info_factura {
            width: 25%;

        }

        .info_cliente {
            width: 100%;
            table-layout: auto;
        }

        .datos_cliente {
            table-layout: auto;

        }

        .datos_cliente tr td {
            width: 100%;

        }

        .datos_cliente {
            padding: 10px 10px 0 10px;
            table-layout: auto;
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

        .nota {
            font-size: 8pt;
        }

    </style>
</head>

<body>
    <div id="page_pdf">
        <table id="factura_head">
            <tr>
                <td class="logo_factura">
                    <div>
                        {{-- <img src="{{ asset('img/home/logow.png') }}"> --}}
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

                                <td><label>Primer Nombre: </label></td>
                                <td colspan="3"> <input type="text" name="" value="{{ $pep->name_one }}"></input></td>

                            </tr>
                            <tr>
                                <td><label>Segundo Nombre: </label></td>
                                <td> <input type="text" name="" value="{{ $pep->name_two }}"></input></td>
                                <td> <label>Primer Apellido: </label></td>
                                <td><input type="text" name="" value="{{ $pep->last_name_one }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Segundo Apellido: </label></td>
                                <td> <input type="text" name="" value="{{ $pep->last_name_two }}"></input></td>
                                <td><label>Tipo de Documento: </label> </td>
                                <td> <input type="text" name="" value="{{ $pep->type_document }}"></input></td>

                            </tr>
                            <tr>
                                <td><label>Numero de Documento: </label></td>
                                <td><input type="text" name="" value="{{ $pep->nro_document }}"></input></td>
                                <td><label>Tipo de Lista: </label> </td>
                                <td><input type="text" name="" value="{{ $pep->code }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Cargo: </label></td>
                                <td colspan="3"><input type="text" name="" value="{{ $pep->position }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Entidad: </label></td>
                                <td colspan="3"><input type="text" name="" value="{{ $pep->entity }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Gestión: </label></td>
                                <td><input type="text" name="" value="{{ $pep->management }}"></input></td>
                            </tr>
                            <tr>
                                <td><label>Justificacion: </label></td>
                                <td colspan="3"><textarea type="text" name="" cols="70"
                                        rows="5">{{ $pep->justification }}</textarea>
                                </td>
                            </tr>
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
