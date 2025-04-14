<?php

namespace App;

/**
 * Count the number of divisors of a positive integer n.
 *
 * Random tests go up to n = 500000, but fixed tests go higher.
 */
class CountDivisors
{
    /**
     * @param int $n
     */
    static public function execute(int $n): int
    {
        $result = 0;
        $divisors = [];
        for($i=1; $i <= $n; $i++) {
            if ($n % $i === 0) {
                $result += 1;
                $divisors[] = $i;
            }
        }
        self::log(sprintf(
            "divisors found for \"%d\": %s",
            $n,
            print_r($divisors, true),
        ));
        return $result;
    }

    private static function log(string $message): void
    {
        echo sprintf(
            "Log: %s%s",
            $message,
            PHP_EOL,
        );
    }
}
