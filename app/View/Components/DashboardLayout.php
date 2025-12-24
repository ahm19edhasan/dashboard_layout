<?php

namespace App\View\Components;

use App\Models\Share;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class DashboardLayout extends Component
{
    public $title;
    public $subTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subTitle)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.dashboard-layout');
    }
}
