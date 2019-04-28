<div>
    <?php
    $fileUpload = new File();
    $fileUpload-> getDirContents(''.__DIR__.'/files');
    ?>
    <?php foreach($viewmodel as $item) : ?>
    <div class="well">
        <h3><?php echo $item['title']; ?></h3>
        <small><?php echo $item['create_date']; ?></small>
        <hr/>
        <p><?php echo $item['body']; ?></p>
        
    </div>
    <?php endforeach;?>
</div>