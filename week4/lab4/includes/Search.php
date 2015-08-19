<form action="#" method="GET">
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

    <fieldset>
        <legend><b>SEARCH DATA</b></legend>
        <label>Search</label>
        <input name="dataone" type="search" placeholder="Search...." />
        <input name="datatwo" value="data2" type="hidden" />

        <input type ="hidden" name="action" value ="Submit1"/>
        <input type="submit" value="Submit2" />
    </fieldset>            
</form>
