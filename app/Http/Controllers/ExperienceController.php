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

    public function complete(ExperienceRequest $request)
    {   
        Experience::create($request->all());
        $request->session()->regenerateToken();
        return view('index_experience_complete');
    }

    public function edit($id) {
        $experience = Experience::findOrFail($id);
        $scores = Experience::$scores;
        return view('dashboard_experience_edit', compact('experience','scores'));
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
