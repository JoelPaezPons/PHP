<h2>Search Product by ID</h2>
<form action="index.php" method="GET">
    <input type="hidden" name="menu" value="product">
    <input type="hidden" name="option" value="search_by_id">
    
    <label for="id">Introduce el ID del producto:</label>
    <input type="number" name="id" id="id" required>
    
    <input type="submit" value="Buscar">
</form>