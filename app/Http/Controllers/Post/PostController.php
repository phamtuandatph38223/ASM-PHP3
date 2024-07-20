<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAll()
    {
        $data = DB::table('posts as n')
            ->select('n.id', 'n.tieu_de', 'n.chi_tiet', 'g.ten_the_loai')
            ->join('categories as g', 'n.the_loai_id', 'g.id')
            ->inRandomOrder()
            ->get();
        // ->first();
        // dd($detail);
        // $theLoai =  $post->ten_the_loai;
        // $data = ['theLoai' => $theLoai, 'post' => $post];
        // dd($data);
        // die();
        return view('client.post', compact('data'));
    }
    public function detail($id)
    {
        $data = DB::table('posts as n')
            ->select('n.id', 'n.tieu_de', 'n.chi_tiet', 'g.ten_the_loai')
            ->join('categories as g', 'n.the_loai_id', 'g.id')
            ->where('n.id', $id)
            ->get()
            ->first();
        // dd($detail);
        // $theLoai =  $post->ten_the_loai;
        // $data = ['theLoai' => $theLoai, 'post' => $post];
        // dd($data);
        // die();
        return view('client.postdetail', compact('data'));
    }

    public function search(Request $req)
    {
        $data = Post::from('posts as n')
            ->select('n.id', 'n.tieu_de', 'n.chi_tiet', 'g.ten_the_loai')
            ->join('categories as g', 'n.the_loai_id', '=', 'g.id')
            ->where('g.ten_the_loai', 'like', '%' . $req->search . '%')
            ->get();
            // dd($data);
        return view('client.postsearch', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show1(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
