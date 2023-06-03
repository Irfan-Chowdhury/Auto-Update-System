<?php

namespace App\Http\Controllers;

use App\Traits\ENVFilePutContent;
use App\Traits\JSONFileTrait;
use Illuminate\Http\Request;


class DeveloperSectionController extends Controller
{
    use ENVFilePutContent, JSONFileTrait;

    public function index()
    {
        if(config('auto_update.product_mode')!=='DEVELOPER'){
            abort(404);
        }
        $general = $this->readJSONData('track/general.json');
        $control = $this->readJSONData('track/control.json');
        $bugSettings = $this->readJSONData('track/fetch-data-bug.json');
        $versionUpgradeSettings = $this->readJSONData('track/fetch-data-upgrade.json');

        return view('developer_section.index',compact('general','control','bugSettings','versionUpgradeSettings'));
    }


    public function submit(Request $request)
    {
        $general =[
            "product_mode"=> env('PRODUCT_MODE'),
            "version"     => $request->version,
            "bug_no"      => $request->bug_no,
            "minimum_required_version" => $request->minimum_required_version,
        ];

        $this->dataWriteInENVFile('VERSION',$request->version);
        $this->dataWriteInENVFile('BUG_NO',$request->bug_no);

        $control =[
            'version_upgrade'=>[
                'latest_version_upgrade_enable'    => $request->latest_version_upgrade_enable ? true : false,
                'latest_version_db_migrate_enable' => $request->latest_version_db_migrate_enable ? true : false,
                'version_upgrade_base_url'         => $request->version_upgrade_base_url,
            ],
            'bug_update'=>[
                'bug_update_enable'     => $request->bug_update_enable ? true : false,
                'bug_db_migrate_enable' => $request->bug_db_migrate_enable ? true : false,
                'bug_update_base_url'   => $request->bug_update_base_url,
            ]
        ];

        // Write Array in JSON File
        $this->wrtieDataInJSON($general, 'track/general.json');
        $this->wrtieDataInJSON($control ,'track/control.json');


        $this->setSuccessMessage(__('Data Submited Successfully'));
        return redirect()->back();
    }

    public function bugUpdateSetting(Request $request)
    {
        $data = $this->filesAndLogManage($request);

        // Write Array in JSON File
        $this->wrtieDataInJSON($data, 'track/fetch-data-bug.json');
        $this->setSuccessMessage(__('Data Submited Successfully'));
        return redirect()->back();
    }

    public function versionUpgradeSetting(Request $request)
    {
        $data = $this->filesAndLogManage($request);

        // Write Array in JSON File
        $this->wrtieDataInJSON($data, 'track/fetch-data-upgrade.json');
        $this->setSuccessMessage(__('Data Submited Successfully'));
        return redirect()->back();
    }


    private function filesAndLogManage($request)
    {
        $data = [];
        if ($request->file_name) {
            foreach($request->file_name as $item) {
                $data['files'][]= [
                    'file_name' => $item
                ];
            }
        }

        if ($request->text) {
            foreach($request->text as $item) {
                $data['logs'][]= [
                    'text' => $item
                ];
            }
        }

        if ($request->short_note) {
            $data['short_note'] = $request->short_note;
        }

        return $data;
    }

}
