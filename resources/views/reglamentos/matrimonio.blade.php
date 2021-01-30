@extends('layouts.app')

@section('content')

<main>
  <div class="container">
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}">Inicio</a>
      </li>
      <li>
        <a href="{{ route('subsidios.matrimonio') }}">
          Subsidios por casamiento
        </a>
      </li>
      <li class="active">Reglamento</li>
    </ol>

    <section>
      <article class="content_format row m-y-2">
        <div class="col-md-10 col-md-offset-1">
          <h1>
            Reglamento del servicio de subsidios por casamiento del asociado
            titular de la "Entidad de Magistrados y Funcionarios de la Justicia
            de Paz y Faltas de Chaco.”
          </h1>

          <hr />

          <h2>Fundamentos</h2>

          <p>
            Que es necesario establecer normas claras que permitan a los
            integrantes de la Comisión Directiva de la Entidad de Magistrados y
            Funcionarios de la Justicia de Paz y Faltas de Chaco, administrar
            los recursos societarios aportados con base a criterios de
            legalidad, honestidad, eficiencia, eficacia, economía, racionalidad,
            austeridad, transparencia, control y rendición de cuentas;
          </p>

          <p>
            Que los gastos deberán ser los estrictamente necesarios para
            contribuir al eficaz y eficiente cumplimiento de los objetivos
            previstos en el art. 2 del Estatuto de la Entidad de Magistrados y
            funcionarios de la Justicia de Paz y Faltas de Chaco.-
          </p>

          <p>
            Que los gastos por concepto de “Subsidios por Casamiento” se deben
            ejercer bajo criterios de austeridad, racionalidad, honestidad,
            eficiencia, eficacia, economía y transparencia, para dar
            cumplimiento a los objetivos y a las funciones conferidas a la
            Comisión Directiva en art. 21 inc. “h” del Estatuto vigente, entre
            otros, hemos tenido a bien emitir las siguientes:
          </p>

          <p>
            El subsidio por Casamiento del asociado titular implementado por la
            ENTIDAD DE MAGISTRADOS Y FUNCIONARIOS DE LA JUSTICIA DE PAZ Y FALTAS
            DE CHACO, se regirá por las condiciones que se establecen en el
            presente Reglamento.
          </p>

          <h2>Normas</h2>

          <h3>ARTÍCULO PRIMERO.</h3>
          <p>
            Será beneficiario de este subsidio el asociado titular que acredite
            haber contraído enlace matrimonial de acuerdo a las leyes
            nacionales.
          </p>

          <h3>ARTÍCULO SEGUNDO</h3>
          <p>
            Este subsidio tendrá vigencia cuando el asociado titular registre
            una antigüedad de afiliación superior a un (1) año y la fecha del
            enlace sea con posterioridad a dicho plazo.
          </p>

          <h3>ARTÍCULO TERCERO</h3>
          <p>
            Para percibir el subsidio, el asociado titular deberá presentar a la
            Entidad la correspondiente solicitud y la partida de casamiento.
          </p>

          <h3>ARTÍCULO CUARTO</h3>
          <p>
            En el supuesto que el asociado mantenga deuda con atraso en la
            Entidad, el monto del subsidio será aplicado hasta su concurrencia a
            la cancelación de la misma.
          </p>

          <h3>ARTÍCULO QUINTO</h3>
          <p>
            El monto del subsidio será fijado por la Comisión Directiva de
            acuerdo a la situación económico-financiera de la Entidad, y
            corresponderá abonarse el monto vigente a la fecha del casamiento.
          </p>

          <h3>ARTÍCULO SEXTO</h3>
          <p>
            El subsidio que no sea reclamado formalmente dentro de los SEIS (6)
            MESES de producido el casamiento, con la presentación de la
            pertinente documentación, perderá su vigencia caducando
            automáticamente, no siendo procedente reclamo de ninguna naturaleza
            en fecha posterior.
          </p>

          <h3>ARTÍCULO SÉPTIMO</h3>

          <p>
            Toda duda ó divergencia con respecto a la aplicación del presente
            Reglamento, será resuelta por la Comisión Directiva.
          </p>

          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <blockquote>
                Dada en la Reunión de Comisión Directiva de la E.M.F.J.P.F.CH.,
                a los diecinueve días del mes de mayo del año dos mil
                diecisiete.-
              </blockquote>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
</main>

@endsection
