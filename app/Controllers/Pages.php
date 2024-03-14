<?php

namespace App\Controllers;

use App\Models\Infografi;
use App\Models\InfografiCategory;
use CodeIgniter\API\ResponseTrait;
use Config\Services;
use Kint\Zval\Value;
use App\Models\VisitorModel;


class Pages extends BaseController
{
    // public function index()
    // {
    //     $judul['title'] = "home";
    //     $judul['activeMenu'] = "home";

    //     $data = [
    //         'title' => 'Home | Satu Data Kab. Semarang'
    //     ];

    //     $client = Services::curlrequest();
    //     $url = "https://data.semarangkab.go.id/ckan/dataset/878247e5-4977-4be2-83f2-4d4a220b4d27/resource/796d39af-650c-478d-a5d8-e6694bd9e8e6/download/nama-nama-desa.json";
    //     $response = $client->request('GET', $url);

    //     if ($response->getStatusCode() == 200) {
    //         $data['desa'] = json_decode($response->getBody(), true);
    //     }

    //     // $client = Services::curlrequest();
    //     // $url = "https://data.semarangkab.go.id/ckan/dataset/f7ace25e-5dce-44c7-98d0-e63c7e53a719/resource/8546d0cb-a226-4942-9caf-740c428a57e5/download/kejadian-kebakaran.json";
    //     // $response = $client->request('GET', $url);

    //     // if ($response->getStatusCode() == 200) {
    //     //     $data['kebakaran'] = json_decode($response->getBody(), true);
    //     // }

    //     // $url = "https://data.semarangkab.go.id/ckan/dataset/003047e6-6ece-4fb1-b3e6-80c1d1854e6f/resource/6d6354e8-6a9f-4874-83b6-3aa4a5235067/download/fasilitas-kesehatan-di-kabupaten-semarang.json";
    //     // // $data['title'] = "Home";
    //     // $dataJson = file_get_contents($url);
    //     // $dataArray = json_decode($dataJson, true); //object =>, true array

    //     // foreach ($dataArray as $values) {
    //     //     $labels[] = $values['Kecamatan'] . $values['Kategori']; //Sebagai tahun
    //     //     $tahun2022[] = $values['2022'];
    //     // }

    //     // $data['labels'] = "'" . implode("','", $labels) . "'";
    //     // $data['tahun2022'] = implode(",", $tahun2022);

    //     $judul['title'] = "ringkasan-data";
    //     $judul['activeMenu'] = "ringkasan-data";


    //     $client = Services::curlrequest();
    //     $url = "https://data.semarangkab.go.id/ckan/dataset/3bac0564-b9b1-4aaf-bd11-9e358620c0ce/resource/777bca32-ab4f-4eab-bfb7-5c710438996e/download/kab-semarangdalam-angka.json";
    //     $response = $client->request('GET', $url);

    //     if ($response->getStatusCode() == 200) {
    //         $data['ringkasan'] = json_decode($response->getBody(), true);

    //         return view('home/index_home', ['data' => $data, 'judul' => $judul]);
    //     } else {
    //         return 'Failed to fetch data';
    //     }


    //     return view('home/index_home', ['data' => $data, 'judul' => $judul]);
    // }

    public function index()
    {
        $judul['title'] = "home";
        $judul['activeMenu'] = "home";
        $visitorModel = new VisitorModel();
        $model = new Infografi();
        $infografis = $model->findAll();
        $model2 = new InfografiCategory();
        $infografi_categories = $model2->findAll();

        $data = [
            'title' => 'Home | Satu Data Kab. Semarang',
            'visitor' => $visitorModel->CountVisitor(),
        ];
        return view('home/portal', ['data' => $data, 'judul' => $judul, 'infografis' => $infografis, 'infografi_categories' => $infografi_categories]);
    }

