<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Item;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Footer;
use stdClass;

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
        $section2 = $this->getSectionData(2);
        $section3 = $this->getSectionData(3);
        $section4 = $this->getSectionData(4);
        $section5 = $this->getSectionData(5);
        $section6 = $this->getSectionData(6);
        $section7 = $this->getSectionData(7);
        $footer = $this->getFooter();

        return view('home', [
            'navbar' => $navbar,
            'section2' => $section2,
            'section3' => $section3,
            'section4' => $section4,
            'section5' => $section5,
            'section6' => $section6,
            'section7' => $section7,
            'footer' => $footer
        ]);
    }

    private function getNavbar()
    {
        $images = Item::where('section_id', 1)->with('images')->first()->images;
        $navbar = Navbar::first();
        foreach ($images as $key => $value) {
            $image_path = str_replace(' ', '%20', $value->path);
            $navbar->setAttribute('logo' . ($key + 1) . 'x', $image_path);
        }

        return $navbar;
    }

    private function getSectionData($section_id)
    {
        $section = Section::where('id', $section_id)->select('title', 'description', 'button')->first();
        $items = Item::where('section_id', $section_id)->select('id', 'title', 'description', 'additional_info')->get();
        $items_arr = array();
        foreach ($items as $key => $item) {
            $images = Image::where('item_id', $item->id)->select('path', 'screen_size')->get();
            //$images_obj = (object) array();
            $img_objects = new stdClass();
            foreach ($images as $key => $image) {
                // $temp_image = array('path' . ($key+1) => $item->title, 'screen_size' . ($key+1) => $item->description);
                // $object_image = (object) $temp_arr;

                // $images_obj->append($object_image);
                $temp = 'path' . ($key + 1);
                $img_objects->$temp = str_replace(' ', '%20', $image->path);;
            }

            $temp_arr = array(
                'item_title' => $item->title, 'item_description' => $item->description,
                'item_additional_info' => $item->additional_info, 'images' => $img_objects
            );
            $object = (object) $temp_arr;

            array_push($items_arr, $object);
            unset($images);
        }
        $section->setAttribute('items', $items_arr);
        return $section;
    }

    private function getFooter()
    {
        // get footer items
        $footer_items = Item::where('section_id', 8)->select('id','description')->get();
        $footer = Footer::all()->first();
        foreach ($footer_items as $key => $item) {
            $temp = 'link3_text' . ($key + 1);
            $footer->setAttribute($temp, $item->description);
            $images = Image::where('item_id', $item->id)->get();
            $item_key = $key;
            foreach ($images as $key => $image) {
                $temp = 'link3_image' . ($item_key + 1) . '_' . ($key + 1) . 'x';
                $image_path = str_replace(' ', '%20', $image->path);
                $footer->setAttribute($temp, $image_path);
            }
        }


        // $footer_items_id = Section::where('id', 1)->with('items')->first()->items[0]->id;
        // $images = Item::where('id', $footer_items_id)->with('images')->first()->images;
        // $footer = Footer::first();
        // foreach ($images as $key=>$value) {
        //     $image_path = str_replace(' ', '%20', $value->path);
        //     $footer->setAttribute('logo' . ($key+1) . 'x', $image_path);
        // }

        return $footer;
    }
}
