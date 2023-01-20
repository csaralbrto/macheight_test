<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{


    /**
     * Find the file test_macheight.txt to perform the operation.
     *
     */
    public function getFile() {

        $contents = File::get(public_path('test_macheight.txt'));
        $sum_number = explode("\n", $contents);
        $list_number = $sum_number[0];
        $list_number = explode(",", $list_number);
        $sum_target = $sum_number[1];

        $this->findPairs($list_number,$sum_target);
    }

    /**
     * Finds and returns the pairs numbers in an array.
     *
     * @param  array $array_numbers
     * @param  array $sum
     * @return array $pairs_numbers
     */
    public function findPairs($array_numbers, $sum) {

        $pairs_numbers = collect();
        $table_hash = collect();

        collect($array_numbers)->each(function ($value) use (&$table_hash, &$pairs_numbers, $sum) {
            $target = $sum - $value;

            if ($table_hash->has($target)) {
                $pairs_numbers->push([$value, $target]);
            }

            $table_hash->put($value, true);
        });

        dd($pairs_numbers);
    }

}
