<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{

    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'SIDESI_PA2';
    }

    public function render()
    {
        return view('theme.app.main');
    }
}
?>