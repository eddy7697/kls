<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomField;

class CustomFieldController extends Controller
{
    public function addCustomField(Request $request)
    {
        return CustomField::create($request->all());
    }

    public function getCustomFieldByType(Request $request, $type)
    {
        return CustomField::where('type', $type)
                            ->where(function ($q) use ($request)
                            {
                                if ($request->keyword !== null) {
                                    $q->orWhere('locale', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('content', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField1', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField2', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField3', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField4', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField5', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField6', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField7', 'like', '%'.$request->keyword.'%');
                                    $q->orWhere('customField8', 'like', '%'.$request->keyword.'%');
                                }
                            })
                            ->orderBy('sortIndex', 'asc')
                            ->paginate(12);
    }

    public function getCustomFieldById($id)
    {
        return CustomField::where('id', $id)->first();
    }

    public function updateCustomField(Request $request, $id)
    {
        $update = CustomField::where('id', $id)
                          ->update($request->all());

        $record = CustomField::where('type', $request->type)->orderBy('sortIndex', 'asc')->get();

        // return $record;
        foreach ($record as $key => $value) {
            CustomField::where('id', $value->id)->update([
                'sortIndex' => ($key + 1) * 10
            ]);
        }

        return CustomField::where('type', $request->type)->orderBy('sortIndex', 'asc')->get();
    }

    public function deleteCustomField($id)
    {
        return CustomField::where('id', $id)->delete();
    }

    public function addPostTag(Request $request)
    {
        return CustomField::create($request->all());
    }

    public function getPostTag()
    {
        return CustomField::where('type', 'post_tag')->get();
    }
}
