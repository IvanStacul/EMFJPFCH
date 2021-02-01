<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,
        pre {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
            font-size: 11pt;
        }

        header {
            text-align: center;
        }

        .rigth {
            text-align: right;
        }

        .left {
            text-align: left;
        }

        .tab {
            margin-left: 70px;
        }

        .data {
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 12pt;
        }
    </style>
</head>


<body>
    <header>
        <span><img src="{{ env('APP_URL') }}/img/logo.png" alt="Logo de la entidad" width="170" height="90"></span>
    </header>
    <section>
        <article>
            <header class="left">
                A los Integrantes de la <br />
                Comisión Directiva <br />
                de la E.M.F.J.P.F.CH <br />
                S________/_______D: <br />
            </header>
            <p class="left">
                <span class="tab"></span> En mi carácter de Magistrado/Funcionario de la Justicia de Paz de la Provincia del Chaco,
                solicito mi afiliación a esa Entidad. A Tal fin declaro conocer, respetar y hacer cumplir
                lo dispuesto en los Estatutos Sociales, Reglamentos Internos y Resoluciones emanadas de órganos directivos.
                Asimismo autorizo a descontar por Planilla de Haberes, el importe correspondiente al (5%) sobre el total
                de mis remuneracions BASICAS (solo sobre el rubro básico) MENSUALES CORRESPONDIENTES AL CARGO QUE OCUPO,
                o en su caso lo que las autoridades competentes dispongan a futuro, previa prestación de mi consentimiento.-
            </p>
            <p class="rigth">
                Firma:.......................................................<br> <br>
                Aclaración:................................................<br>
            </p>
            <p class="left">
Afiliado/Empleado Nº: ........................................... </span> <br />
Apellido/s y Nombre/s: <span class="data">{{ $validated['name'] . ', ' . $validated['last_name'] }}</span> <br>
D.N.I.Nº: <span class="data"><?php echo number_format($validated['dni'], 0, ',', '.') . '                                                        '; ?> </span> Nacionalidad: <span class="data"><?php echo $validated['nationality']; ?> </span> <br>
Fecha de Nacimiento: <span class="data">{{$validated['birthdate'] . '                                  '}}</span> Estado Civil: <span class="data"><?php echo $validated['civil_status']; ?> </span> <br>
Domicilio Particular: <span class="data"><?php echo $validated['home_address']; ?> </span> <br>
E-mail: <span class="data"><?php echo $validated['email']; ?> </span> <br>
Teléfono Particular:..................................................................................................................<br>
Teléfono Laboral:.....................................................................................................................<br>
Cargo que ocupa: <span class="data"><?php echo $validated['job']; ?> </span><br>
Dependencia donde presta servicio: <span class="data"><?php echo $validated['department']; ?> </span> <br>
Circusncripcion: <span class="data"><?php echo $validated['region'] . '                                  '; ?></span> Localidad: <span class="data"><?php echo $validated['department']; ?></span> <br>
<br>
      </p>
            <p>
                .........................................................,..............de.........................de.........................................<br>
                VISTO: La solicitud de afiliación presentada, la Entidad RESUELVE: aceptar en carácter de Afiliado Activo de la Entidad a...................................................................................................<br>
                DNI Nº.................................................................<br>
            </p>

            <p class="rigth">
                <br>
                <br>
                ..........................................................<br>
                Firma y sello de persona autorizada<br>
            </p>
        </article>
    </section>
</body>

</html>
