<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\style;

class CVController extends Controller
{
    private string $template = <<<PAGE
        <div class="Header">
        <h1 class="JLD">Junior Laravel Developer</h1>
        <h2 class="Name">Yovbak Nika</h2>
        </div>
        <div class="MainInfo">
            <div class="Summary">
                <h3>Summary</h3>
                <p>I have been studying PHP for 2 years at the university.<br>
                My teachers were Yuri Vasilyevich Andrashko and Alexander Vladimirovich Kornik.<br>
                They are great teachers.</p>
            </div>
            <div class="skills">
                <h3>Skills</h3>
                <p>HTML 5, CSS, VUE, SCSS, PHP, LARAVEL</p>
            </div>
            <div class="Experience">
                <h3>Experience</h3>
                <p>I Haven`t experience at IT Company but worked at joint student project</p>
            </div>
            <div class="Education">
                <h3>Education</h3>
                <p>Currently, I am studying at Uzhhorod National University. <br>
                In the 2nd year of bachelor's degree,at Faculty of Mathematics and Digital Technologies on specialty System Analysis.</p>
            </div>
        </div>
            <div class="contacts">
                <h3>Contacts</h3>
                <p>Phone number : +380990145966</p>
                <p>Email : yovbak.nika@student.uzhnu.edu.ua</p>
                <p>Telegram : @tiastaa</p>
            </div>
    PAGE;

    public function index(): string{
        return $this->template;
    }
}


//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;

//class CVController extends Controller
//{
//    public function cv()
//    {
//        return view('CV');
//    }
//}
