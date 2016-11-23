<?php

namespace Motor\Backend\Http\Controllers\Api;

use Motor\Backend\Http\Requests\Backend\ProfileEditRequest;
use Motor\Backend\Http\Controllers\Controller;
use Auth;
use Motor\Backend\Services\ProfileEditService;
use Motor\Backend\Transformers\UserTransformer;

class ProfileEditController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileEditRequest $request)
    {
        $result   = ProfileEditService::update(Auth::user(), $request)->getResult();
        $resource = $this->transformItem($result, UserTransformer::class, 'client,permissions,roles,files');

        return $this->respondWithJson('Profile updated', $resource);
    }


    public function me()
    {
        $result   = ProfileEditService::show(Auth::user())->getResult();
        $resource = $this->transformItem($result, UserTransformer::class, 'client,permissions,roles,files');

        return $this->respondWithJson('Profile read', $resource);

    }
}