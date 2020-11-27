<form action = '?#' method = 'POST'>
    <label>Name</label>
    <input type = 'text' required name = 'pname'></input>
    <label>Diameter</label>
    <input type = 'number' required name = 'diameter'></input>
    <label>Year Length</label>
    <input type = 'number' required name = 'year_length'></input>
    <label>Life?</label>
    <input type = 'checkbox' name = 'life' value = '0'></input>
    <label>Type</label>
    <input type = 'text' required name = 'ptype'></input>
    <label>Star</label>
    <input type = 'text' required name = 'star'></input>
    <label>Age</label>
    <input type = 'number' required name = 'age'></input>
    <label>f_starId</label>
    <input type = 'number' required name = 'f_starID'></input>
    <label>A Picture?</label>
    <input type = "file" required name = 'planet_img' id = "planet_img">
    <button name = 'planetForm'>Insert!</button>
</form>