<?php

namespace App\View\Composer;

use Illuminate\View\View;

class SettingComposer
{
    public function compose(View $view)
    {
        $categories = ['cat1', 'cat2', 'cat3'];
        $view->with('categories', $categories);
    }
}
