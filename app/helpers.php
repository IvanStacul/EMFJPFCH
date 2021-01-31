<?php

function reemplazarFecha($fecha)
  {
    $patrones = array(
      '/January/',
      '/February/',
      '/March/',
      '/April/',
      '/May/',
      '/June/',
      '/July/',
      '/August/',
      '/September/',
      '/October/',
      '/November/',
      '/December/'
    );

    $sustituciones = array(
      "de Enero de",
      "de Febrero de",
      "de Marzo de",
      "de Abril de",
      "de Mayo de",
      "de Junio de",
      "de Julio de",
      "de Agosto de",
      "de Septiembre de",
      "de Octubre de",
      "de Noviembre de",
      "de Diciembre de"
    );

    $cadena = (date('d F Y', strtotime($fecha)));
    return preg_replace($patrones, $sustituciones, $cadena);
  }
