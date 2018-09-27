<?php
namespace App\Http\Controllers;
 
use App\Http\Requests\RegiAgencyRequest;
use App\Http\Controllers\Controller;
use App\RegiAgency;
 
class RegiAgencyController extends Controller
{
    public function index()
    {
        $programs = RegiAgency::$programs;
        $terms = RegiAgency::$terms;
        return view('index_registration_agency', compact('programs', 'terms'));
    }

    public function confirm(RegiAgencyRequest $request)
    {
        $regi_agency = new RegiAgency($request->all());

        return view('index_registration_agency_confirm', compact('regi_agency'));
    }

    public function complete(RegiAgencyRequest $request)
    {
        $input = $request->except('action');
         
        if ($request->action === __('messages.back')) {
            return redirect()->action('RegiAgencyController@index')->withInput($input);
        }
        
        RegiAgency::create($request->all());
     
        $request->session()->regenerateToken();
             
        return view('index_registration_agency_complete');
    }

    public function list()
    {
        $regi_agencys = RegiAgency::all();
        return view('dashboard_registration_agency_list', compact('regi_agencys'));
    }

    public function edit($id) {
        $regi_agency = RegiAgency::findOrFail($id);
        $programs = RegiAgency::$programs;
        $terms = RegiAgency::$terms;
        return view('dashboard_registration_agency_edit', compact('regi_agency','programs', 'terms'));
    }
 
    public function update(RegiAgencyRequest $request, $id) {
        $regi_agency = RegiAgency::findOrFail($id);
        
        $regi_agency->update($request->all());
 
        return redirect(url('dashboard_angecy_list'));
    }

    public function destroy($id) {
        $regi_agency = RegiAgency::findOrFail($id);
 
        $regi_agency->delete();
 
        return redirect('dashboard_angecy_list');
        }
}