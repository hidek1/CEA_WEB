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
    public function index($page)
    {   
        if ($page == 'official') {
            return view('official/experience', compact('page'));
        } else {
            return view('index_experience', compact('page'));
        }
    }

    public function confirm(ExperienceRequest $request)
    {   
        $experience = new Experience($request->all());
        $page = $request->page;
        $user_id = Auth::user()->id;
        if ($page == "official") {
            return view('official/experience_confirm', compact('experience', 'user_id','page'));
        } else {
            return view('index_experience_confirm', compact('experience', 'user_id','page'));
        }
    }

    public function complete(ExperienceRequest $request)
    {
        $input = $request->except('action');
        $page = $request->page;
        if ($request->action === 'back') {
            return redirect()->action('ExperienceController@index', $page)->withInput($input);
        }
        
        Experience::create($request->all());
     
        $request->session()->regenerateToken();
             
        if ($page == "official") {
            return redirect('official-home');
        } else {
            return view('index_experience_complete');
        }
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
