<?php

namespace App\Http\Controllers;

use App\Http\Services\Config\ConfigService;
use App\Http\Services\Sliders\SliderService;
use App\Models\Config;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainControllers extends Controller
{
    protected $slider;


    public function __construct(SliderService $slider)
    {
        $this->slider = $slider;


    }

    public function index()
    {
        return view('main', [
            'title' => 'Khoa Kỹ thuật Công nghệ',
            'sliders' => $this->slider->show(),
        ]);
    }

    public function show()
    {
        return Slider::where('active',1)->orderByDesc('sort_by')->get();
    }


}
