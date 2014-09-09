<?php

////File is a .inc because it is intended to be included with another file and not executed on its own.
//
////Best practices for naming classes (Starts with Capital Letter)
//class Address {}
//class PhysicalAddress {}
//class Physical_Address {}
//// Works, but isnt best practice and can mess something up in small sets of circumstances
//class the_physical_address {}
//
////Wont work, starts with a number
//class 21_jump_street {}

//class Address {
//    public $streetName;
//    public $subdivision_name = 'California';
//    //Not best practice, it implies a different scope
//    public $_city;
//    //Parse Error, dont do
////    public $time_updated = time();
////    public $-addressId;
////    public $city_copy = $_city;
//}


/**
 *
 * Physical Address
 */

class Address {
    //Street Address
    public $street_address_1;
    public $street_address_2;

    //Name of City
    public $city_name;

    //Name of Subdivision
    public $subdivision_name;

    //Postal Code
    public $postal_code;

    //Name of country
    public $country_name;

//Display an address in HTML
    function display(){
        $output = '';

        //Street Address
        $output .= $this->street_address_1;
        if($this->street_address_2){
            $output.= $this->street_address_2;
        }
        //City, sub, postal
        $output .= '<br />';
        $output .= $this->city_name . ', ' . $this->subdivision_name;
        $output .= $this->postal_code;

        //Country
        $output .= '<br />';
        $output .= $this->country_name;

        return $output;
    }
}

?>