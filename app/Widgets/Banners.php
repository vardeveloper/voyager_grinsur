<?php

namespace App\Widgets;

use App\Banner;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class Banners extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Banner::count();
        $string = 'Banners';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-photos',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Banners',
                'link' => route('voyager.banners.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}
