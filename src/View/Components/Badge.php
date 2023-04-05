<?php
namespace Ryantxr\LaravelQuark\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $slot;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->slot = $slot;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('quark::components.badge');
    }
}
