<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dashboard', compact('assets'));
    }
    public function weatherstation(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('weatherstation', compact('assets'));
    }

    public function index1(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.alternate_dashboard', compact('assets'));
    }
    public function index3(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('wx.wxmain', compact('assets'));
    }
    public function ferryforecast(Request $request): View
    {
        $title = "Arran Ferry Forecast";
        $description = "A rough guide to possible weather realted ferry disruption";
        $assets = ['chart', 'animation'];
        return view('wx.ferryforecast', compact('title','description','assets'));
    }
    public function warnings(Request $request): View
    {
        $title = "Weather Warnings";
        $description = "Weather warnings status for Arran and South West Scotland";
        $assets = ['chart', 'animation'];
        return view('warnings', compact('title','description','assets'));
    }
    
  
        public function arranwebcams(Request $request): View
    {
        $title = "Arran Webcams";
        $assets = ['chart', 'animation'];
        return view('arran-webcams', compact('title','assets'));
    }
            public function quake(Request $request): View
    {
        $assets = ['chart', 'animation'];
        $title = "Earthquakes near Arran";
        return view('wx.quake', compact('title','assets'));
    }


    /*
     * Menu Style Routs
     */
    public function horizontal(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.horizontal',compact('assets'));
    }
    public function dualHorizontal(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dual-horizontal',compact('assets'));
    }
    public function dualCompact(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dual-compact',compact('assets'));
    }
    public function boxed(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed',compact('assets'));
    }
    public function boxedFancy(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed-fancy',compact('assets'));
    }
    public function boxedFixed(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed-fixed',compact('assets'));
    }

    /*
     * Pages Routs
     */
         public function brodick(Request $request): View
    {
        $title = "Brodick Long Range Forecast";
        $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
             public function sannox(Request $request): View
    {
        $title = "Sannox Long Range Forecast";
        //$location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
    public function northernlights(Request $request): View{
    $title = "Northern Lights / Aurora Borealis Forecast";
    //$location = "Brodick";
    return view('northernlights', compact('title'));
    
}
    public function blackwaterfoot(Request $request): View
    {
        $title = "Blackwaterfoot Long Range Forecast";
        //$location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
      
             public function corrie(Request $request): View
    {
        $title = "Corrie Long Range Forecast";
        
        return view('wx.brodick', compact('title'));
        
    }
             public function dougarie(Request $request): View
    {
        $title = "Dougarie Long Range Forecast";
        //$location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
             public function lamlash(Request $request): View
    {
        $title = "Lamlash Long Range Forecast";
      //  $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function lochranza(Request $request): View
    {
        $title = "Lochranza Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
             public function goatfell(Request $request): View
    {
        $title = "Goatfell Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function kildonnan(Request $request): View
    {
        $title = "Kildonnan Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function kilmory(Request $request): View
    {
        $title = "Kilmory Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function lagg(Request $request): View
    {
        $title = "Lagg Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function whitingbay(Request $request): View
    {
        $title = "Whiting-Bay Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function pirnmill(Request $request): View
    {
        $title = "Pirnmill Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function catacol(Request $request): View
    {
        $title = "Catacol Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }
                 public function shiskine(Request $request): View
    {
        $title = "Shiskine Long Range Forecast";
     //   $location = "Brodick";
        return view('wx.brodick', compact('title'));
        
    }


     
    public function billing(Request $request): View
    {
        return view('special-pages.billing');
    }

    public function calender(Request $request): View
    {
        $assets = ['calender'];
        return view('special-pages.calender',compact('assets'));
    }

    public function kanban(Request $request): View
    {
        return view('special-pages.kanban');
    }

    public function pricing(Request $request): View
    {
        return view('special-pages.pricing');
    }

    public function timeline(Request $request): View
    {
        return view('special-pages.timeline');
    }


    /*
     * Widget Routs
     */
    public function widgetBasic(Request $request): View
    {
        return view('widget.widget-basic');
    }
    public function widgetChart(Request $request): View
    {
        $assets = ['chart'];
        return view('widget.widget-chart', compact('assets'));
    }
    public function widgetCard(Request $request): View
    {
        return view('widget.widget-card');
    }

    /*
     * Maps Routs
     */
    public function google(Request $request): View
    {
        return view('maps.google');
    }
    public function vector(Request $request): View
    {
        return view('maps.vector');
    }

    /*
     * Plugins Routs
     */
    public function apexcharts(Request $request): View
    {
        return view('plugins.apexcharts');
    }
    public function buttonHover(Request $request): View
    {
        return view('plugins.button-hover');
    }
    public function choiseJs(Request $request): View
    {
        return view('plugins.choise-js');
    }
    public function flatpickr(Request $request): View
    {
        return view('plugins.flatpickr');
    }
    public function fslightbox(Request $request): View
    {
        return view('plugins.fslightbox');
    }
    public function galleryHover(Request $request): View
    {
        return view('plugins.gallery-hover');
    }
    public function imageCroper(Request $request): View
    {
        return view('plugins.image-croper');
    }
    public function loader(Request $request): View
    {
        return view('plugins.loader');
    }
    public function quillEditor(Request $request): View
    {
        return view('plugins.quill-editor');
    }
    public function rating(Request $request): View
    {
        return view('plugins.rating');
    }
    public function select2(Request $request): View
    {
        return view('plugins.select2');
    }
    public function sweetAlert(Request $request): View
    {
        return view('plugins.sweet-alert');
    }
    public function uiColor(Request $request): View
    {
        return view('plugins.ui-color');
    }
    public function uppy(Request $request): View
    {
        return view('plugins.uppy');
    }
     public function treeView(Request $request): View
    {
        return view('plugins.tree-view');
    }

    /*
     * default Auth Routs
     */
    public function signin(Request $request): View
    {
        $roles = Role::where('status',1)->get();
        return view('auth.login',compact('roles'));
    }
    public function signup(Request $request): View
    {
        return view('auth.register');
    }
    public function confirmmail(Request $request): View
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request): View
    {
        return view('auth.lock-screen');
    }
    public function resetPassword(Request $request): View
    {
        return view('auth.forgot-password');
    }
    public function userPrivacySetting(Request $request): View
    {
        return view('auth.user-privacy-setting');
    }
    /*
     * animated Page Routs
     */

    public function animatedSignin(Request $request): View
    {
        return view('auth.pro.animated.signin');
    }
    public function animatedSignup(Request $request): View
    {
        return view('auth.pro.animated.signup');
    }
    public function animatedEmail(Request $request): View
    {
        return view('auth.pro.animated.email');
    }
    public function animatedLockScreen(Request $request): View
    {
        return view('auth.pro.animated.lockscreen');
    }
    public function animatedResetPassword(Request $request): View
    {
        return view('auth.pro.animated.resetpassword');
    }
    public function animatedTwoFactor(Request $request): View
    {
        return view('auth.pro.animated.twofactor');
    }
    public function animatedAccountDeactivate(Request $request): View
    {
        return view('auth.pro.animated.account-deactivate');
    }

       /*
     * Simple Page Routs
     */
    public function simpleSignin(Request $request): View
    {
        return view('auth.pro.simple.signin');
    }
    public function simpleSignup(Request $request): View
    {
        return view('auth.pro.simple.signup');
    }


    /*
     * Error Page Routs
     */

    public function error404(Request $request): View
    {
        return view('errors.error404');
    }

    public function error500(Request $request): View
    {
        return view('errors.error500');
    }
    public function maintenance(Request $request): View
    {
        return view('errors.maintenance');
    }

    /*
     * uisheet Page Routs
     */
    public function uisheet(Request $request): View
    {
        return view('uisheet');
    }

    /*
     * Form Page Routs
     */
    public function element(Request $request): View
    {
        return view('forms.element');
    }

    public function wizard(Request $request): View
    {
        return view('forms.wizard');
    }

    public function validation(Request $request): View
    {
        return view('forms.validation');
    }

     /*
     * Table Page Routs
     */
    public function bootstrapTable(Request $request): View
    {
        return view('table.bootstrap-table');
    }

    public function dataTable(Request $request): View
    {
        return view('table.data-table');
    }

    public function borderTable(Request $request): View
    {
        return view('table.border-table');
    }

    public function fancyTable(Request $request): View
    {
        return view('table.fancy-table');
    }
    public function fixedTable(Request $request): View
    {
        return view('table.fixed-table');
    }

    /*
     * Icons Page Routs
     */

    public function solid(Request $request): View
    {
        return view('icons.solid');
    }

    public function outline(Request $request): View
    {
        return view('icons.outline');
    }

    public function dualtone(Request $request): View
    {
        return view('icons.dualtone');
    }

    public function colored(Request $request): View
    {
        return view('icons.colored');
    }

    /*
     * Extra Page Routs
     */
    public function privacyPolicy(Request $request): View
    {
        return view('privacy-policy');
    }
    public function termsOfUse(Request $request): View
    {
        return view('terms-of-use');
    }
    public function blankPage(Request $request): View
    {
        return view('blankpage');
    }
}
