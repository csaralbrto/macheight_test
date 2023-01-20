<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        /* Data to initiate the method */
        $array_numbers = [1,5,7,-1];
        $sum = 6;
        $match_pairs = 1;


        /* Start of the method */

        $pairs_numbers = collect();
        $table_hash = collect();

        collect($array_numbers)->each(function ($value) use (&$table_hash, &$pairs_numbers, $sum) {
            $target = $sum - $value;

            if ($table_hash->has($target)) {
                $pairs_numbers->push([$value, $target]);
            }

            $table_hash->put($value, true);
        });

        /* Test result */

        $this->assertEquals($match_pairs,sizeof($pairs_numbers));
    }
}
