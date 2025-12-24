<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\Setting;
use Illuminate\View\Component;

class FrontLayout extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $setting = Setting::all();
        $latest_blogs = Blog::query()->orderByDesc('created_at')->limit(2)->get();
        return view('layouts.front-layout', compact('setting', 'latest_blogs'));
    }
}
