<?php
        $menu = array(
            array(
                'title' => 'Home',
                'url' => '/',
                'icon' => 'fa-home'
            ),
            array(
                'title' => 'About',
                'url' => '/about',
                'icon' => 'fa-info-circle'
            ),
            array(
                'title' => 'Services',
                'url' => '/services',
                'icon' => 'fa-envelope'
            ),
            array(
                'title' => 'Projects',
                'url' => '/projects',
                'icon' => 'fa-info-circle',
                'submenu' => array(
                    array(
                        'title' => 'Features',
                        'url' => '/features',
                        'icon' => 'fa-folder'
                    ),
                    array(
                        'title' => 'Our Team',
                        'url' => '/our-team',
                        'icon' => 'fa-book'
                    ),
                    array(
                        'title' => 'About',
                        'url' => '/about',
                        'icon' => 'fa-info-circle'
                    ),
                ),
            ),
            array(
                'title' => 'Testimonial',
                'url' => '/testimonial',
                'icon' => 'fa-envelope'
            ),
            array(
                'title' => 'Quotation',
                'url' => '/quotation',
                'icon' => 'fa-envelope'
            ),
            array(
                'title' => 'Page 404 =',
                'url' => '/page-404',
                'icon' => 'fa-envelope'
            ),
        );
    ?>

    <ul>
        <?php foreach ($menu as $menuItem): ?>
            <li>
                <a href="<?php echo $menuItem['url']; ?>">
                    <i class="fa <?php echo $menuItem['icon']; ?>"></i>
                    <?php echo $menuItem['title']; ?>
                </a>
                <?php if (!empty($menuItem['submenu'])): ?>
                    <ul>
                        <?php foreach ($menuItem['submenu'] as $subMenuItem): ?>
                            <li>
                                <a href="<?php echo $subMenuItem['url']; ?>">
                                    <i class="fa <?php echo $subMenuItem['icon']; ?>"></i>
                                    <?php echo $subMenuItem['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>    
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>