
<center><form  action="#" method="get">
        <br><br>
        <br>
        <label>Ascending:&#160&#160</label><input type="radio" name="sort" value="ASC" />&#160&#160 &#160&#160
        <label>Descending:&#160&#160</label><input type="radio" name="sort" value="DESC" />
        <br>
        <label >Sort By:</label> 
        <br/>
        <select class="btn btn-default" name="sortby">
            <option value="id">ID</option>
            <option value="corp">Corporation Name</option>
            <option value="incorp_dt">Incorporation Date</option>
            <option value="email">E-mail</option>
            <option value="zipcode">Zip-Code:</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>
        <br/>
        <input type="hidden" name="action" value="sort" />
        <br/>
        <input align="right" type="submit" class="btn btn-primary" value="Submit" />

        <input type="reset" class="btn btn-default" value="Clear" onClick="location.href = 'view-page.php'" />
        <br/><br/><br/><br/>
    </form></center>
