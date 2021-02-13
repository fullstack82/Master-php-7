<tr>
    <?php foreach ($categorias as $categoria) : ?>
        <!--Con la función PHP foreach() podemos recorrer los diferentes tipos de arrays y objetos de una manera controlada.-->
        <th><?= $categoria ?></th>
    <?php endforeach; ?>
</tr>