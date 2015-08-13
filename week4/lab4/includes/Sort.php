<center><form action = "#" method = "post">

        <fieldset>
            <legend><b>Sorting Data</b></legend>
            <label>Sort By:    </label>
            <input type = "radio" name = "option" value = "Yes">Ascending
            <input type = "radio" name = "option" value = "No">Descending
            </br >

            <h3> What to sort </h3>

            <label></label>
            <select>
                <option value = "id">ID</option>
                <option value = "corp">Corporation</option>       
                <option value = "incorp_dt">Incorp. Date</option> 
                <option value = "email">E-Mail</option> 
                <option value = "zipcode">Zip-Code</option> 
                <option value = "owner">Owner</option> 
                <option value = "phone">Phone</option> 
            </select>
            <input type ="hidden" name="action" value ="sort"/>
            <input type="submit" value="Submit">
        </fieldset>

    </form></center>