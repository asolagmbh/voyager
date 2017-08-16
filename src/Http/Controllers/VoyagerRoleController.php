<?php

namespace Asolagmbh\Voyager\Http\Controllers;

use Illuminate\Http\Request;
use Asolagmbh\Voyager\Facades\Voyager;

class VoyagerRoleController extends VoyagerBreadController
{
    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        Voyager::canOrFail('edit_roles');

        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        //Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
            $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

            $data->permissions()->sync($request->input('permissions', []));

            return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message'    => __('voyager.generic.successfully_updated')." {$dataType->display_name_singular}",
                'alert-type' => 'success',
                ]);
        }
    }

    // POST BRE(A)D
    public function store(Request $request)
    {
        Voyager::canOrFail('add_roles');

        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        //Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $data = new $dataType->model_name();
            $this->insertUpdateData($request, $slug, $dataType->addRows, $data);

            $data->permissions()->sync($request->input('permissions', []));

            return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message'    => __('voyager.generic.successfully_added_new')." {$dataType->display_name_singular}",
                'alert-type' => 'success',
                ]);
        }
    }
}
