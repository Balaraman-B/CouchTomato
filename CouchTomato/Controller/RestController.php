<?php

require ("Model/RestModel.php");


class RestController {

    function CreateRestDropdownList() {
        $RestModel = new RestModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a city: 
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($RestModel->GetRestTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateRestTables($types)
    {
        $RestModel = new RestModel();
        $RestArray = $RestModel->GetRestByType($types);
        $result = "";
        
        
        foreach ($RestArray as $key => $rest) 
        {
            $result = $result .
                    "<table class = 'RestTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ></th>
                            <th width = '75px' >Name: </th>
                            <td>$rest->name</td>
                        </tr>
                        

                        <tr>
                            <th>Type: </th>
                            <td>$rest->type</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$rest->price</td>
                        </tr>
                        
                        <tr>
                            <th>city: </th>
                            <td>$rest->city</td>
                        </tr>
                        
                        <tr>
                            <th>Address: </th>
                            <td>$rest->Address</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$rest->review</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
        
    }

}

?>
