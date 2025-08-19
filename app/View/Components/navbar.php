<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $links = [
            "Home" => route('home'),
            "Ltd" => route('ltd'),
            "PodPink" =>route("podpink")
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
