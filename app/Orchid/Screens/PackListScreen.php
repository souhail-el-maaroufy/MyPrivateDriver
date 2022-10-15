<?php

namespace App\Orchid\Screens;
use Orchid\Screen\Actions\Link;
use App\Models\Pack;
use App\Orchid\Layouts\PostListLayout;
use Orchid\Screen\Screen;

class PackListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'packs'=>Pack::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Blog pack';
    }

  /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All blog packs";
    }
    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('create')
            ->icon('pencil')
            ->route('platform.pack.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            PostListLayout::class
        ];
    }
}
