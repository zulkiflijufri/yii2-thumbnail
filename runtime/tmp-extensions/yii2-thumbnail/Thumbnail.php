<?php

namespace zulkiflijufri\bs;

use \yii\bootstrap\Widget;

class Thumbnail extends Widget
{
    /**
     * @var string $title
     */
    public $title = '';

    /**
     * @var string $description
     */
    public $description = '';

    /**
     * @var array $imgOptions
     */
    public $imgSource = 'http://placehold.it/240x200';

    /**
     * @var string $template
     */
    public $template = <<<HTML
    <div class="thumbnail">
        <img src="{imgSource}">
        <div class="caption">
            <h3>{title}</h3>
            <p>{description}</p>
        </div>
    </div>
    HTML;



    public function init()
    {
        parent::init();
        echo strtr(
            $this->template,
            [
                '{imgSource}' => $this->imgSource,
                '{title}' => $this->title,
                '{description}' => $this->description,
            ]
        );
    }
}
