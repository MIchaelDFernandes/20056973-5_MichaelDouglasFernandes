<div class="row">
    <?php foreach ($bolos as $bolo):
        list($nome, $caminho) = $bolo;
    ?>
    
    <div class="col-md-4 col-sm-12">
        <a href=<?="index.php?acessando=produto&bolo=".$nome?>>
            <img src=<?=$caminho?> alt="alt" width="100%"/>
        </a>
    </div>
    <?php endforeach;?>
</div>
