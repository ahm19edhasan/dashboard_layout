<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Share;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        // $data['advertisements'] = Advertisement::query()->orderByDesc('created_at')->limit(5)->get();
        // $data['advertisers'] = User::query()->where('user_type', 'advertiser')->orderBy('created_at')->limit(5)->get();
        // $data['publishers'] = User::query()->where('user_type', 'publisher')->orderBy('created_at')->limit(5)->get();
        // $data['share_count'] = Share::where('user_id', Auth::id())->count();
        // $data['visitors_count'] = Visitor::where('user_id', Auth::id())->count();

        // $data['statistics'] = Share::where('user_id', Auth::id())
        //     ->select('type')
        //     ->selectRaw(DB::raw("COUNT(type) as count"))
        //     ->groupBy('type')
        //     ->orderByDesc('count')
        //     ->get();

        // $data['visitorCharts'] = Visitor::where('user_id', Auth::id())
        //     ->select('type')
        //     ->selectRaw(DB::raw("COUNT(type) as count"))
        //     ->groupBy('type')
        //     ->orderByDesc('count')
        //     ->get();

        // $data['shares'] = Share::query()->whereHas('advertisements', function($query){
        //     $query->where('user_id', Auth::id());
        // })->count();

        // $data['visitors'] = Visitor::query()->whereHas('advertisement', function($query){
        //     $query->where('user_id', Auth::id());
        // })->count();

        // $data['shares_list'] = Share::query()->with('advertisements')->whereHas('advertisements', function($query){
        //     $query->where('user_id', Auth::id());
        // })->limit(4)
        //     ->get()
        //     ->groupBy('advertisement_id');

        return view('dashboard.index', /*$data*/);
    }
}
