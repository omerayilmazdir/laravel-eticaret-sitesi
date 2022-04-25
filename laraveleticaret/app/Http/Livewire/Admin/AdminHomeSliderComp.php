<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComp extends Component
{

    public function deleteSlide($slide_id){
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message','Slider başarıyla silindi!');
    }


    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-comp',['sliders'=>$sliders])->layout('layouts.master');
    }
}
