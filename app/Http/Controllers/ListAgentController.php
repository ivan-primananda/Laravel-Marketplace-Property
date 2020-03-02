<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Message;
use App\Agent;
use Storage;

class ListAgentController extends Controller
{
    public function listAgent()
    {
        $listAgents = Agent::orderBy('full_name', 'asc')->paginate(10);
        $jumlahAgent = Agent::count();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('listAgent', compact('listAgents', 'jumlahAgent', 'jumlah'));
    }

    public function detailAgent($id)
    {
        $agent = Agent::findOrFail($id);

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('detailAgent', compact('agent', 'jumlah'));
    }

    public function downloadAgent($id)
    {
        $agent = Agent::findOrFail($id);
        $file = 'AgentCV/' .$agent->file_cv;
        return response()->download($file, $agent->file_cv);
        return view('detailAgent', compact('agent'));
    }
    
}
