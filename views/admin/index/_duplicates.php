<div id="harvester-duplicates" class="panel">
<h4><?php echo __('Duplicate Harvested Items'); ?></h4>
<ul>
<?php foreach($items as $item): ?>
    <li>
    <?php echo link_to_item(
            __('Item #%s', $item->id),
            array(),
            'show',
            $item
        ); ?>
    </li>
    <?php release_object($item); ?>
<?php endforeach; ?>
</ul>
</div>
