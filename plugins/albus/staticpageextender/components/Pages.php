<?php namespace Albus\StaticPageExtender\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Theme;
use RainLab\Pages\Classes\Page;
/**
 * Pages Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Pages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Pages Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'page' => [
                'title'       => 'Страница',
                'type'        => 'dropdown'
            ]
        ];
    }

    public function getPageOptions() {
        return Page::sortBy('baseFileName')->lists('title', 'baseFileName');
    }

    public $page;
    public function onRun() {
        $theme = Theme::getActiveTheme();
        $page = Page::find($this->property('page'));
        $this->page = $page;
    }

    public function get() {
        return $this->page;
    }
}
