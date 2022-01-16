<?php

namespace App\Http\Controllers\BussinessCard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth,Redirect,View,File,Config,Image,Hash;
use DB;

class GalleryController extends Controller
{
    public function productPage(Request $request)
    {
        $page_title = "Product - Digicard Pro";
        
        $user_id = Auth::user()->id;
        
        $data['product_data'] = DB::table('gallery')->where('user_id', $user_id)->orderby('id', 'asc')->get();

        return view('user.user-bussiness.product.product',compact('page_title'), $data);
    }
    
    public function addProductPage(Request $request)
    {
        $page_title = "Add Product - Digicard Pro";
        
        return view('user.user-bussiness.product.add_product',compact('page_title'));
    }
    
    public function productStore(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $input = $request->all();
        unset($input['_token']);
        $input['user_id'] = $user_id;
         $this->validate($request, [
        'head_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'document' => 'mimes:pdf,doc,docx|max:2048',
    ]);

      if($request->file('document')!='')
      {
          $file             = $request->file('document');
          $filename         = $file->getClientOriginalName();
          $imgname          = date("YmdHis").$filename;
          $input['doc_url'] = $imgname;
          $destinationPath  = public_path('upload/product-doc/');
          $request->file('document')->move($destinationPath, $imgname);
          unset($input['document']);
      }

    if ($request->hasFile('head_image')) {
        if($request->file('head_image')!='')
        {
            $file=$request->file('head_image');
            $filename=$file->getClientOriginalName();
            $imgname = $filename;
            $input['head_image']= $imgname;       
            $destinationPath=public_path('upload/product/');       
            $request->file('head_image')->move($destinationPath, $imgname);
        } 
        $product_image = null;
        if($request->file('mul_image')!='')
        {
            foreach($request->file('mul_image') as $image)
            {
                $name= $image->getClientOriginalName();
                $destinationPath=public_path('upload/product/');       
                $image->move($destinationPath,$name);  
                $product_image[] = $name;
            }
            $input['mul_image'] = json_encode($product_image);
        }
        
        DB::table('gallery')->insert($input);
        $request->session()->flash('alert-success','Gallery has been sucessfully added.');
    
        return redirect('product'); 
    }
    }
    
    public function productUpdatePage(Request $request, $product_id)
    {
        $page_title = "Edit Product - Digicard Pro";
        
        $user_id = Auth::user()->id;
        
        $data['products_data'] = DB::table('gallery')->where('user_id', $user_id)->where('id', $product_id)->get();

        return view('user.user-bussiness.product.edit_product',compact('page_title'), $data);
    }
    
    public function productEditStoer(Request $request)
    {
         $product_id = $request->id;
        
        $input = $request->all();
        unset($input['_token']);        

      if($request->file('document')!='')
      {
          $file             = $request->file('document');
          $filename         = $file->getClientOriginalName();
          $imgname          = date("YmdHis").$filename;
          $input['doc_url'] = $imgname;
          $destinationPath  = public_path('upload/product-doc/');
          $request->file('document')->move($destinationPath, $imgname);
          unset($input['document']);
      }

        if($request->file('head_image')!='')
      {
          $data=DB::table('gallery')->where('product_id','=',$product_id)->value('head_image');
          $fullpath=public_path('upload/product/').$data;
          File::delete($fullpath);
          
          $file=$request->file('head_image');
          $filename=$file->getClientOriginalName();
          $imgname = uniqid().$filename;

          $input['head_image']= $imgname;       
          $destinationPath=public_path('upload/product/');       
          $request->file('head_image')->move($destinationPath, $imgname);

      } 
      
      else
	      {
	           unset($input['head_image']);
	      }
        
        
        if($request->file('mul_image')!='')
        {
          $data=DB::table('gallery')->where('id','=',$product_id)->value('mul_image');
          $backimagess=json_decode($data);
          foreach($backimagess as $proudctimage)
          {
            $fullpath=public_path('upload/product/').$proudctimage;
            File::delete($fullpath);
          }

            foreach($request->file('mul_image') as $image)
            {
                $name= $image->getClientOriginalName();
                $destinationPath=public_path('upload/product/');       
                $image->move($destinationPath,$name);  
                $product_image[] = $name;
            }
            $input['mul_image'] = json_encode($product_image);
        }
        
        DB::table('gallery')->where('id','=',$product_id)->update($input);

        $request->session()->flash('alert-success','Gallery has been sucessfully Updated.');

        return redirect('product'); 
    }
    
    public function productDeleteFormat(Request $request,$product_id)
  {
        
        $data=DB::table('gallery')->where('id','=',$product_id)->value('head_image');
          $fullpath=public_path('upload/product/').$data;
          File::delete($fullpath);
        
        
      $data=DB::table('gallery')->where('id','=',$product_id)->value('mul_image');
          $backimagess=json_decode($data);
          foreach($backimagess as $proudctimage)
          {
            $fullpath=public_path('upload/product/').$proudctimage;
            File::delete($fullpath);
          }
        
        
      $m = DB::table('gallery')->where('id','=',$product_id)->delete();
      $request->session()->flash('alert-success','Gallery has been deleted Successfully!!');
      return redirect('product'); 
  }
}
