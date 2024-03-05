<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function post (Request $request){
        return back()->withInput(
            $request->only('username')
        );
    }

    public function upload(Request $request)
    {
        $path = 'images';
        $diskType = 'local';
        if (!$request->hasFile('image')) {
            return "Vui lòng chọn tệp cần upload";
        }

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = 'hothihue.' . $extension;
        $image = $file->storeAs($path, $fileName, $diskType);

        if ($image) {
            echo "Tên file: " . $fileName . "<br>";
            echo "Loại file: " . $extension . "<br>";
        } else {
            return "Upload không thành công";
        }
    }
}