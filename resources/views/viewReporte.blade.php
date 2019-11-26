<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        
        <style type="text/css">

        body{
        font-size: 16px;
        font-family: "Arial";
        }
        table{
        border-collapse: collapse;
        }
        td{
            padding: 6px 5px;
            font-size: 15px;
        }
        .h1{
            font-size: 21px;
            font-weight: bold;
        }
        .h2{
            font-size: 18px;
            font-weight: bold;
        }
        .tabla1{
            margin-bottom: 20px;
        }
        .tabla2 {
            margin-bottom: 20px;
        }
        .tabla3{
            margin-top: 15px;
        }
        .tabla3 td{
            border: 1px solid #000;
        }
        .tabla3 .cancelado{
            border-left: 0;
            border-right: 0;
            border-bottom: 0;
            border-top: 1px dotted #000;
            width: 200px;
        }
        .emisor{
            color: red;
        }
        .linea{
            border-bottom: 1px dotted #000;
        }
        .border{
            border: 1px solid #000;
        }
        .fondo{
            background-color: #dfdfdf;
        }
        .fisico{
            color: #fff;
        }
        .fisico td{
            color: #fff;
        }
        .fisico .border{
            border: 1px solid #fff;
        }
        .fisico .tabla3 td{
            border: 1px solid #fff;
        }
        .fisico .linea{
            border-bottom: 1px dotted #fff;
        }
        .fisico .emisor{
            color: #fff;
        }
        .fisico .tabla3 .cancelado{
            border-top: 1px dotted #fff;
        }
        .fisico .text{
            color: #000;
        }
        .fisico .fondo{
            background-color: #fff;
        }
        #logo{
        display: none;
        }
        </style>
    </head>
    <body>
        <table width="100%" class="tabla1">
            <tr>
                <td width="73%" align="center"><img id="logo" src="../public/img/logo1.jpg" alt="" width="255" height="57"></td>
                <td width="27%" rowspan="3" align="center" style="padding-right:0">
                    <table width="100%">
                        <tr>
                            <td height="40" align="center" class="border fondo"><span class="h1">LISTA DE DOCENTES</span></td>
                        </tr>
                        <tr>
                            <td height="30" align="center" class="border">001- Nº <span class="text"></span></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center">Jr. Santander Nro. 340 Jesus María - Lima</td>
            </tr>
            <tr>
                <td align="center">Telf.: (01) 364-2547 Cel.: 985-748514</td>
            </tr>
        </table>
        <table width="100%" class="tabla2">
            <tr>
                <td width="11%"></td>
                <td width="37%" class="linea"><span class="text"></span></td>
                <td width="5%">&nbsp;</td>
                <td width="13%">&nbsp;</td>
                <td width="4%">&nbsp;</td>
                <td width="7%" align="center" class="border fondo"><strong>DÍA</strong></td>
                <td width="8%" align="center" class="border fondo"><strong>MES</strong></td>
                <td width="7%" align="center" class="border fondo"><strong>AÑO</strong></td>
            </tr>
            <tr>
                <td></td>
                <td class="linea"><span class="text"></span></td>
                <td></td>
                <td class="linea"><span class="text"></span></td>
                <td>&nbsp;</td>
                <td align="center" class="border"><span class="text"></span></td>
                <td align="center" class="border"><span class="text"></span></td>
                <td align="center" class="border"><span class="text"></span></td>
            </tr>
        </table>
        <table width="100%" class="tabla3">
            <tr>
                <td align="center" class="fondo"><strong>ID</strong></td>
                <td align="center" class="fondo"><strong>NOMBRE</strong></td>
                <td align="center" class="fondo"><strong>APELLIDO</strong></td>
                <td align="center" class="fondo"><strong>PROFESION</strong></td>
            </tr>
            @foreach ($listaDocentes as $undocente)
            <tr>
                    <td width="10%" align="center"><span class="text">{{$undocente->id}}</span></td>
                    <td width="30%"><span class="text">{{$undocente->nombre}}</span></td>
                    <td width="30%" align="right"><span class="text">{{$undocente->apellido}}</span></td>
                    <td width="30%" align="right"><span class="text">{{$undocente->profesion}}</span></td>
            </tr>
            @endforeach                                        
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td align="right"><strong>CANTIDAD</strong></td>
                <td align="right"><span class="text">{{$cantDocentes}}</span></td>
            </tr>
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
            </tr>
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
            </tr>
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
            </tr>
    
                    <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;">
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" class="cancelado">FIRMA</td>
                        </tr>
                    </table>
                </td>
                <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;" class="emisor"><strong>RECEPCIONADO</strong></td>
            </tr>
        </table>
    </body>
</html>