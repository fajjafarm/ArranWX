<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Trait\Menu;

class GenerateMenus
{
    use Menu;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        \Menu::make('HopeUIMenu', function ($menu) {
            // Home Static
            $this->staticMenu($menu, ['title' => 'Home', 'order' => 0]);

            // Dashboard
            $this->mainRoute($menu, [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none"><path opacity="0.4" d="M2 4C2 2.89543 2.89543 2 4 2H9C10.1046 2 11 2.89543 11 4V20C11 21.1046 10.1046 22 9 22H4C2.89543 22 2 21.1046 2 20V4Z" fill="currentColor"></path><path d="M13 4C13 2.89543 13.8954 2 15 2H20C21.1046 2 22 2.89543 22 4V9C22 10.1046 21.1046 11 20 11H15C13.8954 11 13 10.1046 13 9V4Z" fill="currentColor"></path><path d="M13 15C13 13.8954 13.8954 13 15 13H20C21.1046 13 22 13.8954 22 15V20C22 21.1046 21.1046 22 20 22H15C13.8954 22 13 21.1046 13 20V15Z" fill="currentColor"></path></svg>',
                'title' => 'Weather Station',
                'route' => 'dashboard.alternate',
                'active' => 'alternate-dashboard',
                'order' => 10
            ]);
//ferry forecast
//Current Weather conditions
            $this->mainRoute($menu, [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path opacity="0.4" d="M192 32c0-17.7 14.3-32 32-32H352c17.7 0 32 14.3 32 32V64h48c26.5 0 48 21.5 48 48V240l44.4 14.8c23.1 7.7 29.5 37.5 11.5 53.9l-101 92.6c-16.2 9.4-34.7 15.1-50.9 15.1c-19.6 0-40.8-7.7-59.2-20.3c-22.1-15.5-51.6-15.5-73.7 0c-17.1 11.8-38 20.3-59.2 20.3c-16.2 0-34.7-5.7-50.9-15.1l-101-92.6c-18-16.5-11.6-46.2 11.5-53.9L96 240V112c0-26.5 21.5-48 48-48h48V32zM160 218.7l107.8-35.9c13.1-4.4 27.3-4.4 40.5 0L416 218.7V128H160v90.7zM306.5 421.9C329 437.4 356.5 448 384 448c26.9 0 55.4-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 501.7 417 512 384 512c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 437.2 165.1 448 192 448c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z" fill="currentColor"/></svg>',
                'title' => 'Ferry Forecast',
                'route' => 'ferryforecast',
                'active' => 'ferry-forecast',
                'order' => 10
            ]);

//Forecast pages
$menu_style = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path><path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path><path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path><path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path></svg>',
                'title' => 'Forecasts',
                'nickname' => 'forecasts',
                'order' => 10
            ]);
// Submenu-Menu_Style - Child
            $this->childMain($menu_style, [
                'shortTitle' => 'bf',
                'title' => 'catacol',
                'route' => 'catacol'
            ]);
            $this->childMain($menu_style, [
                'shortTitle' => 'br',
                'title' => 'Brodick',
                'route' => 'brodick'
            ]);
                        $this->childMain($menu_style, [
                'shortTitle' => 'co',
                'title' => 'Corrie',
                'route' => 'corrie'
            ]);
                                    $this->childMain($menu_style, [
                'shortTitle' => 'do',
                'title' => 'Dougarie',
                'route' => 'dougarie'
            ]);
                                    $this->childMain($menu_style, [
                'shortTitle' => 'ls',
                'title' => 'Lamlash',
                'route' => 'lamlash'
            ]);
                                    $this->childMain($menu_style, [
                'shortTitle' => 'lo',
                'title' => 'Lochranza',
                'route' => 'lochranza'
            ]);
                                    $this->childMain($menu_style, [
                'shortTitle' => 'sa',
                'title' => 'Sannox',
                'route' => 'sannox'
            ]);
                                    $this->childMain($menu_style, [
                'shortTitle' => 'sh',
                'title' => 'Shiskine',
                'route' => 'shiskine'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'ca',
                'title' => 'Catacol',
                'route' => 'catacol'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'pr',
                'title' => 'Pirnmill',
                'route' => 'pirnmill'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'wb',
                'title' => 'Whiting Bay',
                'route' => 'whitingbay'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'kd',
                'title' => 'Kildonnan',
                'route' => 'kildonnan'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'km',
                'title' => 'Kilmory',
                'route' => 'kilmory'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'gf',
                'title' => 'Goatfell',
                'route' => 'goatfell'
            ]);
                                                $this->childMain($menu_style, [
                'shortTitle' => 'lg',
                'title' => 'Lagg',
                'route' => 'lagg'
            ]);
            
//webcam
            $this->mainRoute($menu, [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none"><path opacity="0.4" d="M2 4C2 2.89543 2.89543 2 4 2H9C10.1046 2 11 2.89543 11 4V20C11 21.1046 10.1046 22 9 22H4C2.89543 22 2 21.1046 2 20V4Z" fill="currentColor"></path><path d="M13 4C13 2.89543 13.8954 2 15 2H20C21.1046 2 22 2.89543 22 4V9C22 10.1046 21.1046 11 20 11H15C13.8954 11 13 10.1046 13 9V4Z" fill="currentColor"></path><path d="M13 15C13 13.8954 13.8954 13 15 13H20C21.1046 13 22 13.8954 22 15V20C22 21.1046 21.1046 22 20 22H15C13.8954 22 13 21.1046 13 20V15Z" fill="currentColor"></path></svg>',
                'title' => 'Arran Webcams',
                'route' => 'arranwebcams',
                'active' => 'arran-webcams',
                'order' => 10
            ]);
                        $this->mainRoute($menu, [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path path opacity="0.4" d="M266.3 48.3L232.5 73.6c-5.4 4-8.5 10.4-8.5 17.1v9.1c0 6.8 5.5 12.3 12.3 12.3c2.4 0 4.8-.7 6.8-2.1l41.8-27.9c2-1.3 4.4-2.1 6.8-2.1h1c6.2 0 11.3 5.1 11.3 11.3c0 3-1.2 5.9-3.3 8l-19.9 19.9c-5.8 5.8-12.9 10.2-20.7 12.8l-26.5 8.8c-5.8 1.9-9.6 7.3-9.6 13.4c0 3.7-1.5 7.3-4.1 10l-17.9 17.9c-6.4 6.4-9.9 15-9.9 24v4.3c0 16.4 13.6 29.7 29.9 29.7c11 0 21.2-6.2 26.1-16l4-8.1c2.4-4.8 7.4-7.9 12.8-7.9c4.5 0 8.7 2.1 11.4 5.7l16.3 21.7c2.1 2.9 5.5 4.5 9.1 4.5c8.4 0 13.9-8.9 10.1-16.4l-1.1-2.3c-3.5-7 0-15.5 7.5-18l21.2-7.1c7.6-2.5 12.7-9.6 12.7-17.6c0-10.3 8.3-18.6 18.6-18.6H400c8.8 0 16 7.2 16 16s-7.2 16-16 16H379.3c-7.2 0-14.2 2.9-19.3 8l-4.7 4.7c-2.1 2.1-3.3 5-3.3 8c0 6.2 5.1 11.3 11.3 11.3h11.3c6 0 11.8 2.4 16 6.6l6.5 6.5c1.8 1.8 2.8 4.3 2.8 6.8s-1 5-2.8 6.8l-7.5 7.5C386 262 384 266.9 384 272s2 10 5.7 13.7L408 304c10.2 10.2 24.1 16 38.6 16H454c6.5-20.2 10-41.7 10-64c0-111.4-87.6-202.4-197.7-207.7zm172 307.9c-3.7-2.6-8.2-4.1-13-4.1c-6 0-11.8-2.4-16-6.6L396 332c-7.7-7.7-18-12-28.9-12c-9.7 0-19.2-3.5-26.6-9.8L314 287.4c-11.6-9.9-26.4-15.4-41.7-15.4H251.4c-12.6 0-25 3.7-35.5 10.7L188.5 301c-17.8 11.9-28.5 31.9-28.5 53.3v3.2c0 17 6.7 33.3 18.7 45.3l16 16c8.5 8.5 20 13.3 32 13.3H248c13.3 0 24 10.7 24 24c0 2.5 .4 5 1.1 7.3c71.3-5.8 132.5-47.6 165.2-107.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM187.3 100.7c-6.2-6.2-16.4-6.2-22.6 0l-32 32c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l32-32c6.2-6.2 6.2-16.4 0-22.6z"/></svg>',
                'title' => 'Earthquakes',
                'route' => 'quake',
                'active' => 'earthquakes-near-arran',
                'order' => 10
            ]);





            // Divider Line
            $this->hrLine($menu, 1060);

           

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $activematches = (is_string($item->activematches)) ? [$item->activematches] : $item->activematches;
                    foreach ($activematches as $pattern) {
                        if (request()->is($pattern)) {
                            $item->active();
                            $item->link->active();
                            if ($item->hasParent()) {
                                $item->parent()->active();
                            }
                        }
                    }
                }

                return true;
            });

        })->sortBy('order');
        return $next($request);
    }
}
