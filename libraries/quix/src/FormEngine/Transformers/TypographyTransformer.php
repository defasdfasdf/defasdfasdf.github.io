<?php

namespace ThemeXpert\FormEngine\Transformers;

class TypographyTransformer extends TextTransformer
{
    /**
     * Get type for the typography.
     *
     * @param        $config
     * @param string $type
     *
     * @return string
     */
    public function getType($config, $type = "")
    {
        return "typography";
    }

    /**
     * Get typography value.
     *
     * @param $config
     *
     * @return array|mixed|null
     */
    public function getValue($config)
    {
        $value = $this->get($config, "value", null);

        if ($value === null) {
            return [
                "size" => "",
                "bold" => "",
                "underline" => "",
                "italic" => "",
                "family" => "",
                "case" => "",
                "spacing" => "",
                "height" => "",
            ];
        } else {
            $value = (array)$value;
        }

        $value = array_pick($value, [
            "size",
            "bold",
            "underline",
            "italic",
            "family",
            "case",
            "spacing",
            "height"
        ], true); //exclusive

        return $value;
    }
}
