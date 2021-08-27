<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Models\Body;

class mybodyController extends Controller
{
  public function add(Request $res){
    $validated = $res->validate([
        'w' => 'required',
        'f' => 'required',
    ]);
    $body = new Body;

  $weight2 = $res->w;

  $bmi =$res->b;
  $muscle = $res->m;
  $fat =$res->f;
  $agecell = $res->a;
  $viscle =$res->v;

  $fileName = time().'_'.$res->im->getClientOriginalName();
  $filePath = $res->file('im')->storeAs('uploadimage_body', $fileName, 'public');

$body->weight=$weight2;

$body->bmi=$bmi;
$body->muscle=$muscle;
$body->fat=$fat;
$body->age_cell=$agecell;
$body->viscleralfat=$viscle;
$body->img_bmi=$fileName;
$body->save();
    return view('recordBody.recorded_body')->with('success','บันทึกข้อมูลเรียบร้อยแล้วค่ะ');
}
public function show(){
  $body = Body::all();
  dd($body);
  return view('bodytable')->with('body',$body);
}
}
