<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index(){
        return view('welcome', ['listItems' => ListItem::all()]);
    }



    public function saveItem(Request $request){
        $request->validate([
            'name' => 'max:20|required',
            'description' => 'max:255',
        ]);

        $newListItem = new ListItem();
        $newListItem->name = $request->name;
        $newListItem->description = $request->description;
        $newListItem->save();
        return view('welcome', ['listItems' => ListItem::all()]);
//        redirect('/');
    }

    public function isComplete($id){
        $listItem = ListItem::find($id);
        $listItem->isComplete = true;
        $listItem->isComplete = 'Complete';
        $listItem->save();
        return view('welcome', ['listItems' => ListItem::all()]);
    }
}