    public function dashboard()
    {
        $judul['title'] = "dashboard";
        $judul['activeMenu'] = "dashboard";

        $data = [
            'title' => 'Dashboard | Satu Data Kab. Semarang'
        ];

        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/878247e5-4977-4be2-83f2-4d4a220b4d27/resource/796d39af-650c-478d-a5d8-e6694bd9e8e6/download/nama-nama-desa.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['desa'] = json_decode($response->getBody(), true);
        }

        // $client = Services::curlrequest();
        // $url = "https://data.semarangkab.go.id/ckan/dataset/f7ace25e-5dce-44c7-98d0-e63c7e53a719/resource/8546d0cb-a226-4942-9caf-740c428a57e5/download/kejadian-kebakaran.json";
        // $response = $client->request('GET', $url);

        // if ($response->getStatusCode() == 200) {
        //     $data['kebakaran'] = json_decode($response->getBody(), true);
        // }

        // $url = "https://data.semarangkab.go.id/ckan/dataset/003047e6-6ece-4fb1-b3e6-80c1d1854e6f/resource/6d6354e8-6a9f-4874-83b6-3aa4a5235067/download/fasilitas-kesehatan-di-kabupaten-semarang.json";
        // // $data['title'] = "Home";
        // $dataJson = file_get_contents($url);
        // $dataArray = json_decode($dataJson, true); //object =>, true array

        // foreach ($dataArray as $values) {
        //     $labels[] = $values['Kecamatan'] . $values['Kategori']; //Sebagai tahun
        //     $tahun2022[] = $values['2022'];
        // }

