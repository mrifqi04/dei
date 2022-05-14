<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bean;
use App\Models\Manfaat;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function sejarah()
    {
        $sejarah = Sejarah::find(1);

        return view('admin.sejarah.index', compact('sejarah'));
    }

    public function UpdateSejarah()
    {
        $sejarah = Sejarah::find(1);

        return view('admin.sejarah.edit', compact('sejarah'));        
    }

    public function StoreSejarah(Request $request)
    {
        $sejarah = Sejarah::find(1);

        $content = htmlspecialchars($request->content);        

        $sejarah->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $request->session()->flash('msg','Sejarah has been updated');
        // Redirecting back to service lists
        return redirect('/admin/sejarah');       
    }

    public function jenis()
    {
        $jenis = Bean::all();

        return view('admin.jenis.index', compact('jenis'));
    }

    public function CreateJenis(Request $request)
    {        
        $jenis = Bean::create([
            'nama_bean' => $request->nama_bean,
            'content_beans' => $request->content_beans,
        ]);  
        
        $image = $request->file('gambar_bean');
        $name = $jenis->id . '_' . $image->getClientOriginalName();       
        
        $jenis->update(['gambar_bean' => $name]);
        $image->move('images/', $name); 

        $request->session()->flash('msg','Jenis has been created');
        // Redirecting back to service lists
        return redirect('/admin/jenis');       
    }

    public function UpdateJenis($id)
    {        
        $bean = Bean::find($id);

        return view('admin.jenis.edit', compact('bean'));        
    }

    public function StoreJenis($id, Request $request)
    {        
        $jenis = Bean::find($id);             

        $jenis->update([
            'nama_bean' => $request->nama_bean,
            'content_beans' => $request->content_beans,
        ]);

        $request->session()->flash('msg','Jenis has been updated');
        // Redirecting back to service lists
        return redirect('/admin/jenis');       
    }

    public function DeleteJenis($id)
    {
        // Delete the product
        Bean::destroy($id);

        // Store a message
        session()->flash('msg','Bean has been deleted');

        // Redirect back
        return redirect('admin/jenis');
    }

    public function manfaat()
    {
        $manfaat = Manfaat::all();

        return view('admin.manfaat.index', compact('manfaat'));
    }

    public function CreateManfaat(Request $request)
    {                
        $jenis = Manfaat::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);          

        $request->session()->flash('msg','Manfaat has been created');
        // Redirecting back to service lists
        return redirect('/admin/manfaat');       
    }

    public function UpdateManfaat($id)
    {        
        $manfaat = Manfaat::find($id);

        return view('admin.manfaat.edit', compact('manfaat'));        
    }

    public function StoreManfaat($id, Request $request)
    {        
        $manfaat = Manfaat::find($id);             

        $manfaat->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $request->session()->flash('msg','Manfaat has been updated');
        // Redirecting back to service lists
        return redirect('/admin/manfaat');       
    }

    public function DeleteManfaat($id)
    {
        // Delete the product
        Manfaat::destroy($id);

        // Store a message
        session()->flash('msg','Manfaat has been deleted');

        // Redirect back
        return redirect('admin/manfaat');
    }
}
