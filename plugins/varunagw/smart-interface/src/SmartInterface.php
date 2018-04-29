<?php

namespace VarunAgw\SmartInterface;

class SmartInterface {

    const INTERFACE_CLI = 1;
    const INTERFACE_WEB = 2;

    protected $interface;

    public function __construct() {
        if ('cli' == php_sapi_name()) {
            $this->interface = self::INTERFACE_CLI;
        } else {
            $this->interface = self::INTERFACE_WEB;
        }
    }

    /**
     * Choose a value from the array
     * Ask user in CLI
     * Choose random in web interface
     * @param $array
     */
    public function chooseFromArray($array) {
        switch ($this->interface) {
            case self::INTERFACE_CLI:
                while (true) {
                    echo "Please choose a value among these values ("
                    . implode(', ', $array) . ")? ";

                    $input = (int) rtrim(fgets(STDIN));
                    if (in_array($input, $array)) {
                        return $input;
                    } else {
                        echo "\nInvalid Input. Please try again.\n";
                    }
                }
                break;
            case self::INTERFACE_WEB:
                return $array[array_rand($array)];
                break;
        }
    }

    /**
     * Execute at beginning before content
     */
    public function printHeader() {
        switch ($this->interface) {
            case self::INTERFACE_WEB:
                echo '<pre>';
                break;
        }
    }

    /**
     * Execute at beginning before content
     */
    public function printNewLine() {
        switch ($this->interface) {
            case self::INTERFACE_CLI:
                echo "\n";
                break;
            case self::INTERFACE_WEB:
                echo '<br>';
                break;
        }
    }

    /**
     * Execute at end before ending
     */
    public function printFooter() {
        switch ($this->interface) {
            case self::INTERFACE_WEB:
                echo '</pre>';
                break;
        }
    }

}
