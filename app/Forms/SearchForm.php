<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class SearchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('searchText', 'text');
    }
}
