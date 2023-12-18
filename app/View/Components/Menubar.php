<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menubar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title = 'Default')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $menus = [
        //     [
        //         'type' => 'single',
        //         'menus' => [
        //             ['label']
        //         ]
        //     ],
        //     [
        //         'type' => 'nested',
        //     ],
        // ];

        return view('components.menubar');
    }
}
