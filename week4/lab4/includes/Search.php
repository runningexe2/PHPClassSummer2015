<center>
<form action="#" method="get">
        <br>
                <label>Search by:</label>  
       <br/>
        <select class="btn btn-default" name="colSearch">
            <option value="id">ID</option>
            <option value="corp">Corp. Name</option>
            <option value="incorp_dt">Incorporation Date</option>
            <option value="email">E-mail</option>
            <option value="zipcode">Zip-Code:</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select> 
               
        <input name="Search" type="search" autofocus="autofocus" />
        <br/><br/>
        <input type="hidden" name="action" value="search" />
        
        <input type="submit" class="btn btn-primary" value="Submit" />
        
        <input type="reset" class="btn btn-default" value="Clear" onClick="location.href='view-page.php'" />

</form></center>