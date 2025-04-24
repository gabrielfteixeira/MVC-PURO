<title>
    <?php echo $title;?>
</title>

<ul>
    <?php foreach ($users as $item) {?>
    
        <li><?php echo $item['id']; ?> </li>
        <li><?php echo $item['nome']; ?> </li>
        <hr>
    <?php }?>



</ul>