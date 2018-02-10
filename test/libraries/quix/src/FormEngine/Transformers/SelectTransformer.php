<?php

namespace ThemeXpert\FormEngine\Transformers;

class SelectTransformer extends TextTransformer
{
    /**
     * Get the type for the select.
     *
     * @param        $config
     * @param string $type
     *
     * @return string
     */
    public function getType($config, $type = "")
    {
        return "select";
    }

    /**
     * Get options for the select.
     *
     * @param $config
     *
     * @return mixed|null
     */
    public function getOptions($config)
    {
        return $this->get($config, 'options', []);
    }

    /**
     * Transform the select.
     *
     * @param $config
     *
     * @return array
     */
    public function transform($config)
    {
        $multiple = $this->get($config, 'multiple', false);

        $options = $this->getOptions($config);

        $options = array_map(function ($value, $label) {
            return compact("value", "label");
        }, array_keys($options), array_values($options));


        $config = parent::transform($config);

        $config['options'] = $options;
        $config['multiple'] = $multiple;

        return $config;
    }

    /**
     * Get the value for the select.
     *
     * @param $config
     *
     * @return array|mixed|null
     */
    public function getValue($config)
    {
        if ($this->get($config, 'multiple')) {
            $value = (array)$this->get($config, 'value', []);
        } else {
            $value = $this->get($config, 'value', '');
        }

        return $value;
    }
}
