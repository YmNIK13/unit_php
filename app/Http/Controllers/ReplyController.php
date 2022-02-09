<?php

namespace App\Http\Controllers;

use App\Models\User\Reply;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply): Response
    {
        //
    }
}
