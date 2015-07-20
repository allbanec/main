 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand disabled" id="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav phones disabled" id="phones">
            <li class="phone-order">
                <span class="phone-order-text">«¿ ¿« œŒ “≈À≈‘ŒÕ¿Ã:</span>
            </li>
            <li class="phone-place">
                <span class="phone-number">8499 488 61 00</span>
                <span class="phone-number">8903 668 98 98</span>
            </li>
        </ul><?php /*    */   ?>

<div class="collapse navbar-collapse" id="top-menu">
    <ul class="nav navbar-nav navbar-right menu<?php echo $class_sfx;?>"
        <?php
        $tag = '';
        if ($params->get('tag_id')!=NULL) {
            $tag = $params->get('tag_id').'';
            echo ' id="'.$tag.'"';
        }
        ?>
        >
        <?php
        foreach ($list as $i => &$item) :
            $class = 'item-'.$item->id;
            if ($item->id == $active_id) {
                $class .= ' current';
            }
            if (in_array($item->id, $path)) {
                $class .= ' active';
            }
            elseif ($item->type == 'alias') {
                $aliasToId = $item->params->get('aliasoptions');
                if (count($path) > 0 && $aliasToId == $path[count($path)-1]) {
                    $class .= ' active';
                }
                elseif (in_array($aliasToId, $path)) {
                    $class .= ' alias-parent-active';
                }
            }
            if ($item->deeper) {
                $class .= ' deeper';
            }
            if ($item->parent) {
                $class .= ' parent dropdown';
            }
            if (!empty($class)) {
                $class = ' class="'.trim($class) .'"';
            }
            echo '<li'.$class.'>';
            // Render the menu item.
            switch ($item->type) :
                case 'separator':
                case 'url':
                case 'component':
                    require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
                    break;

                default:
                    require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                    break;
            endswitch;
            // The next item is deeper.
            if ($item->deeper) {
                echo '<ul  class="dropdown-menu" role="menu">';
            }
            // The next item is shallower.
            elseif ($item->shallower) {
                echo '</li>';
                echo str_repeat('</ul></li>', $item->level_diff);
            }
            // The next item is on the same level.
            else {
                echo '</li>';
            }
        endforeach;
        ?>
    </ul>
</div>
</div>
</nav>