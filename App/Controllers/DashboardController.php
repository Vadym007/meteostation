<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Indicator;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index ()
    {
        $indicators = Indicator::all();

        $lastUpdate = null;
        if(count($indicators)) {
            $lastUpdate = $indicators[count($indicators)-1]['created_at'];
            $lastUpdate = Carbon::parse($lastUpdate)->format('H:i, d-m-Y');
        }

        return $this->renderView('dashboard', ['indicators' => $this->prepareData($indicators), 'lastUpdate' => $lastUpdate]);
    }

    private function prepareData(array $indicators)
    {
        $result = $indicators;
        
        foreach($indicators as $k=>$indicator)
        {
            $result[$k]['created_at'] = Carbon::parse($indicator['created_at'])->format('H:i, d-m');
        }

        return $result;
    }
}