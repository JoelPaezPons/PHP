<h2>Buscador de Productos</h2>
<form action="index.php" method="GET">
    <input type="hidden" name="menu" value="product">
    <input type="hidden" name="option" value="search_by_id">
    
    <label>ID del Producto:</label>
    <input type="text" name="id" required>
    <input type="submit" value="Buscar">
</form>