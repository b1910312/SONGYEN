<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;
use App\Models\ThumbnailModel;

class EventController extends Controller
{
    public function index()
    {
        $EventModel = new EventModel();
        $Events = $EventModel->AllEvents();
        $ThumbnailModel = new ThumbnailModel();
        $Thumbnails = $ThumbnailModel->AllThumbnail();
        $data['ThumbNails'] = $Thumbnails;
        $data['events'] = $Events;
        return view('admin.event.list',$data);
    }
    public function new()
    {
        return view('admin.event.new');
    }
    public function edit(Request $request)
    {
        $EventId = $request->id;
        $EventModel = new EventModel();
        $Event = $EventModel->OneEvent($EventId);
        $data['event'] = $Event;
        return view('admin.event.update',$data);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $start = $request->timestart;
        $end = $request->timeend;
        $place = $request->place;
        $content = $request->content;   
        $contentdetails  = $request->contentdetails;
        $img =  $_FILES['thumbnail']['name'];
        $tagert_img =   'uploads/thumbnail/'  . basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $tagert_img);
        $EventModel = new EventModel();
        $id = $EventModel->InsertGetId($name,$start,$end,$place,$content,$contentdetails);
        return redirect()->route('admin.addthumbnail',['post'=>$id,'type'=>2,'image'=>$img]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $start = $request->timestart;
        $end = $request->timeend;
        $place = $request->place;
        $content = $request->content;   
        $contentdetails  = $request->contentdetails;
        $EventModel = new EventModel();
        $EventModel->updateone($id,$name, $start, $end, $place, $content, $contentdetails);
        return redirect()->route('admin.event.home');
    }
    public function delete( Request $request)
    {
        $id = $request->id;
        $EventModel = new EventModel();
        $EventModel->deleteone($id);
        return redirect()->back();
    }
}
