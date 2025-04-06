<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Retrieve appointments where the doctor_id matches the logged-in user's ID.
        $appointments = Appointment::where('doctor_id', $userId)->get();

        // Extract patient IDs from the appointments.
        $patientIds = $appointments->pluck('patient_id')->toArray();

        // Retrieve user data for the extracted patient IDs.
        $patients = User::whereIn('id', $patientIds)->get();

        // Pass the combined data to the view.
        return view('admin.appointment.appoint', compact('patients'));
    }
}
