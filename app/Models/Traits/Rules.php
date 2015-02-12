<?php namespace App\Models\Traits;

trait Rules
{

    /**
     * Get all registered rules
     *
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }

}
