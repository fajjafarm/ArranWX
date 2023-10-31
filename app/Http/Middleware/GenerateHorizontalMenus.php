<?php

namespace App\Http\Middleware;

use App\Trait\HorizontalMenu;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GenerateHorizontalMenus
{
    use HorizontalMenu;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Menu::make('HopeUIHorizontalMenu', function ($menu) {

            // Home
            $home = $this->createHomeMenu($menu);

            // Submenu-Home - Child
            $this->childMain($home, [
                'title' => 'Dashboard',
                'route' => 'dashboards',
                'active' => 'dashboards',
                'order' => 10,
            ]);
            $this->childMain($home, [
                'title' => 'Alternate Dashboard',
                'route' => 'dashboard.alternate',
                'active' => 'alternate-dashboard',
                'order' => 10,
            ]);

            

        })->sortBy('order');

        return $next($request);
    }
}
