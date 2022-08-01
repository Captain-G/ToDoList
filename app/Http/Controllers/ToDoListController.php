<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        $listItem->save();
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function status($id){
        $listItem = ListItem::find($id);
        $listItem->status = 1;
        $listItem->save();
        return view('welcome', ['listItems' => ListItem::all()]);
    }
//    deleting records
    public function delete($id){
        $listItem = ListItem::find($id);
        $listItem->delete();
        return view('welcome', ['listItems' => ListItem::all()]);
    }

//    edit records
    public function edit(Request $request, $id){
        $newListItem = ListItem::find($id);
//        $newListItem->update(['name' => $request->updatedName, 'description' => $request->updatedDesc]);
        $newListItem->name = $request->input('name');
        $newListItem->description = $request->input('description');
        $newListItem->update();
        return view('welcome', ['listItems' => ListItem::all()]);
    }
//    public function search(){
//        $q = (ListItem::get('q'));
//        if($q != ''){
//            $data =ListItem::where('name','like','%'.$q.'%')->orWhere('email','like','%'.$q.'%')->paginate(5)->setpath('');
//            $data->appends(array(
//                'q' => Input::get('q'),
//            ));
//            if(count($data)>0){
//                return view('welcome')->withData($data);
//            }
//            return view('welcome')->withMessage("No Results Found!");
//        }
//    }

}

