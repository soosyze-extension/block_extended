<?php

return [
    'blockextended.hook.block' => [
        'class' => 'SoosyzeExtension\BlockExtended\Hook\Block',
        'hooks' => [
            'block.create.form.data' => 'hookBlockCreateFormData'
        ]
    ]
];
