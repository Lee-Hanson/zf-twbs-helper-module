<?php

// Documentation test config file for "Components / Badges" part
return array(
    'title' => 'Badges',
    'url' => 'https://getbootstrap.com/components/badge/',
    'tests' => array(
        array(
            'title' => 'Exemple',
            'url' => 'https://getbootstrap.com/components/badge/#example',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                // H1
                echo '<h1>Example heading ' . $oView->badge('New') . '</h1>' . PHP_EOL;
                // H2
                echo '<h2>Example heading ' . $oView->badge('New') . '</h2>' . PHP_EOL;
                // H3
                echo '<h3>Example heading ' . $oView->badge('New') . '</h3>' . PHP_EOL;
                // H4
                echo '<h4>Example heading ' . $oView->badge('New') . '</h4>' . PHP_EOL;
                // H5
                echo '<h5>Example heading ' . $oView->badge('New') . '</h5>' . PHP_EOL;
                // H6
                echo '<h6>Example heading ' . $oView->badge('New') . '</h6>';
            },
            'expected' => '<h1>Example heading <span class="badge&#x20;badge-default">New</span></h1>' . PHP_EOL .
            '<h2>Example heading <span class="badge&#x20;badge-default">New</span></h2>' . PHP_EOL .
            '<h3>Example heading <span class="badge&#x20;badge-default">New</span></h3>' . PHP_EOL .
            '<h4>Example heading <span class="badge&#x20;badge-default">New</span></h4>' . PHP_EOL .
            '<h5>Example heading <span class="badge&#x20;badge-default">New</span></h5>' . PHP_EOL .
            '<h6>Example heading <span class="badge&#x20;badge-default">New</span></h6>',
            'tests' => array(
                array(
                    'title' => 'Contextual variations',
                    'url' => 'https://getbootstrap.com/components/badge/#contextual-variations',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        // Default
                        echo $oView->badge('Default') . PHP_EOL;
                        // Primary
                        echo $oView->badge('Primary', 'primary') . PHP_EOL;
                        // Success
                        echo $oView->badge('Success', 'success') . PHP_EOL;
                        // Info
                        echo $oView->badge('Info', 'info') . PHP_EOL;
                        // Warning
                        echo $oView->badge('Warning', 'warning') . PHP_EOL;
                        // Danger
                        echo $oView->badge('Danger', 'danger');
                    },
                    'expected' => '<span class="badge&#x20;badge-default">Default</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-primary">Primary</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-success">Success</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-info">Info</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-warning">Warning</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-danger">Danger</span>',
                ),
                array(
                    'title' => 'Pill badges',
                    'url' => 'https://getbootstrap.com/components/badge/#pill-badges',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        // Default
                        echo $oView->badge('Default', 'default', true) . PHP_EOL;
                        // Primary
                        echo $oView->badge('Primary', 'primary', true) . PHP_EOL;
                        // Success
                        echo $oView->badge('Success', 'success', true) . PHP_EOL;
                        // Info
                        echo $oView->badge('Info', 'info', true) . PHP_EOL;
                        // Warning
                        echo $oView->badge('Warning', 'warning', true) . PHP_EOL;
                        // Danger
                        echo $oView->badge('Danger', 'danger', true);
                    },
                    'expected' => '<span class="badge&#x20;badge-default&#x20;badge-pill">Default</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-primary&#x20;badge-pill">Primary</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-success&#x20;badge-pill">Success</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-info&#x20;badge-pill">Info</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-warning&#x20;badge-pill">Warning</span>' . PHP_EOL .
                    '<span class="badge&#x20;badge-danger&#x20;badge-pill">Danger</span>',
                ),
            ),
        ),
    ),
);
