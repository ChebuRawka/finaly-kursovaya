<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultationRequest;

class AdminController extends Controller
{
    public function index()
    {
        $consultationRequests = ConsultationRequest::all();
        return view('admin.index', compact('consultationRequests'));
    }
}

