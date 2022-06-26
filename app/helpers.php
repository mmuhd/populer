<?php

function currentUser(){
    if(Auth::check()){
        return auth()->user();
    }
	return null;
}

function currentUserId(){
    if(Auth::check()){
        return auth()->user()->id;
    }
    return null;
}


//Image resize with proper aspect ratio.
function imageresize($width, $image, $subfolder='')
{
    // $filename = date('dmy-hm-') . $width. '-' . $image->getClientOriginalName();

    // if($subfolder != ''){
    // 	$subfolder = $subfolder . '/';
    // }

    // // $subfolder = $subfolder : $subfolder . '/' : '';
    // $store_path = 'app/public/' . $subfolder.$filename;
    // $return_path = $subfolder.$filename;

    // Image::make($image)
    // ->resize($width, null, function ($constraint){ 
    //     $constraint->aspectRatio(); 
    //     $constraint->upsize();
    //     })
    //     ->save(storage_path($store_path));

    $filenameWithExt = $image->getClientOriginalName();
                $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension       = $image->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $dir             = storage_path('/public');

                if(!file_exists($dir))
                {
                    mkdir($dir, 0777, true);
                }
                $path = $image->storeAs('/public', $fileNameToStore);    

    return $fileNameToStore;
}