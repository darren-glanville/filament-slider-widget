<?php

namespace DgDev\SliderWidget;

use Filament\Widgets\Widget;

class SliderWidget extends Widget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 15;

    protected static string $view = 'slider-widget::slider';

    public array $slides;

    public function getSlides()
    {
        return collect([
            // My Account
            [
                'icon'        => 'question-mark-circle',
                'title'       => 'Did you know?',
                'text'        => 'You can change your password, update your address details and update your billing details from the My Account page.',
                'button_url'  => route('filament.main.pages.my-account'),
                'button_text' => 'My Account',
            ],
            [
                'icon'        => 'calendar-days',
                'title'       => 'Filtering the calendar',
                'text'        => 'The calendar is able to be filtered to show certain locations, you can do this by clicking the Filter Locations button and selecting the locations you want to see.',
                'button_url'  => route('filament.main.pages.calendar'),
                'button_text' => 'Calendar',
            ],
        ]);
    }
}
