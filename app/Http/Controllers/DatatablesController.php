<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;
use App\Http\Requests;

class DatatablesController extends Controller
{

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */

    public function getIndex()
    {
        return view('index');
    }

    /*  BASIC  */
    /*
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */

//    public function anyData() {
//        return Datatables::of(User::query())->make(true);
//    }

    public function anyData()
    {
//        die("AAYA");
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at'])->get();
        return Datatables::of($users)->make(true);
    }
    /* END OF BASIC */



    /*  COLLECTION OF ARRAY  */
    public function getDataArray()
    {
        $users = new Collection;
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $users->push([
                'id'         => $i + 1,
                'name'       => $faker->name,
                'email'      => $faker->email,
                'created_at' => Carbon::now()->format('m-d-Y'),
                'updated_at' => Carbon::now()->format('m-d-Y'),
            ]);
        }
        return Datatables::of($users)->make(true);
    }
    /*  END OF COLLECTION OF ARRAY  */


    /*  ADD and EDIT A COLUMN  */
    public function getAddEdit()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at'])->get();
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
    /*  END OF ADD and EDIT A COLUMN  */


    /*  ADD SEARCH TO EACH COLUMN  */
    public function getSearch()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at'])->get();
        return Datatables::of($users)->make(true);
    }
    /*  END OF ADD SEARCH TO EACH COLUMN  */

    /*  SET COLOR FOR EACH ROW  */
    public function getDtRowData()
    {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at'])->get();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="/edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->setRowId('id')
            ->setRowClass(function ($user) {
                return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })
            ->setRowData([
                'id' => 'test',
            ])
            ->setRowAttr([
                'color' => 'blue',
            ])
            ->make(true);
    }
    /*  END OF SET COLOR FOR EACH ROW  */

public function editProfile($id) {
    echo ('ta da- daaaaaaaaaaaaaaa...'.$id);
//    return view('dindex');
    die;
}


}
