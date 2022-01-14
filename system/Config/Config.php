<?php

namespace System\Config;

class Config
{

    private static $instance;

    //  config::get("app['BASE_DIR']")
    private $config_nested_array = [];

    //  config::get("app.BASE_DIR")
    private $config_dot_array = [];

    private function __construct()
    {
        $this->initialConfigArrays();
    }

    /**
     * Get data from Config directory.
     */
    private function initialConfigArrays()
    {
        $configPath = dirname(dirname(__DIR__)) . '/config/';
        foreach (glob($configPath . '*.php') as $fileName) {
            //Put all data to $config
            $config = require $fileName;
            //$key is file name
            $key = $fileName;
            $key = str_replace($configPath, '', $key);
            $key = str_replace('.php', '', $key);
            //Put data to $config_nested_array
            $this->config_nested_array[$key] = $config;
        }

        $this->initialDefaultValues();
        $this->config_dot_array = $this->array_dot($this->config_nested_array);
    }

    /**
     * Create CURRENT_ROUTE to use in application
     */
    private function initialDefaultValues()
    {
        //Remove the data was sent in method Get (after '?')
        $temporary = str_replace($this->config_nested_array['app']['BASE_URL'], '', explode('?', $_SERVER['REQUEST_URI'])[0]);
        //Remove '/' if url is empty
        $temporary === "/" ? $temporary = "" : $temporary = substr($temporary, 1);
        //Add CURRENT_ROUTE to $config_nested_array
        $this->config_nested_array['app']['CURRENT_ROUTE'] = $temporary;
    }

    private function array_dot($array, $return_array = array(), $return_key = '')
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $return_array = array_merge($return_array, $this->array_dot($value, $return_array, $return_key . $key . '.'));
            } else {
                $return_array[$return_key . $key] = $value;
            }
        }
        return $return_array;
    }

    private static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function get($key)
    {
        $instance = self::getInstance();
        if (isset($instance->config_dot_array[$key])) {
            return $instance->config_dot_array[$key];
        } else {
            throw new \Exception('"' . $key . '" not exist in config array');
        }
    }
}
