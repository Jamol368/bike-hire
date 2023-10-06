<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCreditCardRequest;
use App\Http\Requests\UpdateUserCreditCardRequest;
use App\Models\UserCreditCard;

class UserCreditCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCreditCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCreditCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCreditCard  $userCreditCard
     * @return \Illuminate\Http\Response
     */
    public function show(UserCreditCard $userCreditCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCreditCard  $userCreditCard
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCreditCard $userCreditCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCreditCardRequest  $request
     * @param  \App\Models\UserCreditCard  $userCreditCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCreditCardRequest $request, UserCreditCard $userCreditCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCreditCard  $userCreditCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCreditCard $userCreditCard)
    {
        //
    }
}
