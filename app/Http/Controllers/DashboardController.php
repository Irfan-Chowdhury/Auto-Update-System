<?php

namespace App\Http\Controllers;

use App\Traits\AutoUpdateTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use AutoUpdateTrait;

    public function index()
    {
        $autoUpdateData = $this->general();
        $alertBugEnable =  $autoUpdateData['alertBugEnable'];
        $alertVersionUpgradeEnable = $autoUpdateData['alertVersionUpgradeEnable'];
        return view('dashboard', compact('alertBugEnable','alertVersionUpgradeEnable'));
    }
}