        // $data['labels'] = "'" . implode("','", $labels) . "'";
        // $data['tahun2022'] = implode(",", $tahun2022);


        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/3bac0564-b9b1-4aaf-bd11-9e358620c0ce/resource/777bca32-ab4f-4eab-bfb7-5c710438996e/download/kab-semarangdalam-angka.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['ringkasan'] = json_decode($response->getBody(), true);
        } else {
            return 'Failed to fetch data';
        }

        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/f5eb48be-75a3-4d83-ab9d-de86a32a4835/resource/0fd0e770-feb2-4dca-b0b7-733288dfab19/download/kelompok-tani.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['kelompokTani'] = json_decode($response->getBody(), true);
        } else {
            return 'Failed to fetch data';
        }

        return view('home/index_home', ['data' => $data, 'judul' => $judul]);
    }

    public function lakip()
    {
        $data = [
            'title' => 'Lakip | Satu Data Kab. Semarang'
        ];

        return view('pages/lakip', $data);
    }


    public function sdg()
    {
        $judul['title'] = "sdg";
        $judul['activeMenu'] = "sdg";


        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/cea49f67-b8cd-48d0-8479-41510884a771/resource/61394c7e-d902-498d-9fa0-ea5ad0ac0ad4/download/ringkasan-sgds-tahun-2021.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['sdg']  = json_decode($response->getBody(), true);

            return view('home/sdg', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }
    public function tabel()
    {
        // $judul['title'] = "tabel";
        // $judul['activeMenu'] = "tabel";
        // $test = 'bawang';


        // $client = Services::curlrequest();
        // $url = "https://statistikkominfo.semarangkab.go.id/api/$test/0/luas-panen.json";
        // $response = $client->request('GET', $url);

        // if ($response->getStatusCode() == 200) {
        //     $data['tabel']  = json_decode($response->getBody(), true);

        //     return view('home/tabel', ['data' => $data, 'judul' => $judul]);
        // } else {
        //     return 'Failed to fetch data';
        // }
        return view('home/tabel');
    }



    public function rpjmd()
    {
        $judul['title'] = "rpjmd";
        $judul['activeMenu'] = "rpjmd";

        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/a0334806-bc1f-4cb2-b6c5-9156c3d08c57/resource/609af295-558d-4212-89f8-a380e2b21735/download/capaian_rpjmd2022.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['rpjmd'] = json_decode($response->getBody(), true);

            return view('home/rpjmd', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function lppd()
    {
        $judul['title'] = "lppd";
        $judul['activeMenu'] = "lppd";

        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/892a16b0-9fb9-495d-b2a5-f20e95316469/resource/e90fd05d-11b3-46bf-9bac-928302bd7ec7/download/lppd_2022.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['lppd'] = json_decode($response->getBody(), true);

            return view('home/lppd', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function spm()
    {
        // $data = [
        //     'title' => 'SPM | Satu Data Kab. Semarang'
        // ];
        // return view('pages/spm', $data);

        $judul['title'] = "spm";
        $judul['activeMenu'] = "spm";

        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/90be6648-0a76-4eaa-82da-a4e6ff311ccb/resource/18ab432d-3be6-4cd3-8929-f29249aa38a2/download/spm_2022.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['spm']  = json_decode($response->getBody(), true);

            return view('home/spm', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function ringkasanData()
    {
        $judul['title'] = "ringkasan-data";
        $judul['activeMenu'] = "ringkasan-data";

        $data = [
            'title' => 'Data Summary | Satu Data Kab. Semarang'
        ];
        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/3bac0564-b9b1-4aaf-bd11-9e358620c0ce/resource/777bca32-ab4f-4eab-bfb7-5c710438996e/download/kab-semarangdalam-angka.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data1 = json_decode($response->getBody(), true);

            return view('home/index_home', ['data' => $data1, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function kelompoktani()
    {
        $judul['title'] = "kelompok-tani";
        $judul['activeMenu'] = "kelompok-tani";

        $data = [
            'title' => 'Kelompok Tani | Satu Data Kab. Semarang'
        ];
        $client = Services::curlrequest();
        $url = "https://data.semarangkab.go.id/ckan/dataset/f5eb48be-75a3-4d83-ab9d-de86a32a4835/resource/0fd0e770-feb2-4dca-b0b7-733288dfab19/download/kelompok-tani.json";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $kelompok_tani = json_decode($response->getBody(), true);

            return view('home/index_home', ['data' => $kelompok_tani, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    
    public function pencarian()
    {
        $judul['title'] = "pencarian";
        $judul['activeMenu'] = "pencarian";


        $client = Services::curlrequest();
        $url = "https://webapi.bps.go.id/v1/api/interoperabilitas/datasource/sensus/id/41/kegiatan/st2023/wilayah_sensus/3322/dataset/208/key/2f456222b4c631bcc834296e2aad3fa3/";
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $data['pencarian']  = json_decode($response->getBody(), true);

            return view('home/pencarian', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }
    public function bps()
    {
        return view('home/bps');
    }

    public function staticTable()
    {
        return view('home/staticTable');
    }


    public function getBps()
    {
       if (!isset($_GET['action'])) {
        echo json_encode(['error' => 'Action not set']);
        exit;
    }
    if ($_GET['action'] == 'bps') {
        $url = 'https://webapi.bps.go.id/v1/api/list/model/pressrelease/lang/ind/domain/3322/year/2022/key/2f456222b4c631bcc834296e2aad3fa3/page/'.$_GET['page'];
    } elseif ($_GET['action'] == 'detail_bps') {
        $url = 'https://webapi.bps.go.id/v1/api/view/domain/3322/model/pressrelease/lang/ind/key/2f456222b4c631bcc834296e2aad3fa3/id/'.$_GET['id'];
    } elseif ($_GET['action'] == 'static') {
        $url = 'https://webapi.bps.go.id/v1/api/list/model/statictable/lang/ind/domain/3322/key/2f456222b4c631bcc834296e2aad3fa3/page/'.$_GET['page'];
    } elseif ($_GET['action'] == 'detail_static') {
        $url = 'https://webapi.bps.go.id/v1/api/view/domain/3322/model/statictable/lang/ind/key/2f456222b4c631bcc834296e2aad3fa3/id/'.$_GET['id'];
    } else {
        echo json_encode(['error' => 'Invalid action']);
        exit;
    }
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;


    // $data = getData($url);
    // echo $data;
    }
    

}
