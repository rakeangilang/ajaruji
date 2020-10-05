<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Item;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Footer;

class ShowHome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //
        $navbar = $this->getNavbar();
        $section2 = $this->getSection2();
        $test = $this->getImages(3);
        return view('home', [
            'navbar' => $navbar,
            'section2' => $section2,
            'test' => $test
        ]);
    }

    private function getNavbar() 
    {
        // get nav image by chaining section->items->images
        $nav_item_id = Section::where('id', 1)->with('items')->first()->items[0]->id;
        $images = Item::where('id', $nav_item_id)->with('images')->first()->images;
        $navbar = Navbar::first();
        foreach ($images as $key=>$value) {
            $image_path = str_replace(' ', '%20', $value->path);
            $navbar->setAttribute('logo' . ($key+1) . 'x', $image_path);
        }

        return $navbar;
    }

    private function getSection2()
    {
        $item_id = Section::where('id', 2)->with('items')->first()->items[0]->id;
        $images = Item::where('id', $item_id)->with('images')->first()->images;
        $section2 = Section::where('id', 2)->first();
        foreach ($images as $key=>$value) {
            $image_path = str_replace(' ', '%20', $value->path);
            $section2->setAttribute('logo' . ($key+1) . 'x', $image_path);
        }

        return $section2;
    }

    private function getImages($section_id) 
    {
        $section = Section::where('id', $section_id)->select('title', 'description', 'button')->first();
        $items = Item::where('section_id', $section_id)->select('id', 'title', 'description', 'additional_info')->get();
        $items_arr = array();
        foreach ($items as $key => $value) {
            $temp_arr = array('item_title' . ($key+1) => $value->title, 'item_description' . ($key+1) => $value->description, 'item_additional_info' . ($key+1) => $value->additional_info);
            $object = (object) $temp_arr;
            
            $images = Image::where('item_id', $value->id)->select('path', 'screen_size')->get();
            $images_arr = array();
            foreach ($images as $key => $value) {
                $temp_images = array('path' . ($key+1) => $value->title, 'screen_size' . ($key+1) => $value->description, 'item_additional_info' . ($key+1) => $value->additional_info);
                $object = (object) $temp_arr;
            }

            array_push($items_arr, $object);
            unset($images);
        }
        $section->setAttribute('items', $items_arr);
        return $section;
    }
}
