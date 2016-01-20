<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <?php foreach ($menu as $item_menu): ?>
            <li><a href="<?=$item_menu['href']?>"><?=$item_menu['category']?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <?php $current_submenu = (isset($_GET['category'])) ? $_GET['category'] : 'languages'; ?>
            <?php foreach ($menu[$current_submenu]['sub_menu'] as $item_sublink): ?>
            <li><a href="<?=$item_sublink['sub_link']?>"><?=$item_sublink['page']?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>