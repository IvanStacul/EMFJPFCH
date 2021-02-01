<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveMembershipApplicationRequest;
use App\Models\MembershipApplication;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;

class MembershipApplicationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = 'EMFJPFCH | Formulario de Afiliación';
    return view('atajos.afiliacion.create', compact('title'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SaveMembershipApplicationRequest $request)
  {
    $validated = $request->validated();
    // MembershipApplication::create($validated);
    $pdf = PDF::loadView('atajos.afiliacion.template', compact('validated'));
    Storage::put('solicitudes/pruebapdf.pdf',$pdf->download());
    // return $pdf->download('formulario.pdf');
    return back()->with('status','Formulario enviado con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\MembershipApplication  $membershipApplication
   * @return \Illuminate\Http\Response
   */
  public function show(MembershipApplication $membershipApplication)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\MembershipApplication  $membershipApplication
   * @return \Illuminate\Http\Response
   */
  public function edit(MembershipApplication $membershipApplication)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\MembershipApplication  $membershipApplication
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, MembershipApplication $membershipApplication)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\MembershipApplication  $membershipApplication
   * @return \Illuminate\Http\Response
   */
  public function destroy(MembershipApplication $membershipApplication)
  {
    //
  }
}
