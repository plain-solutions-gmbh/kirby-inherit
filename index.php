<?php

Kirby::plugin('microman/inherit', [
	'fieldMethods' => [
        'inherit' => function ($field, $page = null) {
			
			$page = $page ?? page();
			$field = $page->content()->get($field->key());
				
			if ($field->isEmpty() && is_a($page, "Kirby\Cms\Page")) {
				return $field->inherit(($page->parent() ?? site()));
			
			}
			return $field;

		}
    ]
]);
