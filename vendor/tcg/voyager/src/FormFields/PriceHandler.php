<?php

namespace TCG\Voyager\FormFields;

class PriceHandler extends AbstractHandler
{
    protected $codename = 'price';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.price', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
