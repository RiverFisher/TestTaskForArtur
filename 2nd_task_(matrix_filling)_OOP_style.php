<?php

class SpecificMatrix
{
    /**
     * @var
     */
    private $matrix;

    /**
     * @param int $from
     * @param int $to
     */
    public function fillOfUniqueRandom(int $from, int $to)
    {
        $this->matrix = [];

        $uniqueNumbers = [];

        for ($i = 0; $i < 6; $i++) {
            $this->matrix[$i] = [];
            for ($j = 0; $j < 6; $j++) {
                do {
                    $value = rand(0, 100);
                } while (in_array($value, $uniqueNumbers));
                $this->matrix[$i][$j] = $value;
                array_push($uniqueNumbers, $value);
            }
        }
    }

    /**
     *
     */
    public function print()
    {
        print_r($this->matrix);
    }

    /**
     *
     */
    public function clear()
    {
        $this->matrix = null;
    }
}

$matrix = new SpecificMatrix();
$matrix->fillOfUniqueRandom(0, 100);
$matrix->print();
$matrix->clear();
$matrix->print();
