<form  align="right" action="#" method="GET">
    
    <fieldset>
        <b><legend>SEARCH</legend></b>
        <label>Column</label>  
        <select name="column">
            <option value="id">ID</option>
            <option value="corp">Corp</option>
            <option value="incorpDate">Incorp. Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zipcode</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>
        <label>&#160&#160&#160&#160Search</label>
        <input name="Search" type="search"/>
    
         <input type="hidden" name="action" value="search" />
        <input type="submit" value="Submit" />
    </fieldset>            
</form>