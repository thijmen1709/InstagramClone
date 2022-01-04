<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpenDataController extends Controller
{

    function jsonopen() {
        $TypedDataSetJSON = storage::disk('local')->get('cbs/TypedDataSet.json');

        $TypedDataSetJSONDecode = json_decode($TypedDataSetJSON);
        echo "<br>";
        return view("periode/3/JSON-open-data", [
            'emissions' => $TypedDataSetJSONDecode]);
    }
    public function opendata()
    {
        $TypedDataSetJSON = Storage::disk('local')->get('cbs/TypedDataSet.json');

        $TypedDataSetJSONDecode = json_decode($TypedDataSetJSON);

        return view('periode/3/JSON-open-data', [
            'datas' => $TypedDataSetJSONDecode,

        ]);
    }
}
