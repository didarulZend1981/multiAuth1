<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller{
        public function index(){
            return view('admin.home');
        }

        public function charts(){
            return view('admin.charts.dashboard');
        }

        public function chartsMorris(){
            return view('admin.charts.chartsMorris');
        }

        public function chartsFlot(){
            return view('admin.charts.chartsFlot');
        }
        public function chartsJS(){
            return view('admin.charts.chartsJS');
        }

        public function chartsRickshaw(){
            return view('admin.charts.chartsRickshaw');
        }

        public function chartsSparkline(){
            return view('admin.charts.chartsSparkline');
        }

        



 // form

        public function ElementsForm(){
            return view('admin.form.elements');
        }

        public function LayoutsForm(){
            return view('admin.form.layouts');
        }

        public function ValidationForm(){
            return view('admin.form.validation');
        }
        public function WizardsForm(){
            return view('admin.form.wizards');
        }

        public function EditorForm(){
            return view('admin.form.editor');
        }

        

// UI_element

        public function AccordionUI_element(){
            return view('admin.eI_element.accordion');
        }

        public function AlertsUI_element(){
            return view('admin.eI_element.alerts');
        }


        public function ButtonsUI_element(){
            return view('admin.eI_element.buttons');
        }



        public function CardsUI_element(){
            return view('admin.eI_element.cards');
        }

        public function IconsUI_element(){
            return view('admin.eI_element.icons');
        }

        public function ModalUI_element(){
            return view('admin.eI_element.modal');
        }


        public function NavigationUI_element(){
            return view('admin.eI_element.navigation');
        }

        public function PaginationUI_element(){
            return view('admin.eI_element.pagination');
        }


        public function TooltipPopoverUI_element(){
            return view('admin.eI_element.tooltipPopover');
        }

        public function ProgressUI_element(){
            return view('admin.eI_element.progress');
        }

        public function SpinnersUI_element(){
            return view('admin.eI_element.spinners');
        }

        public function TypographyUI_element(){
            return view('admin.eI_element.typography');
        }





         // table

        public function basicTable(){
            return view('admin.table.basic');
        }

        public function dataTable(){
            return view('admin.table.data');
        }


         // map

        public function googleMap(){
            return view('admin.map.google');
        }

        public function vectorMap(){
            return view('admin.map.vector');

        }


        // page

        public function blankPage(){
            return view('admin.page.blank');
        }

        public function signinPage(){
            return view('admin.page.signin');

        }

        public function signupPage(){
            return view('admin.page.signup');
        }

        public function notPage(){
            return view('admin.page.404');

        }


        





    }
