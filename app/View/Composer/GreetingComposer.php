<?php

namespace App\View\Composer;

use Illuminate\View\View;

class GreetingComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $categor = ['cat1', 'cat2', 'cat3'];
        $view->with('categores', $categor);
    }
}
