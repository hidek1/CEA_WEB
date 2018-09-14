<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests\ExperienceRequest;
use App\Http\Controllers\Controller;
use App\Experience;
use App\User;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('index_experience');
    }

    public function confirm(ExperienceRequest $request)
    {
        $experience = new Experience($request->all());
        $user_id = Auth::user()->id;
        return view('index_experience_confirm', compact('experience', 'user_id'));
    }

    public function complete(ExperienceRequest $request)
    {
        $input = $request->except('action');
         
        if ($request->action === '戻る') {
            return redirect()->action('ExperienceController@index')->withInput($input);
        }
        
        Experience::create($request->all());
     
        $request->session()->regenerateToken();
             
        return view('index_experience_complete');
    }

    public  function show($id) {
        $experience = Experience::findOrFail($id);
        $user_name = User::findOrFail($experience->user_id)->name;
        return view('index_experience_show', compact('experience','user_name'));
    }

    public function edit($id) {
        $experience = Experience::findOrFail($id);
        return view('dashboard_experience_edit', compact('experience'));
    }
 
    public function update(ExperienceRequest $request, $id) {
        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
        return redirect(url('dashboard_experience_list'));
    }

    public function destroy($id) {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect('dashboard_experience_list');
    }
}
